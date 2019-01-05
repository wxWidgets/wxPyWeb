.. title: Avoiding Window IDs
.. slug: avoiding-window-ids
.. date: 2018-06-20 20:25:52 PDT
.. author: Robin
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text

Due to some changes upstream in wxWidgets the ``wxNewId`` function has been
deprecated. This deprecation first took effect in wxPython in the recent `4.0.2
<link://slug/wxpython-4.0.2-release>`_ release, and has triggered some
discussions in the wxPython-users group about window IDs. This post will give a
little more context and background, and also list some examples and advice I
gave in wxPython-users so it can be more easily found than just being buried in
a message archive.

:html:`<h3>Background</h3>`

About 20 years ago wxWidgets was rearchitected to use event tables to dispatch
events to event handlers. Prior to this change, when events arrived in the
application they were handled by calling the C++ virtual method intended to handle
that kind of event. In other words, C++'s virtual method dispatch mechanism
handled it. This worked well, but it was very inflexible and cumbersome.
Switching to event tables simplified many things, increased the flexibility, and
made it easier to add new kinds of events to the library as needed without
redesigning base classes, etc.

The items in the event tables consisted of an event type ID, the source widget
ID, a pointer to the member function to be called when the event arrives, and
some additional housekeeping items. Originally the tables were all constructed
at compile time and are a member of the class whose members are the event
handler methods. Since they are built at compile-time then these tables are
static (unchangeable) at runtime. A little later on dynamic event tables were
added and that allowed wxPython to be born, but even then it was a very long
time before it was common practice for wxWidgets C++ program to use dynamic
event tables to any great extent.

Since the event tables were defined statically at compile time that meant that
the table items which needed window IDs to properly route the event would also
need to have the ID defined at compile time as well. That led to the common
practice for wxWidgets users to create a bunch of ``ID_FOO`` constants and
manually managing their values and worrying about whether there were overlaps
between sets of IDs. This works fine, but can be cumbersome at times.

In the early days of wxPython it quickly became obvious that following the same
C++ patterns was not a very fun way to work with the library. Once wxWidgets
adopted the practice that widgets would generate their own ID if ``-1`` or
``wxID_ANY`` was passed to the constructor then several Python-only enhancements
naturally fell into place as well, such as the ``wx.PyEventBinder`` objects and
the ``wx.EvtHandler.Bind`` method. I'll show some of the ways that wxPython can
be used without IDs in the next section.


:html:`<h3>Writing ID-free wxPython</h3>`

There are a few things that have been done to minimize the need to have
preallocated IDs in wxPython. In fact, back in the early days of this project
there were a number of advocates for eliminating, or at least hiding the ID
parameters throughout all of the wxPython API. The reasoning was that they
aren't really necessary in most cases, and the remaining cases could likely be
worked around easily. When you boil it all down to the nitty-gritty, the primary
purpose of window IDs is for identifying the source of events when searching for
matching handlers, but there are many cases where it simply doesn't matter.
 
1. Many consider it more pythonic to ``Bind()`` an event handler directly to the
   widget that produces the event, such as binding ``EVT_BUTTON`` to the button
   object itself. In this case, the button's ID does not matter since there can
   only be one source of button events seen at that point in the hierarchy. So
   the following works and no specific IDs need to be dealt with at all:

   .. code-block:: python

       obj = SomeWidget(self, wx.ID_ANY, ...)
       obj.Bind(wx.EVT_SOMETHING, self.myHandler)


2. Building on that concept a little more, if there is only ever one source of a
   particular kind event in some containment hierarchy (up to the point of the
   object the handler is bound to) then again, the ID of that source doesn't
   matter, at least for the purpose of binding and finding event handlers for
   that event type. And it definitely doesn't matter if the same ID is used in
   another containment hierarchy because that other one will never be seen here.
   Again, the specific ID of the widget is not needed.

   .. code-block:: python

       obj = SomeWidget(self, wx.ID_ANY, ...)
       self.Bind(wx.EVT_SOMETHING, self.myHandler)
 

3. When there can be multiple sources of the same event type within a
   containment hierarchy which need to be routed to different handlers then the
   third parameter of ``Bind()`` (named 'source') can be used to accomplish that,
   and still there is no need to use and know specific ID values.

   .. code-block:: python

       objA = SomeWidget(self, wx.ID_ANY, ...)
       objB = SomeWidget(self, wx.ID_ANY, ...)
       self.Bind(wx.EVT_SOMETHING, self.myAHandler, objA)
       self.Bind(wx.EVT_SOMETHING, self.myBHandler, objB)


4. Thanks to the magic of Python the source parameter of the ``Bind()`` method can
   take any kind of object which has a ``GetId()`` method. That includes all
   windows/widgets, menu and toolbar items (which are returned by the methods which
   add the items to the menu or toolbar), timers, and so forth. If there is
   anything that can be the source of an event that does not have a ``GetId()`` method
   then I would consider that to be a bug and it should be reported. Since it's
   Python then it can also be non-UI objects that have a ``GetId()`` method, if that
   makes sense for the design of your application.

   .. code-block:: python

       item = menu.Append(wx.ID_ANY, "&Foo", "Do some foo stuff")
       self.Bind(wx.EVT_MENU, self.onDoFoo, item)


5. If you ever do need to know the ID of an item then you can just call it's
   ``GetId()`` instead of creating a preset constant.

   .. code-block:: python

       item = menu.Append(wx.ID_ANY, "&Foo", "Do some foo stuff")
       toolbar.AddTool(item.GetId(), "Foo", fooBmp, "Do Some Foo stuff") 
       self.Bind(wx.EVT_MENU, self.onDoFoo, item) # works for both items


6. One other common place where I've seen people wanting to use specific IDs is
   in event handlers to differentiate behavior based on the source of the event.
   For example:
 
   .. code-block:: python

       def OnHandleButtons(self, evt):
           if evt.GetId() == ID_A:
               self.doSomething()
           elif evt.GetId() == ID_B:
               self.doSomethingElse()
           ...

   However it's just as easy to compare the event's source object itself, and is
   also a stronger way to dispatch based on source in the rare case where there
   might be a duplicate ID conflict.

   .. code-block:: python

       def OnHandleButtons(self, evt):
           if evt.GetEventObject() is self.objA:
               self.doSomething()
           elif evt.GetEventObject() is self.objB:
               self.doSomethingElse()
           ...


   On the other hand, it is also simple to bind a separate handler for each of
   the cases above and that would also be a better OOP design.

This obviously doesn't cover all use cases now and forever, but it should show
that the need to use and reuse preset ID values is lower than some people may
think, and that the desire is that they should not be needed at all.

