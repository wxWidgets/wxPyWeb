<HTML>
<HEAD><TITLE>wxPython/Google Search Tool</TITLE>
</HEAD>
<?php require('_header.in') ?>
<?php require('_navigation.in') ?>

<p>

<!-- Search Google -->
<center>
<FORM method=GET action=http://www.google.com/custom>
<TABLE bgcolor=#FFFFFF cellspacing=0 border=0>
<tr valign=top><td>
<A HREF=http://www.google.com/search>
<IMG SRC=http://www.google.com/logos/Logo_40wht.gif border=0 ALT=Google align=middle></A>
</td>
<td>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT type=submit name=sa VALUE="Google Search">
<INPUT type=hidden name=cof VALUE="AH:center;AWFID:ec56cb613b6d4377;">
<input type=hidden name=domains value="wxwidgets.org;wxpython.org"><br>
<font size="-1" style="font-family: sans-serif;">
<input type=radio name=sitesearch value="">Search WWW <br>
<input type=radio name=sitesearch value="wxwidgets.org" checked>Search wxWidgets.org <br>
<input type=radio name=sitesearch value="wxpython.org">Search wxPython.org <br>
</font>
</td></tr></TABLE>
</FORM>
</center>
<!-- Search Google -->


<?php require('_footer.in') ?>

