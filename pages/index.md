title: Welcome to wxPython!
slug: index
tags:
link:
description:



TODO: Move this content to `About/Overview` and change this to be a simple
intro paragraph plus the last couple items from the News category...

What is wxPython?
-----------------

[wxPython](http://wxPython.org/) is a cross-platform **GUI toolkit** for
the [Python](http://www.python.org/) programming language. It allows Python
programmers to create programs with a robust, highly functional graphical
user interface, simply and easily. It is implemented as a set of Python
extension modules that wrap the GUI components of the popular
[wxWidgets](http://wxwidgets.org/) cross platform library, which is written
in C++. 

Like Python and wxWidgets, wxPython is **Open Source** which means that
it is free for anyone to use and the source code is available for anyone
to look at and modify. And anyone can contribute fixes or enhancements
to the project.

wxPython is a **cross-platform** toolkit. This means that the same
program will run on multiple platforms without modification. Currently
Supported platforms are Microsoft Windows, Mac OS X and macOS, and
Linux or other unix-like systems with GTK2 or GTK3 libraries. In most cases
the native widgets are used on each platform to provide a 100% native look
and feel for the application.

Since the programming language is Python, wxPython programs are **simple, easy** to
write and easy to understand.



What is wxPython Phoenix?
-------------------------

wxPython's Project Phoenix is a new from-the-ground-up implementation of
wxPython, created with the intent of making wxPython 
*"better, stronger, faster than he was before."* In other words, this new implementation is
focused on improving speed, maintainability and extensibility of wxPython,
as well as removing most of the cruft that had accumulated over the long
life of Classic wxPython.

The project has been in development off and on, mostly behind the scenes,
for many years. For the past few years automated snapshot builds have been
available for those adventurous enough to try it, and many people
eventually started using the snapshots in their projects, even for
production releases.  While there are still some things on the periphery
that need to be completed, the core of the new wxPython extension modules
which wrap the wxWidgets code has been stable for a long time now.

Due to some things being cleaned up, reorganized, simplified and
dehackified wxPython Phoenix is not completely backwards compatible
with wxPython Classic.  This is intended. In general, however, the API
differences tend to be minor and some applications can use Phoenix
with slight, or even with no modifications.  In some other cases the
correct way to do things was also available in Classic and it's only
the wrong way that has been removed from Phoenix.  For more
information there is a **Migration Guide** document available at:
[https://docs.wxpython.org/MigrationGuide.html](https://docs.wxpython.org/MigrationGuide.html).

The new **wxPython API reference documentation**, including all Python-specific
additions and customizations, and also docs for the `wx.lib` package, is
located at: 
[https://docs.wxpython.org/main.html](https://docs.wxpython.org/main.html).
