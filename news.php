<HTML>
<HEAD><TITLE>wxPython News and Status</TITLE>
</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>


<img src="images/news.jpg" alt="" border="0" width="164" height="76">
<p>

From time to time I will put a note here about how the project is progressing, what I am working on, etc.
<p>

<ul>
<p><li><b>2-Feb-2001: <i>2.2.5 Released</i></b>  We skipped a few release numbers here...  2.2.3 was only fixes for wxGTK, and so was mostly compatble with 2.2.2, 2.2.4 was released before everybody was ready, and so 2.2.5 was made as soon as they were.  I had lots of big changes in wxPython during this time.  Look in the <a href="CHANGES.txt">CHANGES.txt</a> file for details.

<p><li><b>26-Oct-2000: <i>2.2.2 Released</i></b> Finally!  This has been one of the tougher releases to get done.  The main problem was there were too many big changes going on at once.  Check the <a href="CHANGES.txt">CHANGES.txt</a> file for details.
<p>
You've probably noticed a few changes to the website.  One of the big changes is moving the <a href="archive/index.html">list archives</a> here, although it's just the messages from the old server so far.  I'm archiving them myself because I don't like the Geocrawler thing that SourceForge gives us, and they wouldn't load the old archive anyway.  I've got a mechanism in place to collect the new messages, I just need to automate the moving of them to the website.

<p><li><b>23-Aug-2000: <i>wxPython 2.2.1 for Python 1.6b1</i></b> There is now a version of wxPython 2.2.1 for win32 systems that is linked with the Python 1.6b1 DLL.  See the <a href="download.php">Download page</a>.


<p><li><b>22-Aug-2000: <i>2.2.1 Released</i></b> 

<p><li><b>17-July-2000: <i>2.2.0 Released</i></b> Not many visible changes, but several bugs fixed, instabilities stabalized, etc.
<p>
One major known problem is that the ActiveX demos will crash when used on systems with PythonWin build 132.  Build 128 works fine.  I'm still working on trracking it down...


<p><li><b>12-June-2000: <i>2.1.16 Released</i></b> This is hopefully the last release before 2.2 is done.


<p><li><b>25-April-2000: <i>Version <b>2.1.15</b> of wxPython is released.</i></b> 


<p><li><b>2-Feb-2000: <i>Version 2.1.13 is released</i></b> A version number was skipped in order to stay in sync with wxGTK.  There are a couple minor known problems for MSW, but hopefully they will be fixed soon and I will do an interim release when they are.  The issues are:
<ol><li>Masks are not completly transparent.  The background brush is painted correctly in the transparent area, but not anything else that was already on the window.
<li>Some logical drawing functions when used with wxDC.Blit do not react well when the window is being scrolled.
<li>Sometimes a wxNotebook will paint over a newly added page when it is first shown.  I've only seen this so far with wxScrolledWindow derived classes, but only a few of them.  The window is there, as you can see by simply covering and uncovering it with another window, but the notebook is painting over it for some reason...
<li>The wxTreeCtrl paints funny on win98.  I'm guessing that installing something that updates the comctl32.dll file will take care of it.
</ol>


<p><li><b>25-Dec-1999: <i></i></b> The first <a href="http://alldunn.com/wxPython/interim/">automated interim release</a> for win32 was uploaded.  These are "releases between the (official) releases," and will happen whenever I feel that there are enough new fixes or features and that it is stable enough.  The build and upload process is automated so all I have to do is press a button before going to bed and by the next morning it is done.  This makes it easy to make an interim release whenever I reach minor milestones, instead of having to wait for the major ones.


<p><li><b>15-nov-1999: <i>Version 2.1.11</i></b> 


<p><li><b>11-Nov-1999: <i></i></b> I just uploaded a <a href="wxpshots.php#calendar">screenshot</a> of a new calendar control contributed by Lorne White.


<p><li><b>10-Nov-1999: <i></i></b> Version 2.1.11 of wxWidgets has been released.  I hope to have a coresponding release of wxPython in a few days.



<p><li><b>11-Oct-1999: <i>Version 2.1.5</i></b> This is just a quick bug-fix release to take care of a few nasties that crept in at the last minute before 2.1.4 was called done.  No new major features.



<p><li><b>7-Oct-1999: <i></i></b> Version <b>2.1.4</b> is finally released! Because of some troubles with the wxWidgets CVS, and some basic instabilities in the development version of wxWidgets, I havn't been able to get a release together until now.  (But I put the extra time to good use by adding more to wxPython...)  This release has more new features than you can shake a stick at!  Hold on to your hat and take a look at the <a href="CHANGES.txt">CHANGES.txt</a> for details.


<p><li><b>16-Sept-1999: <i>wxOGL is done.</i></b> wxHTML has had a magic wand waved over it.  Just a few more (much smaller) things to do and then I'll be making another release.  In the meantime, take a look at the new <a href="wxpshots.php#html">screen-shot</a> I just uploaded and start drooling...  &lt;grin>



<p><li><b>1-Sept-1999: <i>Release 2.1b3</i></b> This release was primarily made to have a version syncronized with wxGTK 2.1 snapshot 9, but there are a few other things done too.  Take a look at the <a href="README.txt">README.txt</a> for details.
<p>
I'm still in the middle of wrapping OGL, but it is progressing well.  I expect to do another release as soon as I finish this, (within a week or two.)
<p>
This release includes Harm's wxHTML module.  It's not a proper part of the demo yet, but there are a couple samples in the demo directory.  If OGL finishes up quickly then I'll try to put a little work into enhancing the html module for the next release too.



<p><li><b>29-Aug-1999: <i></i></b> I just uploaded the beginnings of 
a <a href="tutorial.php">tutorial</a> 
for wxPython, as well as some 
information for people interested 
in <a 
href="contribute.php">contributing</a> 
to the wxPython project.



<p><li><b>28-Aug-1999: <i></i></b> Harm van der Heijden shared with the group that he has html and lseditor modules available in wxWidgets/wxPython CVS.  You can see screen shots <a href="http://etpmod.phys.tue.nl/harm/wxpython.html">here</a>.



<p><li><b>27-Aug-1999: <i></i></b> I'm currently working on wrapping <a href="http://web.ukonline.co.uk/julian.smart/wxwin/contrib/ogl/ogl.htm">wxOGL</a>, a library for displaying and editing diagrams.  This will provide a good starting point for those of you looking to write CASE tool applications, or who want to give Visio a run for their money...  (If you beat them to it, send a bit my way, eh?)



<p><li><b>24-Aug-1999: <i></i></b> After a short break working on another project, I have spent the last few days working on streamlining the build system for wxPython.  I have just checked in to CVS the first cut.  I am now using Python to build wxPython.  More accurately, a python program generates makefiles on the fly and controls the whole process.  This makes the cross platform work a lot less messy, and also facilitates add-on modules.



<p><li><b>06-Aug-1999: <i></i></b>  wxPython 2.1b2 is released.



<p><li><b>4-Aug-1999: <i></i></b> wxPython 2.1b2 is basically done.  I am just waiting for the next snapshot release of wxWidgets for GTK and MSW which is due out in two days to ensure compatibility before I release.


<p><li><b>24-July-1999: <i></i></b> I've decided that there have been enough changes, solutions for minor complaints, and fixes in the wxWidgets library that I think it's clear that I need to make another release even though OGL and other promised items are not done yet.  I'm going to spend a few days working on finishing some of the buglets and such, ensure compatibility on wxGTK and then make a new release.


<p><li><b>19-July-1999: <i></i></b> he text, code and screenshots for <a href="http://www.ora.com/catalog/pythonwin32/">Mark and Andy's book</a> is done.


<p><li><b>13-July-1999: <i></i></b> Added some <a href="wxpshots.php#sizers">screen shots</a> of Sizers in action.


<p><li><b>10-July-1999: <i></i></b> Web page updates.  I'm still working on the chapter for Mark and Andy's book.  I should finish it this week and then be able to jump back into OGL and HTML.



<p><li><b>8-July-1999: <i></i></b> I just found out that wxPython will be featured in another book.  Sean McGrath is writing a book about XML processing with Python and he is "using wxPython exclusively for the GUI stuff."



<p><li><b>5-July-1999: <i></i></b> The <a href="http://alldunn.com/cgi-bin/wxp-faqw.py">wxPython FAQ</a> is up and running, but it's not too useful yet.  I haven't yet decided on the categories and haven't started putting the Q's and A's in it.  If anybody wants to help out let me know and I'll give you the password.


<p><li><b>4-July-1999: <i></i></b> I am currently working on a chapter about wxPython for a <a href="http://www.ora.com/catalog/pythonwin32/">book</a> by Mark Hammond and Andy Robinson.
Parts of it are going to be pretty specific for the book, but the rest will probably be suitable for the long-wished-for
wxPython tutorial. As soon as I am done with this I will finish wrapping up OGL and wxHTML and will make a new
release.


</ul>



<?php require('_footer.in') ?>