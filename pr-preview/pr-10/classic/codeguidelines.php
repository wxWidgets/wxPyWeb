<HTML>
<HEAD><TITLE>wxPython Coding Guidelines</TITLE>
</HEAD>
<BODY BGCOLOR="#FFFFFF">
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>

<img src="images/codeguidelines.jpg" width="444" height="72" alt="" border="0">
<p>

Although Python source code usually has excellent readability, it is
still possible to write code that's difficult to read.  It's also nice
to if all code in a project follows the same standards and looks
similar.  For this reason I've decided to put together this page of
wxPython Coding Guidelines and I'm going to ask that anybody that
contributes library code or patches follows these guidelines as much
as possible.  For a general purpose style guide to assist with
programming with wxPython, please see the 
<a
href="http://wiki.wxpython.org/index.cgi/wxPython_Style_Guide">wxPython
Style Guide</a> in the wiki.

<p>These guidelines will be very similar to the general <a href="http://www.python.org/peps/pep-0008.html">Style Guide for Python Code</a>, but there are a few differences.  If something is not explicitly stated here then fall back to the Python style guide.  As stated there, consistency to this guide is important, but more important is to know when to be inconsistent.  Use your best judgment in all things, but don't do it your own way just because you think my way stinks! ;-)

<p>

<p>
<h3>Compatibility</h3>
I release wxPython binaries for both Python 2.6 and Python 2.7. This means that any contributions to wxPython also need to be at least <b>Python 2.6 compatible</b>.

<p>

<h3>Whitespace</h3>
In my opinion liberal use of whitespace can greatly aid the readability of Python code.  Here are my recommendations and what I usually try to do:
<ul>
	<li>Indentation should be done with 4 spaces per level, and never with tabs.</li>
	
	<li>Top-level classes and functions within a module are separated by at least two blank lines.</li>

	<li>Logical groupings of top-level classes, functions and other top-level code are separated by a blank line, a "comment divider line" (a # followed by about 75 dashes) and a blank line.  This may mean that every class and function is divided, or that a number of short functions, import statements, and/or assignments are grouped together.</li>

	<li>Methods within a class are normally separated by two blank lines.  An exception to this rule is two or more methods that are only one or two lines in length each.</li>

	<li>If there are methods that are quite long then they can be divided from other methods by a comment divider line that is indented to the same level as the method's 'def' line.</li>
	
	<li>Within a function or method single empty lines can be used to add clarity, etc.  A function or method should never have more than one consecutive empty line within it.</li>

	<li>Whitespace should be used liberally within expressions, but normally only one space at a time.  For example, there should be a space before and after all operators and after every comma.</li>

	<li>I normally don't use spaces within parenthesis except after commas, [for example foo( spam, eggs ) instead of foo(spam, eggs)] but I don't object to it too much.</li>
</ul>

<h3>Boolean Constants</h3>
Now that Python is getting a real boolean type and boolean constants, <tt>True</tt> and <tt>False</tt> should be used instead of <tt>true, false, TRUE, FALSE</tt> (although aliases for these do exist for the old namespace.)  In the wx module there is some code that tests for the existence of the new constants, and creates them if they don't exist in the version of Python that is being used, and places them in <tt>__builtins__</tt>.  

<h3>Naming Conventions</h3>
<ul>
	<li><b>Module names:</b> Whenever possible modules should be named with a fairly short name in all lower case.  One exception to this is if the module only exports one class then naming the module the same as the class is okay.</li>

	<li><b>Class names:</b> Classes in the wxPython library should use LeadingUpperMixedCase.  If there is already an existing wxWidgets class (or a possibility of one) of the same name then use a Py prefix or choose a different name.</li>

	<li><b>Method names:</b> Although my personal preference is to use leadingLowerMixedCase for method names that is not the standard for wxWidgets.  So since standards are all about consistency wxPython modules should all follow the wxWidgets pattern of using LeadingUpperMixedCase for method names.</li>

	<li><b>Private stuff:</b> Things in a module that are not meant to be used outside the module should be named with a leading underscore.  The same goes for methods or data attributes in classes.  If it needs to be super private then use a leading double underscore.</li>
</ul>

<h3>Comments and Docstrings</h3>
<ul>
	<li><b>Block comments:</b> Comments on a line by themselves should be indented to the same level as the code they are documenting and should normally be full english sentences.  Paragraphs are separated by a line with only a # and there should normally be at least one blank line before the start of the comment.</li>

	<li><b>Inline comments:</b> Comments on the same line as the code they document should be used sparingly.  When used they should be separated by several spaces from the statement they are documenting, and if there are others in the vicinity they should be lined up vertically.</li>

	<li>All comments should actually explain the code, not just restate the obvious.</li>
	
	<li>Comments should be word-wrapped at margin &lt;= to the margin used for the code, (no more than 90 characters or so.)</li>

	<li><b>Docstrings:</b> Python documentation strings should be normally present for every module, class and method that is meant to be used by the users of a module or package.  Those that are for internal use only are not required to have docstrings, although it would be nice if they did.  Methods whose purpose and usage is obvious or very simple also do not require a docstring, but again it would be nice if they did.</li>

	<li>Always use triple double quotes for docstrings, even those that are all on one line.</li>
	
	<li>Docstrings should be compatible with the <a href="http://epydoc.sourceforge.net/">epydoc</a> tool.  For plain text usually nothing needs to be done.  If you use the <a href="http://epydoc.sourceforge.net/epytext.html">epytext</a> format then be sure to specify a <tt>__docformat__</tt> module attribute because <a href="http://epydoc.sourceforge.net/othermarkup.html">reStructuredText</a> is the default for the docs that I do.</li>
</ul>

<h3>Include Demo Module</h3>
All modules contributed to wxPython should have a module that can be dropped into the wxPython Demo framework.  It is a very simple thing to do, just make a copy of demo/template.py and name it the same as the class to be demoed, (or some other appropriate name.)  Then just add code to the TestPanel class that shows your contributed module and you're done.  To test, edit Main.py and add the name of the new demo module to the _treeList list.

<p>Don't forget to set the yourDemoModule.overview string!  If the overview text starts with "&lt;html>" then it will be shown in the wxHtmlWindow as is.  If not then the demo will treat it as plain text and will preprocess it for showing in the wxHtmlWindow.

<p>The overview should be some descriptive text that gives basic information about the classes being demoed, their capabilites, limitations, etc.  If appropriate you could also give info about the API of the contributed classes.  In some cases you could just set overview to <tt>wx.lib.yourContrib.__doc__</tt>.  

<h3>Making Patches</h3>
For any updates to wxPython code, including updates to your contribution once I have accepted it and checked it in to the SVN repository, you'll need to use patch files to send updates to me.  This way I can easily merge your changes with any that I have made.  I will no longer accept full source code replacements for updates.

<p>The easiest way to do a patch against the latest version of the code is to use SVN.  You simply need to have a current copy of the workspace checked out to your local system and then use the <a href="http://svnbook.red-bean.com/en/1.4/svn.ref.svn.c.diff.html">svn diff</a> command to make the patch file.  You may also want to review <a href="http://wxwidgets.org/docs/technote/patches.htm">this page</a>.
<p>

<h3>License</h3>
You will need to license your contributed code with the <a href="http://wxwidgets.org/newlicen.htm">wxWidgets License</a>, which is essentially the LGPL with a few extensions that make the code just a little bit more Free.  To set the license that your source code uses it is sufficient to just put something like "License: wxWidgets" in the header.  By the way, the <a href="http://www.opensource.org/licenses/wxwindows.php">wxWidgets Library License</a> is now certified by the <a href="http://www.opensource.org/">Open Source Initiative</a>.

<?php require('_footer.in') ?>
