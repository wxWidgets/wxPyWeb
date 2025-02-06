<HTML>
<HEAD>

</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>


<img src="images/download.jpg" width="505" height="73" alt="" border="0"><br>
<p>
 



<a name="devel"></a>  
<table width="100%" border="1" cellspacing="0" cellpadding="8" bgcolor="#BCB8E7">
<tr><td>


<p><a name="msw"></a>
<font face="sans-serif" size="+1"><b>Windows Binaries</b></font><br>

Choose an installer that matches the version of Python you will be using.  If you are using a 64-bit version of Python then make sure you also get a 64-bit wxPython, otherwise choose a 32-bit installer even if you are on a 64-bit version of Windows.  There is no longer a separate ansi and Unicode build, it's all Unicode now (although string objects passed to wx APIs will still be converted automatically if possible.) 


<p><div style="padding-left: 1cm;">
<table border="0" cellspacing="0" cellpadding="4">

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-win32-3.0.2.0-py26.exe">
wxPython3.0-win32-py26</a>
</font></td>
<td><font size="-1">32-bit Python 2.6</td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-win64-3.0.2.0-py26.exe">
wxPython3.0-win64-py26</a>
</font></td>
<td><font size="-1">64-bit Python 2.6</td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-win32-3.0.2.0-py27.exe">
wxPython3.0-win32-py27</a>
</font></td>
<td><font size="-1">32-bit Python 2.7</td>
</tr>

<tr>
<td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-win64-3.0.2.0-py27.exe">
wxPython3.0-win64-py27</a>
</font></td>
<td><font size="-1">64-bit Python 2.7</td>
</tr>
</table></p>
</div>


<p>
<font face="sans-serif" size="+1"><b>wxPython Demo for Windows</b></font><br>

This installer contains the infamous wxPython demo, other samples, and wxWidgets documentation.

<p><div style="padding-left: 1cm;">
<table border="0" cellspacing="0" cellpadding="4">
<tr>
<td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-win32-docs-demos-3.0.2.0.exe">
wxPython3.0-win32-docs-demos.exe</a>
</font></td>
</tr></table>
</div></p>



<p>
<font face="sans-serif" size="+1"><b>Windows Development Files</b></font><br>

These installers contain the wxWidgets headers, libraries and other files that might be needed if you want to build your own wx extension modules that link with the same version of the wxWidgets DLLs distributed with wxPython.  It is essentially a snapshot of the source tree with wxWidgets pre-built.

<p><div style="padding-left: 1cm;">
<table border="0" cellspacing="0" cellpadding="4">
<tr>
<td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxWidgets3.0-devel-win32-3.0.2.0.exe">32-bit binaries for MSVC 9</a><br>
<a href="http://downloads.sourceforge.net/wxpython/wxWidgets3.0-devel-win64-3.0.2.0.exe">64-bit binaries for MSVC 9</a>
</font></td>
</tr>
</table>
</div></p>




<p><a name="osx"></a>
<font face="sans-serif" size="+1"><b>Mac OSX Binaries</b></font><br>
The wxPython binaries for OSX are mountable disk images.  Simply double click to mount the image and then run the installer application in the image.  Be sure to download the image that matches the version of Python that you want to use it with.  The files with "carbon" in the name use the Carbon API for implementing the GUI, are compatible with PPC and i386 machines and will work on OSX 10.5 and onwards.  The file with "cocoa" in the name use the Cocoa API for implementing the GUI, requires at least OSX 10.5, and supports either 32-bit or 64-bit architectures.  If you would like to have both the Carbon and Cocoa versions installed you will need to do something like install the Carbon build for Python 2.6 and install the Cocoa build for Python 2.7.

<p><b>NOTE:</b> This installer is not signed by Apple, so by default
your Mac will tell you it is corrupted and will not install it.  You
can get around this by temporarily relaxing the security settings in
System Preferences.  In the Security & Privacy section set "Allow applications downloaded from" to "Anywhere."

<p><div style="padding-left: 1cm;">
<table border="0" cellspacing="0" cellpadding="4">
<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-osx-3.0.2.0-carbon-py2.6.dmg">
wxPython3.0-osx-carbon-py2.6</a>
</font></td>
<td></td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-osx-3.0.2.0-carbon-py2.7.dmg">
wxPython3.0-osx-carbon-py2.7</a>
</font></td>
<td></td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-osx-3.0.2.0-cocoa-py2.7.dmg">
wxPython3.0-osx-cocoa-py2.7</a>
</font></td>
<td></td>
</tr>

</td>
</tr>
</table>
</div></p>


<p>
<font face="sans-serif" size="+1"><b>wxPython demo for Mac OSX</b></font><br>
These disk images contain the wxPython demo, the documentation, some other samples and some tools.

<p><div style="padding-left: 1cm;">
<table border="0" cellspacing="0" cellpadding="4">

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-osx-docs-demos-3.0.2.0-carbon-py2.6.dmg">
wxPython3.0-osx-docs-demos-carbon-py2.6</a>
</font></td>
<td></td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-osx-docs-demos-3.0.2.0-carbon-py2.7.dmg">
wxPython3.0-osx-docs-demos-carbon-py2.7</a>
</font></td>
<td></td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython3.0-osx-docs-demos-3.0.2.0-cocoa-py2.7.dmg">
wxPython3.0-osx-docs-demos-cocoa-py2.7</a>
</font></td>
<td></td>
</tr>

</td>
</tr>
</table>
</div></p>



<p><a name="linux"></a>
<font face="sans-serif" size="+1"><b>Linux Binaries</b></font><br>
To get prebuilt binaries for Linux or other platforms, please search in your distro's package repository, or any 3rd party repositories that may be available to you.

Ubuntu users can get information about the the wx APT repository <a href="http://wiki.wxpython.org/InstallingOnUbuntuOrDebian">here</a>.

If all else fails you can build wxPython yourself from the source code, see the next section.


<p><a name="source"></a>
<font face="sans-serif" size="+1"><b>Source Code and Other Tarballs</b></font><br>
If you need to build wxPython yourself then you can do so with the first file in this list and using these <a href="BUILD.html">build instructions</a>.
<p>The other files here are useful for learning <a href="http://wiki.wxpython.org/How%20to%20Learn%20wxPython">how to use wxPython</a>.</p>

<p><div style="padding-left: 1cm;">
<table border="0" cellspacing="0" cellpadding="4">

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython-src-3.0.2.0.tar.bz2">wxPython-src</a>
</font></td>
<td><font size="-1">All of the wxWidgets and wxPython source code.</td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython-docs-3.0.2.0.tar.bz2">wxPython-docs</a>
</font></td>
<td><font size="-1">The plain HTML files for the wxWidgets documentation</td>
</tr>

<tr><td nowrap><font size="-1">
<a href="http://downloads.sourceforge.net/wxpython/wxPython-demo-3.0.2.0.tar.bz2">wxPython-demo</a>
</font></td>
<td><font size="-1">The source code for the wxPython demo and other sample applications.</td>
</tr>

</td>
</tr>
</table>
</div></p>




</div></p>
</td></tr>
</table>

<img src="images/dot.jpg" width="37" height="36" alt="" border="0">



<?php require('_footer.in') ?>



