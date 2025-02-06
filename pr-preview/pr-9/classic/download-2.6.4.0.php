<HTML>
<HEAD><TITLE>wxPython Download</TITLE>
</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>


<img src="images/download.jpg" width="505" height="73" alt="" border="0"><br>
<p>


<P><a name="prerequisites">
<table width="100%" border="1" cellspacing="0" cellpadding="8" bgcolor="#BCB8E7">
<tr><td>
<font face="sans-serif" size="+1"><b>Prerequisites</b></font>
</td></tr>
<tr><td>
Like any other complex piece of software, wxPython requires other software in order to function properly.  Obviously you'll need <a href="http://www.python.org/"><b>Python</b></a> itself, but if you're reading this you've probably already got Python and are just here looking for the <b><a href="quotes.php">best GUI toolkit</a></b> available for Python.  Check out the details for your platform of choice here:
<p>
<font face="sans-serif"><b>Win32</b></font><br>
<ul>
<li>If you have a modern up to date version of Windows and use the binary installer for wxPython found below, you probably don't need anything else.


<p><li>If your tree controls have strange background colors, try loading this <a href="http://download.microsoft.com/download/platformsdk/Comctl32/5.80.2614.3600/W9XNT4/EN-US/50comupd.exe">MS Common Controls Update</a> as wxWidgets does something that causes a bug in one of the older versions to manifest itself.  Another way to get this update is to install Internet Explorer or MS Office apps, so if the system has those already then you probably don't need to worry about this.

<p><li>wxPython's <tt>wx.glcanvas.GLCanvas</tt> class only provides the GL Context and a <tt>wx.Window</tt> to put it in, so if you want to use the wxGLCanvas you will also need the <a href="http://PyOpenGL.sourceforge.net/">PyOpenGL</a> Python extension modules as well.

<p><li><b>Windows 95</b> users will probably also need the following items to update their systems:
<ul>
<li><a href="http://www.microsoft.com/windows/downloads/bin/W95ws2setup.exe">Winsock 2.0</a>
<li><a href="http://download.microsoft.com/download/win95upg/info/1/W95/EN-US/Opengl95.exe">OpenGL</a>
<li><a href="http://msdn.microsoft.com/library/tools/htmlhelp/wkshp/download.htm">HTML Help viewer</a>  (to view the online documentation)
</ul>
</ul>
<p><br>
<font face="sans-serif"><b>Linux/Unix/Etc.</b></font><br>
<ul>
<li>The first thing you'll need are the <a href="http://www.gtk.org/"><b>glib</b> and <b>gtk+</b></a> libraries.  Before you run off and download the sources check your system, you probably already have it.  Most distributions of Linux come with it and you'll start seeing it on many other systems too now that Sun and others have chosen GNOME as the desktop of choice.  If you don't have <b>glib</b> and <b>gtk+</b> already, you can get the sources <a href="ftp://ftp.gtk.org/pub/gtk/">here</a>.  Build and install them following the directions included.

<p><li>In order to use the wxGLCanvas you'll need to have either OpenGL or the <a href="http://www.mesa3d.org/">Mesa3D</a> library on your system.  wxPython's <tt>wx.glcanvas.GLCanvas</tt> only provides the GL Context and a <tt>wx.Window</tt> to put it in, so you will also need the <a href="http://PyOpenGL.sourceforge.net/">PyOpenGL</a> Python extension modules as well, if you want to use OpenGL.

<p>If you are building wxPython yourself and don't care to use OpenGL/Mesa then you can easily skip building it and can ignore this step.  See the <a href="BUILD.html">build instructions</a> for details.
</ul>
<p><font face="sans-serif"><b>Mac OS X</b></font></p>
<ul>
  <li>wxPython needs a special Mac OS X-specific build of Python, called a Framework build, in order to work. Panther and Tiger include a Framework build of Python 2.3, but on Jaguar you'll need to get the MacPython installer from <a href="http://homepages.cwi.nl/~jack/macpython/">Jack's MacPython page</a>. <br>
    <br>
  </li>
  <li><b>Note to Fink users: </b>Versions of Python installed by Fink <b>cannot </b>run wxPython (unless you install and run X11...). You need to use Apple's Framework builds, or a third-party Framework build. <br>
    <br>
  </li>
  <li>Python 2.4 Framework builds are available for download from the <a href="http://undefined.org/python/">undefined.org MacPython site</a>. ActiveState also <a href="http://activestate.com/">distributes a Framework build</a>. </li>
</ul>

</td></tr>
</table>
<img src="images/dot.jpg" width="37" height="36" alt="" border="0">




<P><a name="binaries">
<table width="100%" border="1" cellspacing="0" cellpadding="8" bgcolor="#BCB8E7">
<tr><td><font face="sans-serif" size="+1"><b>Prebuilt Binaries</b></font><br>

<p><strong><font color="#FF0000">NOTE</font></strong>: The links below are for the binaries and source for wxPython <b>2.6.4.0</b>.  Prior versions are available at <a href="https://sourceforge.net/project/showfiles.php?group_id=10718">SourceForge</a>.  

<p><strong><font color="#FF0000">NOTE 2</font></strong>: wxPython now supports having more than one wxPython runtime installed at the same time, and provides a mechanism for choosing a non-default version at runtime if the app needs to.  Please read <a href="http://wiki.wxpython.org/index.cgi/MultiVersionInstalls">MultiVersionInstalls</a> for all the gory details.

</td></tr>




<tr><td>
<font face="sans-serif" size="+1"><b>Microsoft Windows</b></font><br><br>
The Win32 version of wxPython is distributed as a set of standard self-installing executables.  This allows you the convenience of using the Start Menu and Add/Remove Programs just like any other Windows software.  

<p>There are two versions of wxPython for each of the supported Python versions on Win32.  They are nearly identical, except one of them has been compiled with support for the <a href="http://wiki.wxpython.org/index.cgi/UnicodeBuild"><b>Unicode</b></a> version of the platform APIs.  If you don't know what that means then you probably don't need the Unicode version, get the <b>ANSI</b> version instead.  The Unicode verison works best on Windows NT/2000/XP.  It will also mostly work on Windows 95/98/Me systems, but it is based on a Microsoft hack called MSLU (or unicows.dll) that translates unicode API calls to ansi API calls, but the coverage of the API is not complete so there are some difficult bugs lurking in there. 


<p>
<div align="center">
<table width="90%" border="1" cellspacing="1"><tr>
<td align="center">&nbsp;</td>
<td align="center" nowrap><b>Python 2.3</b></td>
<td align="center" nowrap><b>Python 2.4</b></td>
<td align="center" nowrap><b>Python 2.5</b></td>
</tr><tr>
<td><b>wxPython runtime</b><br> 
<font size="-1">Install one or more of these.  They each contain:
<ul>
	<li> The wxPython extension modules and proxy class modules
	<li> wxPython library
	<li> Command-line scripts for some wxPython tools
</ul></font></td>
<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-ansi-2.6.4.0-py23.exe">win32-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-unicode-2.6.4.0-py23.exe">win32-unicode</a>
</td>
<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-ansi-2.6.4.0-py24.exe">win32-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-unicode-2.6.4.0-py24.exe">win32-unicode</a>
</td>
<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-ansi-2.6.4.0-py25.exe">win32-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-unicode-2.6.4.0-py25.exe">win32-unicode</a>
</td>
</tr>
<tr>
<td><b>Docs, Demo, Samples, etc.</b><br>
<font size="-1">This is optional, but highly recommended for developers.  This package is usable with any version of the wxPython runtime, and will use the <a href="http://wiki.wxpython.org/index.cgi/MultiVersionInstalls">default version</a> if more than one is installed.  It contains:
<ul>
	<li>The wxPython demo
	<li>Several small sample apps
	<li>Start Menu launchers for the demo and tools such as PyCrust and XRCed
	<li>The wxWidgets documentaion, in a MS HTMLHelp file
</ul></font></td>
<td colspan="3" align="center">
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-docs-demos-2.6.4.0.exe">win32-docs-demos</a></td>
</tr>
</table>
</div>

<p>If you have a need to compile other Python extension modules or applications that link with the <i>same version</i> of the wxWidgets DLL that wxPython does, then you will want to get the development package.  It includes a snapshot of the wx headers and the import libraries found on my system when I made the wxPython binaries.
<ul><li><a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-win32-devel-2.6.4.0.tar.bz2">wxPython2.6-win32-devel</a></li></ul>
<p>
</td></tr>




<tr><td>
<font face="sans-serif" size="+1"><b>Mac OS X</b></font><br><br>
The Max OSX version of wxPython is distributed as a set of mountable disk images.  The runtime verisons contain Installer packages, as well as a script that can perform an uninstall of previous installs of wxPython.  (<b>NOTE:</b> If you have versions prior to 2.5.3.1 installed please <b><i>do</i></b> run the uninstaller to remove the older version.)  
<p><b>Not sure if you should use the ANSI or Unicode version?</b>  <a href="http://wiki.wxpython.org/index.cgi/UnicodeBuild">Read here</a> for more info.
<p><b>Using Tiger and Python 2.3? </b>You <b>must</b> <a href="http://undefined.org/python/#TigerPython23Compat">install this fix</a> before installing wxPython if you haven't already.
<p><b>Got an Intel Mac? </b>Universal Binaries for Tiger are available below. You will need the <a href="http://www.python.org/download/releases/2.4.3/">Universal MacPython available from Python.org</a> to run this build. As for why they only run on Tiger, <a href="http://kevino.theolliviers.com/wxpython/universal.html">please see this note</a>. 

<p>
<div align="center">
<h2 align="left">PPC Binaries</h2>
<table width="90%" border="1" cellspacing="1"><tr>
<td align="center">&nbsp;</td>
<td align="center" nowrap><b>OSX 10.3 PPC</b></td>
<td align="center" nowrap><b>OSX 10.4 universal</b></td>
</tr><tr>
<td><b>wxPython runtime</b><br> 
<font size="-1">Install one or more of these.  They each contain:
<ul>
	<li> The wxPython extension modules and proxy class modules
	<li> wxPython library
	<li> Command-line scripts for some wxPython tools
</ul></font></td>
<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-unicode-2.6.4.0-macosx10.3-py2.3.dmg">osx-unicode-py2.3</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-unicode-2.6.4.0-macosx10.3-py2.4.dmg">osx-unicode-py2.4</a><br>
<p>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-ansi-2.6.4.0-macosx10.3-py2.3.dmg">osx-ansi-py2.3</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-ansi-2.6.4.0-macosx10.3-py2.4.dmg">osx-ansi-py2.4</a><br>
</td>

<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-unicode-2.6.4.0-universal10.4-py2.4.dmg">osx-unicode-py2.4</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-unicode-2.6.4.0-universal10.4-py2.5.dmg">osx-unicode-py2.5</a><br>
<p>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-ansi-2.6.4.0-universal10.4-py2.4.dmg">osx-ansi-py2.4</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-ansi-2.6.4.0-universal10.4-py2.5.dmg">osx-ansi-py2.5</a><br>
</td>

</tr>
<tr>
<td><b>Docs, Demo, Samples, etc.</b><br>
<font size="-1">This is optional, but highly recommended for developers.  This package is usable with any version of the wxPython runtime, and will use the <a href="http://wiki.wxpython.org/index.cgi/MultiVersionInstalls">default version</a> if more than one is installed.  It contains:
<ul>
	<li>The wxPython demo
	<li>Several small sample apps
	<li>App bundles for PyCrust and XRCed
	<li>The wxWidgets documentaion, bundled in a viewer application
</ul></font></td>
<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-docs-demos-2.6.4.0-macosx10.3-py2.3.dmg">osx-docs-demos-py2.3</a>
<p>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-docs-demos-2.6.4.0-macosx10.3-py2.4.dmg">osx-docs-demos-py2.4</a>
</td>

<td align="center" nowrap>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-docs-demos-2.6.4.0-universal10.4-py2.4.dmg">osx-docs-demos-py2.4</a>
<p>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-osx-docs-demos-2.6.4.0-universal10.4-py2.5.dmg">osx-docs-demos-py2.5</a>
</td>

</tr>
</table>





<tr><td>
<font face="sans-serif" size="+1"><b>Linux RPMs</b></font><br><br>

Several flavors of wxPython RPMs are available for various RPM based Linux distributions.  If there isn't a set of RPMs below for your particular distro and Python version then you can try one of them that is similar to your distro as they will often work.  Otherwise there is a source RPM (as well as a source tarball and an RPM spec file) that will allow you to build your own set of RPMs.


<p>
<div align="center">
<table width="90%" border="1" cellspacing="1"><tr>

<td rowspan="6" valign="top"><b>wxPython common</b><p> 
<font size="-1">Install <b>only one</b> of these.  They contain the common files that are shared between all versions of wxPython.  Even if you do <a href="http://wiki.wxpython.org/index.cgi/MultiVersionInstalls">MultiVersionInstalls</a>, you only need one wxPython-common.  This RPM contains the <tt>wx.pth</tt> file which defines which is the default version of wxPython, so switching defaults is as easy as installing a different wxPython-common RPM.
<p>
These RPMs each contain the following:
<ul>
	<li>The <tt>wx.pth</tt> file which selects the default version of wxPython
	<li>The <tt>wxselect.py</tt> module
	<li>A set of command-line scripts for launching the wxPython tools
	<li>KDE and GNOME menu items for launching the wxPython tools
</ul><br>
</font></td>


<td align="center" nowrap><b>RedHat 9, Python 2.3</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-ansi-2.6.4.0-rh9_py2.3.i386.rpm">common-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-unicode-2.6.4.0-rh9_py2.3.i386.rpm">common-gtk2-unicode</a><br><br>
</td>
</tr><tr>
<td align="center" nowrap><b>RedHat 9, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-ansi-2.6.4.0-rh9_py2.4.i386.rpm">common-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-unicode-2.6.4.0-rh9_py2.4.i386.rpm">common-gtk2-unicode</a><br><br>
</td>
</tr><tr>


<td align="center" nowrap><b>Fedora Core 2, Python 2.3</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-ansi-2.6.4.0-fc2_py2.3.i386.rpm">common-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-unicode-2.6.4.0-fc2_py2.3.i386.rpm">common-gtk2-unicode</a><br><br>
</td>
</tr><tr>
<td align="center" nowrap><b>Fedora Core 4, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-ansi-2.6.4.0-fc4_py2.4.i386.rpm">common-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-unicode-2.6.4.0-fc4_py2.4.i386.rpm">common-gtk2-unicode</a><br><br>
</td>
</tr><tr>


<td align="center" nowrap><b>Mandrake 10.2, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-ansi-2.6.4.0-mdk102_py2.4.i586.rpm">common-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-unicode-2.6.4.0-mdk102_py2.4.i586.rpm">common-gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td align="center" nowrap><b>Mandriva 2006, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-ansi-2.6.4.0-mdk2006_py2.4.i586.rpm">common-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-common-gtk2-unicode-2.6.4.0-mdk2006_py2.4.i586.rpm">common-gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td rowspan="6" valign="top"><b>wxPython runtime</b><p>
<font size="-1">Install <b>one or more</b> of these.  They each contain a version of the wxPython runtime that supports <a href="http://wiki.wxpython.org/index.cgi/MultiVersionInstalls">MultiVersionInstalls</a>, and includes:
<ul>
	<li>The wxPython extension modules and proxy class modules
	<li>The wxPython library
	<li>The wxWidgets shared libraries
</ul>
</font></td>

<td align="center" nowrap><b>RedHat 9, Python 2.3</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-ansi-2.6.4.0-rh9_py2.3.i386.rpm">gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-unicode-2.6.4.0-rh9_py2.3.i386.rpm">gtk2-unicode</a><br><br>
</td>
</tr><tr>
<td align="center" nowrap><b>RedHat 9, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-ansi-2.6.4.0-rh9_py2.4.i386.rpm">gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-unicode-2.6.4.0-rh9_py2.4.i386.rpm">gtk2-unicode</a><br><br>
</td>
</tr><tr>

<td align="center" nowrap><b>Fedora Core 2, Python 2.3</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-ansi-2.6.4.0-fc2_py2.3.i386.rpm">gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-unicode-2.6.4.0-fc2_py2.3.i386.rpm">gtk2-unicode</a><br><br>
</td>
</tr><tr>

<td align="center" nowrap><b>Fedora Core 4, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-ansi-2.6.4.0-fc4_py2.4.i386.rpm">gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-unicode-2.6.4.0-fc4_py2.4.i386.rpm">gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td align="center" nowrap><b>Mandrake 10.2, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-ansi-2.6.4.0-mdk102_py2.4.i586.rpm">gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-unicode-2.6.4.0-mdk102_py2.4.i586.rpm">gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td align="center" nowrap><b>Mandriva 2006, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-ansi-2.6.4.0-mdk2006_py2.4.i586.rpm">gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-gtk2-unicode-2.6.4.0-mdk2006_py2.4.i586.rpm">gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td rowspan="6" valign="top"><b>wxPython devel</b><p>
<font size="-1">These packages are optional.  They include the header files and such that are needed if you need to create extension modules or applications that interact with the wxPython extensions modules or link with the same version of wxWidgets.
</font></td>

<td align="center" nowrap><b>RedHat 9, Python 2.3</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-ansi-2.6.4.0-rh9_py2.3.i386.rpm">devel-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-unicode-2.6.4.0-rh9_py2.3.i386.rpm">devel-gtk2-unicode</a><br><br>
</td>
</tr><tr>
<td align="center" nowrap><b>RedHat 9, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-ansi-2.6.4.0-rh9_py2.4.i386.rpm">devel-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-unicode-2.6.4.0-rh9_py2.4.i386.rpm">devel-gtk2-unicode</a><br><br>
</td>
</tr><tr>

<td align="center" nowrap><b>Fedora Core 2, Python 2.3</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-ansi-2.6.4.0-fc2_py2.3.i386.rpm">devel-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-unicode-2.6.4.0-fc2_py2.3.i386.rpm">devel-gtk2-unicode</a><br><br>
</td>
</tr><tr>

<td align="center" nowrap><b>Fedora Core 4, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-ansi-2.6.4.0-fc4_py2.4.i386.rpm">devel-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-unicode-2.6.4.0-fc4_py2.4.i386.rpm">devel-gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td align="center" nowrap><b>Mandrake 10.2, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-ansi-2.6.4.0-mdk102_py2.4.i586.rpm">devel-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-unicode-2.6.4.0-mdk102_py2.4.i586.rpm">devel-gtk2-unicode</a><br><br>
</td>
</tr><tr>



<td align="center" nowrap><b>Mandriva 2006, Python 2.4</b><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-ansi-2.6.4.0-mdk2006_py2.4.i586.rpm">devel-gtk2-ansi</a><br>
<a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-devel-gtk2-unicode-2.6.4.0-mdk2006_py2.4.i586.rpm">devel-gtk2-unicode</a><br><br>
</td>
</tr><tr>



</table>
</div>



</td></tr>



<tr><td>
<font face="sans-serif" size="+1"><b>Debian</b></font><br><br>
Debian users can get wxPython from the Debian pacakge distribution system and can be installed with apt-get.  Look for packages named <tt>python-wxgtkX.Y</tt> where X.Y is the major version numbers.  

<p><strong><font color="#FF0000">NOTE</font></strong>: The wxPython packages in Debian 'stable' are way behind the times, so you'll want to look at either 'testing' or 'unstable' for newer pacakges.  Alternatively you can build your own Debian packages from sources if you have the necessary tools and libs installed on your system.  You can either do it from the source RPM using alien, as described <a href="http://www.bitpim.org/developer.html">here</a>, or you can build directly from the source tarball. (Instructions still to be written...)

<p>
<font face="sans-serif" size="+1"><b>Ubuntu</b></font><br><br>
There is a set of packages maintained by the wxPython team for Ubuntu 6.06 (Dapper Drake) for i386 based systems.  You can get them by adding the following to your <tt>/etc/apt/sources.list</tt> file:
<pre>
    # wxPython repository on Starship
    deb http://starship.python.net/crew/robind/wxPython/apt/ binary/
    deb-src http://starship.python.net/crew/robind/wxPython/apt/ source/
</pre>

After the repository info has been added to <tt>/etc/apt/sources.list</tt> you can fetch and install the packages using one of the GUI package manager tools such as Synaptic or Adept, or by running the following commands from a terminal window:
<pre>
    sudo apt-get update
    sudo apt-get install python-wxgtk2.6 python-wxtools wx2.6-i18n
</pre>

These packages (and their dependencies) will replace earlier versions of wxPython and wxGTK that may have been installed previously from the Ubuntu repositories.

</td></tr>


<tr><td><a name="documentation">
<font face="sans-serif" size="+1"><b>Documentation</b></font><br><br>
This is the wxWidgets/wxPython documentation, in HTML format. For other documentaion options see the <a href="http://wxwidgets.org/">wxWidgets site</a>.

<ul><li><a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-docs-2.6.4.0.tar.bz2">wxPython-docs</a>
</ul>

<p>
Thre is an effort underway to create a Python-specific set of reference docs for wxPython.  While much of the content is not yet present, the docs are still usable, and in fact helpful since they already accurately document what classes and methods are present in wxPython and what the parameter names are.  A downloadable archive of the new docs is now made as part of the release builds, and it can also be accessed online <a href="docs/api/">here</a>.

<ul><li><a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-newdocs-2.6.4.0.tar.bz2">wxPython-newdocs</a>
</ul>

<p>

</td></tr>

<tr><td><a name="demo">
<font face="sans-serif" size="+1"><b>Demo and Sample Apps</b></font><br><br>
Since the RPMs no longer include the demo or samples, it is now packaged separately.  Why did I do this?  Well the demo is intended to be a learning tool, but when installed from the RPM all the demo files are owned by root.  As a separate tarball you can put the files where ever you want and since they'll be owned by you when you untar them you can play and tweak to your heart's desire.

<ul><li><a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-demo-2.6.4.0.tar.bz2">wxPython-demo</a>
</ul>
<p>
</td></tr>

</table>
<img src="images/dot.jpg" width="37" height="36" alt="" border="0">


<P><a name="sources"><a name="cvsaccess">
<table width="100%" border="1" cellspacing="0" cellpadding="8" bgcolor="#BCB8E7">
<tr><td>
<font face="sans-serif" size="+1"><b>Source Code</b></font>
</td></tr>
<tr><td>
<font face="sans-serif"><b>Released Sources</b></font><br>
Here are the wxPython sources and all you'll need (besides the prerequisites outlined above) to build wxPython on Win32, Unix or OS X systems, including the sources for wxWidgets (Win32, GTK or OS X.)

<p>Be sure to read the <a href="BUILD.html">BUILD</a> and <a href="INSTALL.html">INSTALL</a> instructions if you are wanting to use the sources to build your own copy of wxPython.

<ul>
<li><a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython-src-2.6.4.0.tar.bz2">wxPython-src</a>
<li><a href="http://internap.dl.sourceforge.net/sourceforge/wxpython/wxPython2.6-2.6.4.0-1.src.rpm">wxPython src rpm</a>
<li><a href="wxPython.spec">RPM spec file</a>
</ul>

<p>If you want to build an RPM for your system then please read the begining of the spec file about some options that can be set on the rpmbuild command line.  For example, to build a set of RPMs for gtk1, ansi, and python 2.3 you can use this command:

<pre>
    rpmbuild -ta --define 'pyver 2.3' \
                 --define 'port gtk' \
                 --define 'unicode 0' \
                 wxPython-src-2.6.4.0.tar.bz2
</pre> 


<p><br>
<font face="sans-serif"><b>Development Sources</b></font><br>
You can also get access to the source tree from the wxWidgets CVS server.  This lets you have instant access to new features and bug fixes as the core wxWidgets/wxPython developers complete their implementaion and check them in to the repository.  To learn more about CVS and to get the CVS programs, go to the <a href="http://www.cvshome.org/index.html">CVS Home</a>.
<p>
To get your copy of the source code, simply run these commands, (assumes the command-line version of CVS, if you are using WinCVS or other GUI version, adapt accordingly.)  When prompted for a password, type "anoncvs" (the same as the user name.)

<pre>
    set CVSROOT=:pserver:anoncvs@cvs.wxwidgets.org:/pack/cvsroots/wxwidgets
    (or whatever you need to do to set an environment variable in your shell)

    cvs login
    cvs co wxWidgets
</pre>
<p>
You will find the wxPython sources in the wxWidgets/wxPython directory.  When you want to update your copy of the sources, simply change to the wxWidgets directory and run
<pre>
    cvs update
</pre>
<p>

</td></tr>
</table>
<img src="images/dot.jpg" width="37" height="36" alt="" border="0">


<p>

<?php require('_footer.in') ?>



