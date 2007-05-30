<HTML>
<HEAD><TITLE>wxPython Tutorial part 1</TITLE>
</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>

<h2>Using wxPython</h2>



I've always found that best way to learn is by doing and then experimenting and tweaking with what's been done.  So download and install wxPython, fire up your favorite text editor and get ready to play along as you read the next few sections.

<p>
<h2>A Simple Example</h2>



Familiarize yourself with this little wxPython program, and refer back to it as you read through the explanations that follow.

<p>
<ol>
<pre>
<FONT COLOR=#a020f0>from</FONT> wxPython.wx <FONT COLOR=#a020f0>import</FONT> *

<FONT COLOR=#008080>class</FONT> MyApp(wxApp):
    <FONT COLOR=#008080>def</FONT> OnInit(self):
        frame = wxFrame(NULL, -1, <FONT COLOR=#ff00ff>&quot;Hello from wxPython&quot;</FONT>)
        frame.Show(true)
        self.SetTopWindow(frame)
        <B><FONT COLOR=#804040>return</FONT></B> true

app = MyApp(0)
app.MainLoop()
</pre>
</ol>
<p>

 <img src="images/intro01.gif" width=513 height=308 alt="" border="0">
<p>
The first thing to do in any program is import the classes and other items necessary for the application.  The first line above imports all of wxPython into the current namespace.  You can do more restrictive imports if you like, but the typical wxPython program will just import everything.

<p>
Every wxPython application needs to derive a class from wxApp and provide an OnInit method for it.  The system calls this method as part of its startup/initialization sequence.  The primary purpose of OnInit is to create the windows, etc. necessary for the program to begin operation.  In our sample we create a frame with no parent, with a title of "Hello from wxPython" and then show it.  We could have also specified a position and size for the frame in its constructor, but since we didn't defaults will be used.  The last two lines of the OnInit method will probably be the same for all applications.  The SetTopWindow method simply informs wxWidgets that this frame is one of the main frames (in this case the only one) for the application.  When all top-level windows have been closed then the application terminates.  Returning true from OnInit implies that OnInit was successful, if false had been returned then the application would exit.

<p>
The final two lines of the script again will probably be the same for all your wxPython applications.  We simply create an instance of our application class, and then call its MainLoop method.  MainLoop is the heart of the application and is where events are processed and dispatched to the various windows in the application.  Fortunately wxWidgets insulates us from the differences in event processing in the various GUI toolkits.

<p>
Most of the time you will want to customize the main frame of the application, and so using the stock wxFrame will not be sufficient.  The basic principles of Object Oriented Programming also suggest that the attributes and behaviors of the objects in your application should be encapsulated in a class rather than hodge-podged together in a place like OnInit.   The next example derives a custom frame from wxFrame and creates an instance of it in OnInit.  Notice that except for the name of the class created in OnInit, that the rest of the MyApp code is identical to the previous example.

<p>
<ol><pre>
<FONT COLOR=#a020f0>from</FONT> wxPython.wx <FONT COLOR=#a020f0>import</FONT> *

ID_ABOUT = 101
ID_EXIT  = 102

<FONT COLOR=#008080>class</FONT> MyFrame(wxFrame):
    <FONT COLOR=#008080>def</FONT> __init__(self, parent, ID, title):
        wxFrame.__init__(self, parent, ID, title,
                         wxDefaultPosition, wxSize(200, 150))
        self.CreateStatusBar()
        self.SetStatusText(<FONT COLOR=#ff00ff>&quot;This is the statusbar&quot;</FONT>)

        menu = wxMenu()
        menu.Append(ID_ABOUT, <FONT COLOR=#ff00ff>&quot;&About&quot;</FONT>,
                    <FONT COLOR=#ff00ff>&quot;More information about this program&quot;</FONT>)
        menu.AppendSeparator()
        menu.Append(ID_EXIT, <FONT COLOR=#ff00ff>&quot;E&xit&quot;</FONT>, <FONT COLOR=#ff00ff>&quot;Terminate the program&quot;</FONT>)

        menuBar = wxMenuBar()
        menuBar.Append(menu, <FONT COLOR=#ff00ff>&quot;&File&quot;</FONT>);

        self.SetMenuBar(menuBar)


<FONT COLOR=#008080>class</FONT> MyApp(wxApp):
    <FONT COLOR=#008080>def</FONT> OnInit(self):
        frame = MyFrame(NULL, -1, <FONT COLOR=#ff00ff>&quot;Hello from wxPython&quot;</FONT>)
        frame.Show(true)
        self.SetTopWindow(frame)
        <B><FONT COLOR=#804040>return</FONT></B> true

app = MyApp(0)
app.MainLoop()

</pre></ol>
<p>
<img src="images/intro02.gif" width=200 height=150 alt="" border="0">

<p>
This example shows off some of the built-in capabilities of the wxFrame class.  For example, creating a status bar for the frame is as simple as calling a single method.  The frame itself will automatically manage its placement, size and drawing.  On the other hand, if you want to customize the status bar you can, simply by creating an instance of your own wxStatusBar derived class and attaching it to the frame.

<p>
Creating a simple menu bar and a drop-down menu is also demonstrated in this example.  The full range of expected menu capabilities is supported, cascading submenus, checkable items, popup menus, etc.  All you have to do is create a menu object and append menu items to it.  The items can be text as shown here, or can be other menus.  With each item you can optionally specify some short help text, as we have done, which will automatically be shown in the status bar when the menu item is selected.

<p>
<h2>Events in wxPython</h2>

The one thing that the last sample doesn't do is show you how to make the menus actually do something.  If you run the sample and select "Exit" from the menu, nothing happens.  Our next sample will take care of that little problem, but first a bit about events.

<p>
Most, if not all, GUI systems and toolkits are designed to be event driven.  This means that programs written using these GUI toolkits are basically a collection of event handlers.  The event handlers determine the functionality of the program.  They can open or update windows, access a database, whatever...  

<p>
In non object-oriented toolkits, the event handlers are usually standalone functions that are attached to the event by calling a toolkit function.  Object Oriented Programmers dislike these standalone event handler functions because they prevent complete encapsulation of the window's functionality into a single class.  

<p>
To overcome this limitation many object oriented GUI toolkits, such as Java's AWT, use class methods for the event handlers.  Basically events of a certain type are always sent to methods of a certain name.  This fixes the encapsulation problem, but means that in order to catch an event you have to derive a new class and implement that method.  Very often that is not an ideal situation, and typically causes a lot of clutter in the application as more and more classes are created just to handle certain types of events in different ways. 

<p>
wxPython utilizes the best of both paradigms.  Any method (or standalone function for that matter) can be attached to any event by using a helper function from the toolkit.  wxPython also provides a wxEvent class and a whole bunch of derived classes for containing the details of the event.  Each time a method is invoked due to an event, an object derived from wxEvent is sent as a parameter, the actual type of the event object depends on the type of event.  wxSizeEvent for when the window changes size, wxCommandEvent for menu selections and button clicks, wxMouseEvent for, um…, mouse events, etc.

<p>
To solve our little problem with the last sample, all we have to do is add two lines to the MyFrame constructor, and add some methods to handle the events.  We'll also demonstrate one of the Common Dialogs, the wxMessageDialog.  Here's the code, with the new parts in bold.

<p>
<ol><pre>
<FONT COLOR=#a020f0>from</FONT> wxPython.wx <FONT COLOR=#a020f0>import</FONT> *

ID_ABOUT = 101
ID_EXIT  = 102

<FONT COLOR=#008080>class</FONT> MyFrame(wxFrame):
    <FONT COLOR=#008080>def</FONT> __init__(self, parent, ID, title):
        wxFrame.__init__(self, parent, ID, title,
                         wxDefaultPosition, wxSize(200, 150))

        self.CreateStatusBar()
        self.SetStatusText(<FONT COLOR=#ff00ff>&quot;This is the statusbar&quot;</FONT>)
        menu = wxMenu()
        menu.Append(ID_ABOUT, <FONT COLOR=#ff00ff>&quot;&About&quot;</FONT>,
                    <FONT COLOR=#ff00ff>&quot;More information about this program&quot;</FONT>)
        menu.AppendSeparator()
        menu.Append(ID_EXIT, <FONT COLOR=#ff00ff>&quot;E&xit&quot;</FONT>, <FONT COLOR=#ff00ff>&quot;Terminate the program&quot;</FONT>)
        menuBar = wxMenuBar()
        menuBar.Append(menu, <FONT COLOR=#ff00ff>&quot;&File&quot;</FONT>);
        self.SetMenuBar(menuBar)

        <b>EVT_MENU(self, ID_ABOUT, self.OnAbout)
        EVT_MENU(self, ID_EXIT,  self.TimeToQuit)

    <FONT COLOR=#008080>def</FONT> OnAbout(self, event):
        dlg = wxMessageDialog(self, <FONT COLOR=#ff00ff>&quot;This sample program shows off\n&quot;</FONT>
                              <FONT COLOR=#ff00ff>&quot;frames, menus, statusbars, and this\n&quot;</FONT>
                              <FONT COLOR=#ff00ff>&quot;message dialog.&quot;</FONT>,
                              <FONT COLOR=#ff00ff>&quot;About Me&quot;</FONT>, wxOK | wxICON_INFORMATION)
        dlg.ShowModal()
        dlg.Destroy()


    <FONT COLOR=#008080>def</FONT> TimeToQuit(self, event):
        self.Close(true)

</b>

<FONT COLOR=#008080>class</FONT> MyApp(wxApp):
    <FONT COLOR=#008080>def</FONT> OnInit(self):
        frame = MyFrame(NULL, -1, <FONT COLOR=#ff00ff>&quot;Hello from wxPython&quot;</FONT>)
        frame.Show(true)
        self.SetTopWindow(frame)
        <B><FONT COLOR=#804040>return</FONT></B> true

app = MyApp(0)
app.MainLoop()

</pre></ol>
<p>

 <img src="images/intro03.gif" width=308 height=206 alt="" border="0">

<p>
The EVT_MENU function called above is one of the helper functions for attaching events to methods.  Sometimes it helps to understand what is happening if you translate the function call to English.  The first one is saying, "For any menu item selection event sent to the window self with an ID of ID_ABOUT, invoke the method self.OnAbout."

<p>
There are many of these EVT_* helper functions, all of which correspond to a specific type of event, or events. Some of the more popular ones are listed here:

<p>



<table border="1" cellspacing="0">

<tr><td>EVT_SIZE</td><td>Sent to a window when its size has changed, either interactively by the user or programmatically. </td></tr>
<tr><td>EVT_MOVE</td><td>Sent to a window when it has been moved, either interactively by the user or programmatically.</td></tr>
<tr><td>EVT_CLOSE</td><td>Sent to a frame when it has been requested to close.  Unless the close is being forced, it can be canceled by calling event.Veto(true)</td></tr>
<tr><td>EVT_PAINT</td><td>This event is sent whenever a portion of the window needs to be redrawn.
<tr><td>EVT_CHAR</td><td>Sent for each non-modifier (shift key, etc.) keystroke when the window has the focus.</td></tr>
<tr><td>EVT_IDLE</td><td>This event is sent periodically when the system is not processing other events.</td></tr>
<tr><td>EVT_LEFT_DOWN</td><td>The left mouse button has been pressed down.</td></tr>
<tr><td>EVT_LEFT_UP</td><td>The left mouse button has been let up.</td></tr>
<tr><td>EVT_LEFT_DCLICK </td><td>The left mouse button has been double-clicked.</td></tr>
<tr><td>EVT_MOTION</td><td>The mouse is in motion.</td></tr>
<tr><td>EVT_SCROLL</td><td>A scrollbar has been manipulated.  This one is actually a collection of events, which can be captured individually if desired.</td></tr>
<tr><td>EVT_BUTTON</td><td>A button has been clicked.</td></tr>
<tr><td>EVT_MENU</td><td>A menu tem has been selected.</td></tr>

<tr><td>&nbsp;</td><td>The list goes on an on...  See the wxPython documentation for details.

</table>

<p><hr><p>

<a href="tut-part2.php">Continue with the tutorial...</a>



<?php require('_footer.in') ?>



