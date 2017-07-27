.. title: Contributor Guide
.. slug: contributor-guide
.. date: 2017-07-16 22:59:58 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text

If you don't have a lot of experience with submitting patches or PRs (pull
requests) to an OpenSource project please start by reading the
`Contributing to Open Source Projects <http://www.contribution-guide.org/>`_
document.  (It's probably a good idea to review the document even if you do
have experience, just to make sure that you're "on the same page".) The
document provides a clear and concise set of general guidelines for
contributing to projects which will help streamline the process for both
you and the project maintainers.

If you don't have much **git and GitHub experience** then you may want
to review some appropriate tutorial, reference or other help documents
before you dive into the deep end of the contributor pool.  You should have
at least a conceptual understanding (and know how to find the details when
you need them) of things like github *forks*, git *clones*, *branching*,
*merging*, *local and remote repositories*, *upstream repository*, 
*pull requests* and *issue tracking* at GitHub, and so on.

Here are a few resources to help you **get up to speed** on using git and
GitHub, be sure to google for more info when you don't understand how to do
something:

* `Git Cheat Sheet <https://services.github.com/on-demand/downloads/github-git-cheat-sheet/>`_
* `The Git Book <https://book.git-scm.com/>`_
* `Learn Git Branching <http://learngitbranching.js.org/>`_ tutorial

:html:`<p>`

* `All GitHub Help <https://help.github.com/>`_
* `Fork a Repo <https://help.github.com/articles/fork-a-repo/>`_
* `The GitHub Flow <https://help.github.com/articles/github-flow/>`_ and the 
  coresponding `visual guide <https://guides.github.com/introduction/flow/>`_

If you like to use **GUI Tools** to work with your version control systems, my 
favorite is `SourceTree <https://www.sourcetreeapp.com/>`_ but there are 
`several others <https://www.google.com/search?q=git+gui+client>`_ available.

The rest of this page will simply emphasize a few of the important things, 
building upon the guidelines in the 
`Contributing... <http://www.contribution-guide.org/>`_ document.


1. If your contribution is intended to fix a bug or other issue, make
   sure that there is a **GitHub issue** created for it. If there
   isn't, then `create one </pages/how-to-submit-issue/>`_.  This is not
   necessary for enhancements or new features.

2. If your contribution is large or complex it may be a good idea to
   **discuss** it first in the GitHub issue or on `wxPython-dev
   <https://groups.google.com/forum/#!forum/wxpython-dev>`_.  It may save
   you some work and frustration if your contribution may need to be
   implemented differently than what you had in mind, or etc.

3. Always **create a new branch** for your contribution, do not use
   your master branch as the source of the PR. Why? Two reasons:
   Because *everybody* has a branch named master, so giving your
   contribution a different name eliminates that particular
   confusion. Secondly, if you use your master branch then that means
   that you should not make any other unrelated changes to your master
   branch until after your PR has been merged.  

   For example, to create a branch for a feature that "foos the bars"::

      <Do a fork and clone of Phoenix if you haven't already...>
      $ git checkout master
      $ git pull
      $ git checkout -b foo-the-bars
      <hack hack hack>
      $ git push origin HEAD
      <submit PR based on your 'foo-the-bars' branch from your GitHub fork>

4. If there is an issue associated with your contribution, then
   **include the issue number** in your PR's description text, (for
   example, ``fixes #1234``). This will cause the issue to be
   automatically closed when the PR is merged.

5. Do not put more than one fix/feature in the same branch or PR. Make
   a new distinct branch and PR for each of them.

6. Test. Test. Test.



