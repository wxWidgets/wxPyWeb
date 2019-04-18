<!--
.. title: wxPython Downloads
.. slug: downloads
.. date: 2017-07-14 21:11:22 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
-->

## Current Release

Starting with wxPython 4.0 (the first Phoenix release) the wxPython source
archive and, for supported platforms, wxPython binary wheels are available
from the Python Package Index (PyPI). wxPython's project page at PyPI is
<https://pypi.org/project/wxPython>.

The source or binary wheels can be downloaded directly from the project
page, or you can use the wonderful [pip](https://pip.pypa.io/en/stable/)
tool to do it for you.  

### Windows and macOS

```
pip install -U wxPython
```

If you are on Windows or macOS with a compatible Python build, then the
command shown above will download the appropriate wheel file from the
latest release, and install it in your active Python environment or virtual
environment.

If there is no binary wheel file available for your platform or for your
version of Python, then pip will download the source archive and will
attempt to build it for you. There is some information about that below.


### Yes, we have Linux Wheels. Sort of.

Because of the differences between Linux distributions (mainly different
versions of the core libraries installed by default, but also platform
architecture and etc.) it is not possible to host binary wheel files for
Linux on PyPI unless they can be made to work within the constraints of
[PEP 513](https://www.python.org/dev/peps/pep-0513/) Unfortunately,
attempts to pound the wxPython peg into the `manylinux1` hole have not been
very successful. Maybe `manylinux2` will be a better fit. In the meantime,
if you have a Linux similar enough to those used to build the wheels
located under the 
[wxPython Extras linux](https://extras.wxpython.org/wxPython4/extras/linux/) folder, 
then you can use them and not need to build the wheels yourself.

Since there are various options for distro and wx port (GTK2 or GTK3) then
the files can not all be located in the same folder for easy access by pip.
This simply just means that you'll need to drill down a little further to
find the URL to give to pip.  For example, to get the GTK3 wxPython builds
for Ubuntu 16.04 (and 16.10, LinuxMint 18, and probably others) you can use
a pip command like this:

```
pip install -U \
    -f https://extras.wxpython.org/wxPython4/extras/linux/gtk3/ubuntu-16.04 \
    wxPython
```

Of course you can always download the wheel file yourself and then use pip
to install your local copy of the file.


### Building with Pip

If pip is not able to find a binary wheel file that matches your platform
and your version of Python, then it will download the source archive and
will attempt to build it for you. If you have the required compiler and
dependent libraries installed, then this will be a feasible approach for
you, although it can take some time to do the build. The end result will be
the same as if there was a binary wheel available for you. In fact, pip can
also be told to just build the wheel and not do the install. This way you
can reuse the wheel file for different Python environments or on other
machines, or whatever, without needing to rebuild for each one.

For instructions on how to build a wxPython wheel file specific to your Linux
machine and Python installation, please refer to this
[post](link://slug/2017-08-17-builds-for-linux-with-pip) in the blog.


### Conda or Anaconda

If you are using a Python environment managed by [Conda](https://conda.io/) or
[Anaconda](https://www.anaconda.com/) then you can install wxPython using the
`conda` tool just like you would install any other package. Check
[here](https://anaconda.org/search?q=wxpython) for details on what builds are
available. The fine folks at [Conda-forge](https://conda-forge.org/) have done a
good job at keeping it up to date with new releases.

One small *gotcha* to be aware of with the conda builds of wxPython is that on
OSX/macOS you will need to use `pythonw` to execute your wxPython applications,
not the typical `python` command. To use `pythonw` you will need to install the
`python.app` pacakge from conda.


### Extra Files

In addition to the source and binaries available on PyPI, there are some
extra files which are part of each release, which are hosted at 
<https://extras.wxPython.org/wxPython4/extras/>. 
The things you will find there are:

* A tarball containing the **wxPython API documentation**, which is the
same content available at <https://docs.wxpython.org>. You can use this
copy of the reference docs for local off-line reading of the API reference
material.  Look for a file named like `wxPython-docs-VERSION.tar.gz`.

* A tarball containing the **wxPython demo** and **samples**. It is highly
encouraged for new wxPython users, and experienced ones too, to download
this file. It is a great learning resource with tons of examples showing
how to use various components of the wxPython library. Look for a file
named like `wxPython-demo-VERSION.tar.gz`.

* Zip files with `*.pdb` files which are Visual Studio debugger information files. 

* Binary wheel files for a few flavors of **Linux**. 



## The Bleeding Edge

If you're the daredevil type and prefer to work with the absolutely newest
version of wxPython, we've got a couple options for you.


### Snapshot Builds

Each day that there are commits to wxPython Phoenix's master branch, the
[buildbot](http://buildbot.wxpython.org/) will attempt to do a "daily
build". If successful then the resulting wheels, docs, and source archives
will be uploaded to the 
[snapshots folder](https://wxpython.org/Phoenix/snapshot-builds/). 
Although these are not technically official releases, and may have new 
undiscovered and unsolved bugs, more than a few people use them 
successfully in their own projects.


### GitHub

wxPython's GitHub project is at <https://github.com/wxWidgets/Phoenix>. If
you want to tinker with the code (preferably in order to submit a
[PR](https://github.com/wxWidgets/Phoenix/pulls)) then this option is what
you are looking for. Fork and clone a copy of the git repository for
yourself and start tweaking away under the hood.

Since the generated files are not committed to git you will need to go
through several more steps to generate and build the code, but they are all
handled by the
[`build.py`](https://github.com/wxWidgets/Phoenix/blob/master/build.py)
script and there is a overview of the process and the needed steps in the
[README](https://github.com/wxWidgets/Phoenix/blob/master/README.rst). If
you get stuck then you can ask about it on 
[wxPython-dev](https://groups.google.com/forum/#!forum/wxpython-dev).



## Old Releases

The wxPython releases prior to 4.0 (a.k.a "Classic" wxPython) will remain
available at
[SourceForge](https://sourceforge.net/projects/wxpython/files/wxPython/).
That includes source, documentation, the demo, and various binary
installers for Windows and Mac systems.

