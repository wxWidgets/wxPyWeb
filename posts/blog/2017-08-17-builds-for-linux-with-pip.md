<!--
.. title: Building wxPython for Linux via Pip
.. slug: 2017-08-17-builds-for-linux-with-pip
.. author: Mesalu
.. date: 2017-08-17 19:14:19 UTC
.. tags: Build, Linux
.. category: Blog
.. link: 
.. description: 
.. type: text
-->

### The Problem

There have been some issues flowing into Phoenix's issue tracker since the
release of wxPython 4.0.0b1 related to installation issues on Linux using
pip, which have caused some overhead and soaked up unnecessary amounts of
time. So lets start with getting some of the basics out of the way. There
are a lot of flavors of linux. To name a few there's the debian family,
Debian, Ubuntu, Kubuntu, Elementary, Mint, etc., Arch, Gentoo, RHEL and CentOS,
and so on. Each flavor has differences which can make binary distributions
incompatible across flavors.

Why does this affect wxPython you may ask? It's just a Python package, and
Python source is independent across operating systems after all, right?.
Well, not all Python packages are just Python. wxPython as an example
contains binary extension modules (compiled C or C++ code that is platform
and architecture dependent.)  wxPython by default also contains a copy of
the compiled version of the wxWidgets library written in C++, which also
depends on other 3rd party libraries which need to not only be present at
runtime, but also have their development-related files present at
wxWidgets' and wxPython's compile time.

Pip in its infinite wisdom can detect this, and knows how to select the
appropriate binary wheel for the following criteria:

- OS (Windows, macOS, Linux)
- Architecture (i386, x86_64, etc)
- Python Version (2.7, 3.5, 3.6, etc)

See how pip doesn't care for linux distribution? That's the issue. The
binary content and dependencies of wxPython can't be delivered consistently
via pip. There are some efforts to get around this (eg. 
[PEP 513](https://www.python.org/dev/peps/pep-0513/) a.k.a. manylinux1) but 
they don't quite work with wxPython yet.


### The Fix

In order to deploy to linux systems Phoenix (wxPython 4.0+) simply builds
itself from a source tarball as part of the pip setup process. Most of the
code generation is already present in the tarball, it merely needs to be
compiled. This causes very lengthy installation times, but is a necessary
evil. Because the build is just that, a build, you will need all of
Phoenix's binary dependencies present at build time. wxWidgets' configure
will be run, and if it detects missing libraries the whole build, and
therefore the pip installation, will fail.


### What You Need

You will need the following packages (please consult your distributions
package list for the appropriate names) and their dependencies:

- python-dev (for your version of python)
- gtk (preferably 3, but depends on your needs)
- gstreamer 
- glut
- webkitgtk (matching your gtk version)

on debian based systems, or other systems that separate development
packages from standard packages, you will need the corresponding -dev or
-devel package in addition to the standard package.


### FAQ

Q1: "Why can't you just install the necessary packages as part of
wxPython's installation"

A1: Lots of good reasons, among them are: Pip is NOT your linux package
manager, Phoenix is not responsible for maintaining your system.


Q2: "I can install PyQt(4/5) just fine via pip! Why can't wxPython do the
same?"

A2: Qt does not depend on system provided libraries other than the low-
level basic libs. wxWidgets does, it's one of the defining differences of
the two toolkits. As such PyQt can deliver to all linuxes in the same
manner.

