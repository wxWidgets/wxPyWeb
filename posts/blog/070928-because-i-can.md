Title: Because I can...
Date: 2007-09-28 15:30
Author: Robin
Tags: Development, Software
Category: Blog
Slug: because-i-can
nocomments: True

For most of the time that I was actively using CVS (about a decade or
so) if I wasn't using the command line interface then I most likely was
using the pcl-cvs module for Emacs. It has a very good integration with
emacs, with a dired-like listing of the files in the workspace that need
some sort of attention. (They're modified, need updated, or etc.) It
also apparently had very little overhead as the response time was always
about as snappy as you could get with CVS, and when you're dealing with
a source code repository with over 11,000 files in it every little bit
counts. I tried a few other CVS-front ends over the years, but none of
them seemed to suit me and my work habits very well. They either assumed
too much or were too restrictive, in other words they got in my way more
than they helped me to do my job.

A couple years ago OSAF switched from CVS to Subversion, and although I
had played around with it a bit before this was my first real effort at
using it. I love the advancements that SVN gives over and above what CVS
can do, but I was very disappointed to find that the Emacs module for
SVN (psvn.el) basically sucks. Although it provides an interface similar
to pcl-cvs, it is very slow, often taking much longer to do something
than it would take doing it from the command line, and it can sometimes
block normal Emacs usage for a few seconds at a time while it churns at
100% CPU. So I looked at some other Free alternatives and didn't find
anything that I liked. They were all either as slow or slower than the
Emacs module, or they had the same problems that the CVS GUIs I had
looked at had. So I gave up and used subversion from the command-line
most of the time.

Now that wxWidgets has also switched to Subversion I started looking
around for other solutions again... To my surprise I found that [PySVN's
WorkBench](http://pysvn.tigris.org/) tool was a good fit for me. It's
very fast at doing SVN operations, and it doesn't get in the way of how
I work. I think I had dismissed it before mainly because it seems to be
primarily intended as a test case and proof of concept for the PySVN
Python extension module. So I started using WorkBench more and more and
liked it more and more, but I also started noticing things that I didn't
like as much, and some things that I thought could be done better,
mostly UI and usability types of things. This brings me to the point of
this article: WorkBench is Open Source so I could tweak it to my heart's
content. And since it is written in Python and uses wxPython for the UI
it is very easy for me to do so. And so that's what I've been doing off
and on for the past couple months, and I have to say that it has turned
out very well. Yesterday I submitted a [big
patch](http://pysvn.tigris.org/issues/show_bug.cgi?id=69) to the PySVN
project, and although there are a few more things I would like to do to
it, I am very happy with what I have done so far. And all of this is due
to the Open Source nature of the project. Open Source allows me to make
the tool be what I need it to be, and so I did it because I can.

