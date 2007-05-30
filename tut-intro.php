<HTML>
<HEAD><TITLE>tut-intro.html</TITLE>
</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>



<h2>wxPython</h2>

<p>One of the GUI toolkits available for Python is called wxPython.  The current incarnation is fairly new to the Python scene and is rapidly gaining popularity amongst Python developers.  wxPython is a Python extension module that encapsulates the wxWidgets C++ class library.
</p>

<h2>wxWidgets</h2>

<p>wxWidgets is a free C++ framework designed to make cross-platform programming child's play.  Well, almost. wxWidgets 2.0 supports Windows 3.1/95/98/NT, Unix with GTK/Motif/Lesstif, with a Mac version underway. Other ports are under consideration. 
</p>
<p>wxWidgets is a set of libraries that allows C++ applications to compile and run on several different types of computers, with minimal source code changes. There is one library per supported GUI (such as Motif, or Windows). As well as providing a common API (Application Programming Interface) for GUI functionality, it provides functionality for accessing some commonly used operating system facilities, such as copying or deleting files. wxWidgets is a framework in the sense that it provides a lot of built-in functionality, which the application can use or replace as required, thus saving a great deal of coding effort. Basic data structures such as strings, linked lists and hash tables are also supported.
</p>
<p>Native versions of controls, common dialogs, and other window types are used on platforms that support them.  For other platforms suitable alternatives are created using wxWidgets itself.  For example, on Win32 platforms the native list control is used, but on GTK a generic list control with similar capabilities was created for use in the wxWidgets class library.
</p>
<p>Experienced Windows programmers will feel right at home with the wxWidgets object model.  Many of the classes and concepts will be very familiar.  For example, the Multiple Document Interface, drawing on Device Contexts with GDI objects such as brushes, pens, etc., and so on.
</p>
<h2>Putting the two together</h2>

<p>wxPython is a Python extension module that provides a set of bindings from the wxWidgets library to the Python language.  In other words, the extension module allows Python programers to create instances of wxWidgets classes and to invoke methods of those classes.
</p>
<p>The wxPython extension module attempts to mirror the class hierarchy of wxWidgets as closely as possible.  This means that there is a wxFrame class in wxPython that looks, smells, tastes and acts almost the same as the wxFrame class in the C++ version. Unfortunately, not every class or method matches exactly because of differences in the languages, but the differences should be easy to absorb because they are natural to Python. For example, some methods that return multiple values via argument pointers in C++ will instead return a tuple of values in Python. 
wxPython is close enough to the C++ version that the majority of the wxPython documentation is actually just notes attached to the C++ documents that describe the places where wxPython is different. There is also a series of sample programs included, and a series of documentation pages that assist the programmer in getting started with wxPython. 
</p>
<h2>Where to get wxPython</h2>

<p>The latest version of wxPython can always be found at <a href="http://alldunn.com/wxPython/">http://alldunn.com/wxPython/</a>.  From this site you can download a self-installer for Win32 systems that includes a pre-built extension module, documentation in html-help format and a set of demos.
</p>
<p>Also available from this site is a Linux RPM, wxPython sources, documentation in raw HTML, and pointers to other sites, mail lists, <!-- the wxPython FAQ, --> etc.
</p>
<p>If you will be building wxPython from sources yourself, you will also need the wxWidgets sources, available from http://www.wxwidgets.org/. 
</p>


<p><hr><p>
<a href="tut-part1.php">Continue with the tutorial...</a>

<?php require('_footer.in') ?>