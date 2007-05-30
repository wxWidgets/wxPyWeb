<HTML>
<HEAD><TITLE>wxPython Tutorial part 2</TITLE>
</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>

<h2>Window Layout</h2>

Before going any further I should mention something about the various methods of managing the layout of windows and sub-windows in wxPython.  There are several alternative mechanisms provided, and potentially several ways to accomplish the same thing.  This allows the programmer to work with whichever mechanism works best in a particular situation, or whichever they are most comfortable with.  

<ol>
<p><li> <b>Constraints</b>:  There is a class called wxLayoutConstraints that allows the specification of a window's position and size in relationship to its siblings and its parent.  Each wxLayoutContraints object is composed of eight wxIndividualLayoutConstraint objects, which define different sorts of relationships such as which window is above this window, what is the relative width of this window, etc.  You usually have to specify four of the eight individual constraints in order for the window to be fully constrained.  For example this button will be positioned in the center of its parent, and will always be 50 percent of the parent's width.
<pre>
        b = wxButton(self.panelA, 100, ' Panel A ')
        lc = wxLayoutConstraints()
        lc.centreX.SameAs   (self.panelA, wxCentreX)
        lc.centreY.SameAs   (self.panelA, wxCentreY)
        lc.height.AsIs      ()
        lc.width.PercentOf  (self.panelA, wxWidth, 50)
        b.SetConstraints(lc)
</pre>
<p><li>  <b>Layout Algorithm</b>: The class named wxLayoutAlgorithm implements layout of sub-windows in MDI or SDI frames. It sends a wxCalculateLayoutEvent to children of the frame, asking them for information about their size. Because the event system is used this technique can be applied to any window, even those which are not necessarily aware of the layout classes.  However, you may wish to use wxSashLayoutWindow for your sub-windows since this class provides handlers for the required events, and accessors to specify the desired size of the window. The sash behavior in the base class can be used, optionally, to make the windows user-resizable. wxLayoutAlgorithm is typically used in IDE (integrated development environment) style of applications, where there are several resizable windows in addition to the MDI client window, or other primary editing window. Resizable windows might include toolbars, a project window, and a window for displaying error and warning messages.

<p><li> <b>Sizers</b>:  In an effort to simplify the programming of simple layouts, a family of wxSizer classes have been added to the wxPython library.  These are classes that are implemented in pure Python instead of wrapping C++ code from wxWidgets.  They are somewhat reminiscent of the Layout Managers from Java in that you select the type of sizer you want and then add windows or other sizers to it and they all follow the same rules for layout.  For example this code fragment creates five buttons that are laid out horizontally in a box, and the last button is allowed to stretch to fill the remaining space allocated to the box:
<pre>
    box = wxBoxSizer(wxHORIZONTAL)
    box.Add(wxButton(win, 1010, "one"), 0)
    box.Add(wxButton(win, 1010, "two"), 0)
    box.Add(wxButton(win, 1010, "three"), 0)
    box.Add(wxButton(win, 1010, "four"), 0)
    box.Add(wxButton(win, 1010, "five"), 1)
</pre>
<p><li> <b>Resources</b>:  The wxWidgets library has a simple Dialog Editor available which can assist with the layout of controls on a dialog and will generate a portable cross platform resource file.  This file can be loaded into a program at runtime and transformed on the fly into a window with the specified controls on it.  The only downfall with this approach is that you don't have the opportunity to sub-class the windows that are generated, but if you can do everything you need with existing control types and event handlers then it should work out great.    Eventually there will probably be a wxPython specific application builder tool that will generate either a resource type of file, or actual Python source code for you.

<p><li> <b>Brute Force</b>: And finally there is the brute force mechanism of specifying the exact position of every component programmatically.  Sometimes the layout needs of a window don't fit with any of the sizers, or don't warrant the complexity of the constraints or the layout algorithm.  For these situations you can fall back on doing it "by hand" but you probably don't want to attempt it for anything much more complex than half a dozen sub-windows or controls.  wxPython does give you some tools to help though.  One typical pitfall of specifying pixel coordinates for controls on a dialog box is what happens if the font size changes?  Suddenly everything seems scrunched together or otherwise out of whack.  By using dialog units instead of pixels for positions and sizes then the dialog is somewhat insulated from font size changes.  A dialog unit is based on the default character size of the default font for the window, so if the font size changes then the size of a dialog unit changes too.  The helper functions wxDLG_SZE and wxDLG_PNT turn dialog units into actual pixel sizes or positions.

</ol>



<p><hr><p>
<a href="tut-part3.php">Continue with the tutorial...</a>

<?php require('_footer.in') ?>

