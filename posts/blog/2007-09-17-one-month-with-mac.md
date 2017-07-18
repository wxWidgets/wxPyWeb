Title: One month with Mac
Date: 2007-09-17 01:31
Author: Robin
Tags: Hardware, Linux, Mac
Category: Blog
Slug: one-month-with-mac
nocomments: True

It's been about a month since I switched my primary computer to a
[MacBook Pro](http://www.apple.com/macbookpro/), (2.4 GHz, 4G ram, with
the new 17 inch hi-rez display) which I got for myself for my birthday.
So I thought that this would be a good time for a review, and since I'm
now a blogger it makes sense to share it with all of you too.

First a little background and why I decided to switch. For the past four
or five years I've been using a [Dell](http://www.dell.com) Inspiron
8200 laptop running Linux as my primary machine. By "primary machine" I
mean the one where I do most of my development work, web browsing,
email, word processing and etc. I also have a few other computers on and
under my desk which are used for developing and testing
[wxPython](http://wxPython.org/) on the various platforms I support,
creating the binaries that I distribute, as well as some platform
specific tasks. I was real happy using Linux as my primary desktop,
especially for the last year and a half since I switched to
[Ubuntu](http://www.ubuntu.com/). Almost everything I needed or wanted
from my desktop system was available in one way or another, as well as
plenty of things to satisfy my inner geek. However there were a few key
things that prompted me to switch:

-   Even with the fantastic hardware support that Ubuntu has, I still
    had troubles with wireless networking, especially when trying to
    access a WEP protected network, and also troubles with suspending
    the laptop. Every time I suspended I had to cross my fingers and
    hope that it would come back in one piece. Even if it did restore, I
    usually had to restart some services, and it often would not
    suspend/resume more than a few times without needing a reboot. I
    knew that using an Apple notebook computer and OS X instead would
    give me excellent hardware support in these areas.
-   Ever since the advent of [VMware](http://www.vmware.com) I've used
    it to help me in my work, although after the Dell got to be a few
    years old it didn't feel fast enough to depend on it as a VMware
    host very much, especially since I had all these other computers on
    my desk running at native speeds. Also, since Apple doesn't allow OS
    X to be used in a virtual machine it wasn't much help there. However
    with a fast Mac with enough memory I could easily use it as VM host
    and run Windows and Linux VM guests on it, allowing me to have all
    the platforms I need for my work all wrapped up in nice a portable
    package.
-   Although there has been a lot of hype over the years about the
    premium you have to pay to have Apple hardware, I don't think that
    is very true anymore once you consider the quality of the hardware.
    Sure, you can get cheapo PCs and not have to lay out very much cash
    for them, but you pay for it down the road with upgrades and
    hardware failures. Once you start comparing high end, high quality
    hardware with good support, PCs and Apples cost about the same. I
    did a price comparison with Dell, choosing what I would get if I
    were to replace my old Dell with the new one, and it actually priced
    out at a couple hundred more than what I paid for the MacBook Pro.
    Of course that includes the Microsoft Tax which would have been
    wasted on that machine for me because I would have installed Linux
    on it first thing. (And getting Linux from Dell wouldn't have been
    an option because they don't offer it on the machine I would have
    bought from them.)

All in all the transition went a lot smoother than I expected. I've used
Mac OS X for software development related tasks for a number of years
now, but I had never really investigated what it would take for it to be
my day-to-day machine. I knew my way around the file-system, using some
of the applications that Apple ships with OS X, and a few of the Free
and Open Source development related tools that I had installed, and also
using the compiler and debugger, but that was about it. I was worried
that there were too many things that I would miss from Linux, or that
would be too difficult for me to get used to, or that something would go
wrong, or that it would take too long to make the transition and that my
work would suffer. But it just hasn't been the case. I had the old Dell
and the new MacBook sitting side by side for a few days while I moved
things over, and set up the new software, but I expected to need to do
that for a week or two. One day I surprised myself when I realized that
I hadn't even turned on the Dell for several days and that my setup
tasks were way ahead of schedule. The hardest thing I dealt with was
trying to decide which IRC client to go with. (I finally settled on
[Colloquy](http://colloquy.info/), but [Linkinus](http://linkinus.com/)
was a close second.) Every time I went to look for some software to fill
a need for something I used regularly on the old machine, I was able to
find something that was either Free/Open Source or that was inexpensive
shareware. The only commercial software that I've bought so far is
VMware, but I expect to get one or two others.

So now the Dell has had its original Windows XP reinstalled and it has
been recycled into being the first laptop for a member of my family.
I've been using the Mac almost exclusively for a few weeks now, and it
has been great. There are a few things that I don't like, or at least
haven't adjusted to yet and it hasn't been quite as stable as I expected
(more about these in another article) but all in all I've been very
pleased with my choice.

The three main bullet points above have been satisfied very well. I've
had no issues with networking at all, and it seamlessly transitions from
wired to wireless and back with no interruptions in service. I've even
had ssh sessions that remained connected when the wireless dropped for
several minutes, and I was able to pick up where I left off when the
wireless link came back again.

Sleeping and resuming works wonderfully, with no crossed fingers
required.

And [VMware Fusion](http://www.vmware.com/products/fusion/) has been a
dream come true. Its support for Windows guests is not quite as polished
as Parallels, (but it's only a 1.0 product so I expect that to improve
over time,) and it's support for Linux guests far out-shines that of
Parallels. There are a few features I miss from the VMware Workstation
product available for other platforms, but they are not that critical
for day to day operation. I'm able to have two "large" VMs running
simultaneously and the computer doesn't even break a sweat. For CPU and
disk intensive things like compiles the Linux virtual machine is
actually much faster than doing the same thing directly on the Dell
hardware was, although it's not as fast as running it on Cyclops, which
happens to have the same CPU as the MacBook. (Cyclops is one of the
Linux PCs under my desk which is used for making the wxPython binary
packages for Linux) The Windows VM is also almost as fast for
development work as the Windows PC I was using before. I still have that
PC running because it is doing other things for me, but I've moved my
development work to the VM because of the convenience factor.
Incidentally, I can have compiles running in both VMs, and still be
using the host machine's applications without noticing any slowdowns or
jerkiness in their UI at all.

Well, I've rambled on long enough for one article. I've not yet covered
all the things I thought I would in this post so I expect I'll make a
few more on this subject over the next few weeks. Stay tuned.

