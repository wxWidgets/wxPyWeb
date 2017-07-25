<!--
.. title: wxPython History
.. slug: history
.. date: 2017-07-14 22:21:11 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
-->


Both wxPython and the wxWidgets library it is built upon are mature
projects that are still actively developed.  wxPython's history started
before the turn of the century, back in 1996. wxWidgets was already around
4 years old by then, you can see more details about the history of wxWidgets
[here](https://www.wxwidgets.org/about/history/).

## History according to Robin 

In 1995 I was working on a project that needed a GUI to be 
deployed on HP-UX systems, but my boss also wanted to show something 
at a trade show on his Windows 3.1 laptop in a few weeks time.  So I 
started searching for a cross platform C++ GUI toolkit to do a 
prototype with. In those days it wasn't so easy without Google, but I 
found that there were several commercial alternatives available (none 
of which are still available today) and lots of toolkits with 
freely available source.

While evaluating each of the free toolkits for my immediate needs and 
deciding which of the commercial offerings would be best for our long 
term needs I ran into the term "Python bindings" on the wxWidgets web 
site (in this case "binding" refers to the connection between the
Python language and the wxWidgets toolkit).  Full of curiosity at how 
one would "bind" a software toolkit to a reptile (I had never heard of 
the Python language up to this point), I clicked on the link, and the 
next link, and the next, until I finally ended up at the Python 1.2 
Tutorial document.  Three hours later I was converted from being the 
local C++ Guru to a Python Evangelist bugging all the developers in 
the immediate vicinity showing them the cool new thing I had 
discovered.

So instead of working on my prototype I worked with Harri Pasanen in 
Finland to advance the Python bindings for wxWidgets, otherwise known 
as wxPython 0.2, also with some help from Edward Zimmerman. <!-- The
mailing list announcement of that release is archived  
[here](http://www.google.com/groups?selm=PA.95Jul27032244%40ok.tekla.fi&oe=UTF-8). -->
We got it to be functional enough that I could do my prototype for my 
boss using Python, but wxPython was a nightmare to maintain and to 
enhance because everything (C++ extension module code, Python proxy 
modules, build system, etc.) was all done by hand, and little changes 
or enhancements to wxWidgets would often require changes to several 
places in wxPython code to add the support for the enhancement or fix 
to wxPython.  When it reached many tens of thousands of lines of code 
it got to be very awkward and fragile to work on in that manner.  Add 
to that the fact that there was no central source code repository
(this was also long before [SourceForge](http://sf.net/)'s time) and 
so we were emailing code changes to each other and you can get an 
inkling for the difficulties involved.

About that time I had to start doing real work again as my main 
project at work started to build up from a gleam in the eye to a full 
force development project with several developers under my control and 
design meetings and deadlines and all that, and I found myself fully back in the C++ 
world again, (although I was able to use Python for some of the build and 
test scripts for the project.)  Harri also wasn't able to spend any 
time on it, and so wxPython development slowed to less than a crawl 
and eventually pretty much stopped.

In 1997 I discovered SWIG (the Simple Wrapper and Interface Generator,)
and realized that it could help with all the 
maintenance issues that pained us in the wxPython project.  In about 
three or four weeks worth of spare time I almost completely 
reimplemented using SWIG everything (and more!) that had taken several 
weeks of almost full time on my part and several months of part time 
for Harri doing it by hand. After getting sidetracked on another 
project for a while I discovered that wxWidgets 2.0 was in active 
development, but had a whole new architecture, so I had to do it all 
again.  But this time the new architecture simplified things enough 
that it took only about a weeks worth of spare time!  So in the summer 
of 1998 the first "modern version" of wxPython was released and has 
been in active development ever since.  The first announcement is
archived [here](http://groups.yahoo.com/group/python-announce-list/message/95).

The rest is, as they say, history.  It's important to note however
that SWIG is allowing me to easily create and maintain literally
hundreds of thousands of lines of code, so much of the credit for the
vastness of wxPython's feature set deserves to go to David Beazley and
the other developers contributing to that project.


## History of Project Phoenix

TBW...


## "Recent" Changes 

The "recent" changes page of wxPython goes all the way back to release 0.3
in 1998. That was a long time ago, with many releases made since then. The
changelog is updated for each release and is viewable [here](/pages/changes). 



