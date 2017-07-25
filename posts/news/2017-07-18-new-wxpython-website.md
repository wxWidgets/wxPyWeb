<!--
.. title: New wxPython Website
.. slug: new-wxpython-website
.. date: 2017-07-18 23:14:08 UTC
.. author: Robin
.. tags: General
.. category: News
.. link: 
.. description: 
.. type: text
-->

> "The 2000s called, they want their website back..."

Not any more!  I finally gave the old clunky site back to the dinosaurs and
have implemented a brand new site (using the awesome static site generator
[Nikola](https://getnikola.com/)) which you are gazing at with much adoration now.
The new site combines most of what was on the old site, plus a  [news
feed](/news/) (you're reading a **news post** right now) and I also
resurrected my old [wxForty-Two blog](/blog/) from the wordpress graveyard
and added it here too. Being a static site I no longer have to worry about
the  perpetual stream of wordpress security issues.

<!-- TEASER_END -->

There is still some style and template tweaking that I have planned, plus
some more content, but thanks to Nikola I am *a lot* further along than I
thought I would be by now. And since posts and content are edited in 
[reST](http://docutils.sourceforge.net/rst.html) or
[Markdown](https://daringfireball.net/projects/markdown/) (or tons of 
[other options](https://getnikola.com/handbook.html#supported-input-formats)) 
it should be lots easier to keep things up to date and add new content as needed.

For those who care about the details, I'm using a custom theme based on
Nikola's stock [bootstrap3](http://getbootstrap.com/) theme, and using
[Mako](http://www.makotemplates.org/) for the template engine. I customized
the base template to enable adding the panels on the right side of the page
(or at the bottom if you are browsing on a phone or other width-challenged
screen.) I also created a "shortcode" template that is used to inject the
most recent news posts on the front page, enabling a combination of, in
Nikola's terminology, "page" and "index". And of course there has been some
CSS tweaks too. Fun stuff.

### One more thing...

For the curious, the website repository is on GitHub, at 
<https://github.com/wxWidgets/wxPyWeb>.
