#----------------------------------------------------------------------
# Name:        wxPython.spec
# Purpose:     RPM Build and packaging instructions
#
# Author:      Robin Dunn
#
# RCS-ID:      $Id$
# Copyright:   (c) 2004 by Total Control Software
# Licence:     wxWindows license
#----------------------------------------------------------------------


# The following values can be set on the rpmbuild command line with
# --define 'name VALUE'  If no value is set on the command line then
# the default value set here will be used instead.


# Which version of Python to build with.  Used to assemble python
# binary name so use '2.3', '2.4', etc.
%if %{?pyver:0}%{!?pyver:1}
%define pyver 2.4
%endif


# Which wxWidgets port to build and use.  Current acceptable values
# are 'gtk' and 'gtk2'.
%if %{?port:0}%{!?port:1}
%define port gtk2
%endif


# Build in unicode mode?  Can only be used if port is gtk2, acceptable
# values are '0' and '1'
%if %{?unicode:0}%{!?unicode:1}
%define unicode 1
%endif


# Should the builtin image and etc. libs be used, or system libs?
# Distro specific RPMs should probably set this to 0, generic ones
# should use 1.  
# NOTE: I'm trying 0 for this next release to see if I can get rid of
# this...
%if %{?builtin_libs:0}%{!?builtin_libs:1}
%define builtin_libs 0
%endif


# Should --enable-debug_flag be used in release builds?  Using it
# defines __WXDEBUG__ and gives us runtime diagnostics that are turned
# into Python exceptions.  (So turning it on is a very helpful thing
# IMO and is recommended.)  The code is still compiled with
# optimization flags and and without debug info and such when this
# option is used, it simply turns on some extra code.
%if %{?debug_flag:0}%{!?debug_flag:1}
%define debug_flag 1
%endif


# Used to set the Release tag below.  I normally use it to define what
# distro the RPM was built on and also include the version of Python
# it was built with.  
%if %{?release:0}%{!?release:1}
%define release 1_py%{pyver}
%endif


# This one is used to control whether the full 4 components of the
# verseion number are used in the site-packages subdirectory name.  By
# default only 2 or 3 components (depending on stable/unstable status)
# are used.
%if %{?fullver:0}%{!?fullver:1}
%define fullver 0
%endif


# Whether to add --enable-mediactrl to the wxWidgets configure.  For
# some older versions of gstreamer-0.8 it currently incorerctly allows
# its use eventhough there is a compatibility problem that causes a
# failed compile.
%if %{?mediactrl:0}%{!?mediactrl:1}
%define mediactrl 1
%endif


#----------------------------------------------------------------------
# Other variables used below

%define pref 	   %{_prefix}
%define python 	   /usr/bin/python%{pyver}
%define tarname    wxPython-src
%define version    3.0.1.0
%define ver2       3.0

%define chartype   %(if [ "%{unicode}" = "1" ]; then echo unicode; else echo ansi; fi)
%define gtktype    %(if [ "%{port}" = "gtk2" ]; then echo 2; fi)
%define using_gtk1 %(if [ "%{port}" = "gtk" ]; then echo 1; else echo 0; fi)

%define wxprefbase %{pref}/lib/wxPython
%define wxpref     %{wxprefbase}-%{version}-%{port}-%{chartype}
%define pkgname    wxPython

# turn off the generation of debuginfo rpm  (RH9) ??
%define debug_package %{nil}


#----------------------------------------------------------------------
# Package definition
#----------------------------------------------------------------------
Name:      %{pkgname}%{ver2}
Summary:   Cross platform GUI toolkit for Python
Version:   %{version}
Release:   %{release}
Source0:   %{tarname}-%{version}.tar.bz2
License:   wx Library Licence, Version 3
URL:       http://wxPython.org/
Packager:  Robin Dunn <robin@alldunn.com>
Group:     Development/Python
BuildRoot: %{_tmppath}/%{pkgname}-buildroot
Prefix:    %{pref}

%description 
Cross platform GUI toolkit for Python




%package -n %{pkgname}%{ver2}-%{port}-%{chartype}
Summary:   Cross platform GUI toolkit for Python
Group:     Development/Python
Requires:  %{pkgname}-common
Obsoletes: wxPythonGTK%{gtktype}-py%{pyver}, wxPythonGTK%{gtktype}
Provides:  wxPython


%description -n %{pkgname}%{ver2}-%{port}-%{chartype}
wxPython is a GUI toolkit for the Python programming language. It
allows Python programmers to create programs with a robust, highly
functional graphical user interface, simply and easily. It is
implemented as a Python extension module (native code) that wraps the
popular wxWidgets cross platform GUI library, which is written in C++.

wxPython is a cross-platform toolkit. The same program will usually
run on multiple platforms without modification. Currently supported
platforms are 32-bit Microsoft Windows, most Unix or unix-like
systems, and Macintosh OS X.

This package contains the wxPython runtime files built for the
wxWidgets %{port} port with %{chartype} character type.





%package -n %{pkgname}-common-%{port}-%{chartype}
Summary: Common files for needed by all wxPython runtimes
Group: Development/Python
Provides: %{pkgname}-common

# They obsolete each other so any of them can be installed over another
# without conflicts
Obsoletes: %{pkgname}-common-gtk-ansi
Obsoletes: %{pkgname}-common-gtk2-ansi
Obsoletes: %{pkgname}-common-gtk2-unicode

%description -n %{pkgname}-common-%{port}-%{chartype}
This package contains the common files needed by any version of the
wxPython runtime.  This pacakge also installs a wx.pth file which will
determine which of the installed runtimes is the default version of
wxPython that is imported automatically with a bare "import wx".





%package -n %{pkgname}%{ver2}-devel-%{port}-%{chartype}
Summary: wxPython development files
Group: Development/Libraries
Requires: %{pkgname}%{ver2}-%{port}-%{chartype} = %{version}

%description -n %{pkgname}%{ver2}-devel-%{port}-%{chartype}
This packages contains the headers and etc. for building apps or
Python extension modules that use the same wxWidgets shared libraries
that wxPython uses.



#----------------------------------------------------------------------
%prep
%setup -q -n %{tarname}-%{version}


#----------------------------------------------------------------------
%build

WXDIR=`pwd`

# Configure and build wxWidgets
mkdir bld
cd bld
../configure \
%if %{using_gtk1}
	--with-gtk=1 \
%else 
	--with-gtk=2 \
%endif
	--prefix=%{wxpref} \
	--disable-monolithic \
	--disable-rpath \
	--with-opengl \
	--with-gnomeprint \
	--enable-geometry \
	--enable-graphics_ctx \
	--enable-optimise \
	--enable-sound 	--with-sdl \
%if %{mediactrl}
	--enable-mediactrl \
%endif
	--enable-display \
%if %{unicode}
	--enable-unicode \
%else
	--disable-unicode \
%endif
%if %{debug_flag}
	--enable-debug_flag \
%endif
	--disable-debugreport \
%if %{builtin_libs}
	--with-libjpeg=builtin \
	--with-libpng=builtin \
	--with-libtiff=builtin \
	--with-zlib=builtin \
%endif


make 
make -C contrib/src/gizmos 
make -C contrib/src/stc



# Build wxPython
cd $WXDIR/wxPython
%{python} setup.py \
	WXPORT=%{port} \
	UNICODE=%{unicode} \
	EP_ADD_OPTS=1 \
	EP_FULL_VER=%{fullver} \
	NO_SCRIPTS=1 \
	WX_CONFIG="$WXDIR/bld/wx-config --no_rpath" \
       	build_ext --rpath=%{wxpref}/lib \
	build



#----------------------------------------------------------------------
%install

WXDIR=`pwd`

# Install wxGTK and contribs
cd bld
make prefix=$RPM_BUILD_ROOT%{wxpref} install
make -C contrib/src/gizmos prefix=$RPM_BUILD_ROOT%{wxpref} install
make -C contrib/src/stc prefix=$RPM_BUILD_ROOT%{wxpref} install

PY_WX_CONFIG_OPTIONS="--version=%{version} --toolkit=%{port} --static=no"
if [ %{unicode} = 1 ]; then
    PY_WX_CONFIG_OPTIONS="$PY_WX_CONFIG_OPTIONS --unicode"
fi

# Install wxPython for wxGTK
cd $WXDIR/wxPython
%{python} setup.py \
	WXPORT=%{port} \
	UNICODE=%{unicode} \
	EP_ADD_OPTS=1 \
	EP_FULL_VER=%{fullver} \
	NO_SCRIPTS=1 \
	WX_CONFIG="$RPM_BUILD_ROOT%{wxpref}/bin/wx-config --prefix=$RPM_BUILD_ROOT%{wxpref} --no_rpath" \
        SYS_WX_CONFIG="wx-config $PY_WX_CONFIG_OPTIONS" \
       	build_ext --rpath=%{wxpref}/lib \
	install \
	--root=$RPM_BUILD_ROOT


# remove the wx-config symlink, we'll redo it when installing the -devel package
rm $RPM_BUILD_ROOT%{wxpref}/bin/wx-config

# make sure that debug info is stripped
strip $RPM_BUILD_ROOT%{pref}/lib*/python%{pyver}/site-packages/wx-%{ver2}*-%{port}-%{chartype}/wx/*.so


# Since I want this RPM to be as generic as possible I won't let
# distutils copy the scripts (NO_SCRIPTS=1 above) since it will mangle
# the #! line to use the real python pathname.  Since some distros
# install python 2.2 as python2 and others as python I can't let
# distutils do that otherwise the dependencies will be fouled up.
# Copy them manually instead, leaving the #!/usr/bin/env line intact. 
cd $WXDIR/wxPython
mkdir -p $RPM_BUILD_ROOT%{pref}/bin
for s in \
	helpviewer \
	img2png \
	img2py \
	img2xpm \
	pyalacarte \
	pyalamode \
	pycrust \
	pyslices \
	pysliceshell \
	pywrap \
	pyshell \
	pywxrc \
	xrced; do
    cp scripts/$s $RPM_BUILD_ROOT%{pref}/bin
done



# install KDE & GNOME menu items
mkdir -p $RPM_BUILD_ROOT%{_datadir}/applnk/Development
mkdir -p $RPM_BUILD_ROOT%{_datadir}/applications
for d in distrib/*.desktop; do
	install -m 644 $d $RPM_BUILD_ROOT%{_datadir}/applnk/Development
	install -m 644 $d $RPM_BUILD_ROOT%{_datadir}/applications
done

# install KDE icons
mkdir -p $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/{16x16,32x32}/apps
mkdir -p $RPM_BUILD_ROOT%{_datadir}/pixmaps
install -m 644 wx/py/PyCrust_16.png $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/16x16/apps/PyCrust.png
install -m 644 wx/py/PyCrust_32.png $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/32x32/apps/PyCrust.png
install -m 644 wx/py/PyCrust_32.png $RPM_BUILD_ROOT%{_datadir}/pixmaps/PyCrust.png
install -m 644 wx/py/PySlices_16.png $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/16x16/apps/PySlices.png
install -m 644 wx/py/PySlices_32.png $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/32x32/apps/PySlices.png
install -m 644 wx/py/PySlices_32.png $RPM_BUILD_ROOT%{_datadir}/pixmaps/PySlices.png
install -m 644 wx/tools/XRCed/XRCed_16.png $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/16x16/apps/XRCed.png
install -m 644 wx/tools/XRCed/XRCed_32.png $RPM_BUILD_ROOT%{_datadir}/icons/hicolor/32x32/apps/XRCed.png
install -m 644 wx/tools/XRCed/XRCed_32.png $RPM_BUILD_ROOT%{_datadir}/pixmaps/XRCed.png

# install Mandrake menu items
mkdir -p $RPM_BUILD_ROOT%{_libdir}/menu
cat > $RPM_BUILD_ROOT%{_libdir}/menu/%{pkgname} <<EOF
?package(%{pkgname}): \\
	command="%{_bindir}/pyshell" \\
	needs="X11" \\
	icon="PyCrust.png" \\
	section="Applications/Development/Tools" \\
	title="PyShell" \\
	longtitle="GUI Python Shell"
?package(%{pkgname}): \\
	command="%{_bindir}/pysliceshell" \\
	needs="X11" \\
	icon="PySlices.png" \\
	section="Applications/Development/Tools" \\
	title="PySlicesShell" \\
	longtitle="GUI Python Shell"
?package(%{pkgname}): \\
	command="%{_bindir}/pycrust" \\
	needs="X11" \\
	icon="PyCrust.png" \\
	section="Applications/Development/Tools" \\
	title="PyCrust" \\
	longtitle="GUI Python Shell with Filling"
?package(%{pkgname}): \\
	command="%{_bindir}/pyslices" \\
	needs="X11" \\
	icon="PySlices.png" \\
	section="Applications/Development/Tools" \\
	title="PySlices" \\
	longtitle="GUI Python Shell with Filling"
?package(%{pkgname}): \\
	command="%{_bindir}/pyalamode" \\
	needs="X11" \\
	icon="PyCrust.png" \\
	section="Applications/Development/Tools" \\
	title="PyAlaMode" \\
	longtitle="GUI Python Shell with Filling and editor windows"
?package(%{pkgname}): \\
	command="%{_bindir}/xrced" \\
	needs="X11" \\
	icon="XRCed.png" \\
	section="Applications/Development/Tools" \\
	title="XRCed" \\
	longtitle="wxPython XRC resource editor"
EOF


#----------------------------------------------------------------------

%post -n %{pkgname}%{ver2}-%{port}-%{chartype}
if [ ! -e %{wxprefbase} ]; then
	ln -s %{pkgname}-%{version}-%{port}-%{chartype}  %{wxprefbase}
fi

%preun -n %{pkgname}%{ver2}-%{port}-%{chartype}
if [ -L %{wxprefbase} ]; then
	if [ `readlink %{wxprefbase}` == %{pkgname}-%{version}-%{port}-%{chartype} ]; then
		rm -f %{wxprefbase}
	fi
fi




%post -n %{pkgname}-common-%{port}-%{chartype}
# This is done on Mandrake to update its menus:
if [ -x /usr/bin/update-menus ]; then /usr/bin/update-menus || true ; fi

%postun -n %{pkgname}-common-%{port}-%{chartype}
# This is done on Mandrake to update its menus:
if [ "$1" = "0" -a -x /usr/bin/update-menus ]; then /usr/bin/update-menus || true ; fi



%post -n %{pkgname}%{ver2}-devel-%{port}-%{chartype}
cd %{wxpref}/bin
ln -s ../lib/wx/config/%{port}-%{chartype}*  wx-config 

%preun -n %{pkgname}%{ver2}-devel-%{port}-%{chartype}
rm %{wxpref}/bin/wx-config


#----------------------------------------------------------------------
%clean
[ "$RPM_BUILD_ROOT" != "/" ] && rm -rf $RPM_BUILD_ROOT


#----------------------------------------------------------------------

%files -n %{pkgname}%{ver2}-%{port}-%{chartype}
%defattr(-,root,root)
%doc docs/preamble.txt docs/licence.txt docs/lgpl.txt docs/readme.txt docs/changes.txt
%doc wxPython/docs/*
%dir %{pref}/lib*/python%{pyver}/site-packages/wx-%{ver2}*-%{port}-%{chartype}
%{pref}/lib*/python%{pyver}/site-packages/wx-%{ver2}*-%{port}-%{chartype}/*
%dir %{wxpref}
%dir %{wxpref}/lib
%{wxpref}/lib/libwx_*
%dir %{wxpref}/bin
%{wxpref}/bin/wxrc*
%{wxpref}/share



%files -n %{pkgname}-common-%{port}-%{chartype}
%defattr(-,root,root)
%{pref}/lib*/python%{pyver}/site-packages/wxversion.*
%{pref}/lib*/python%{pyver}/site-packages/wx.pth
%{_bindir}/*
%{_datadir}/applnk/Development/*
%{_datadir}/applications/*
%{_datadir}/icons/hicolor/*/apps/*
%{_datadir}/pixmaps/*
%{_libdir}/menu/*





%files -n %{pkgname}%{ver2}-devel-%{port}-%{chartype}
%defattr(-,root,root)
%{wxpref}/include
%{wxpref}/lib/wx
%dir %{wxpref}/bin


#----------------------------------------------------------------------
# end of file
