<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<!--
index.php generates the html page using <table>'s to create the layout.
Essentially, the HTML page has the following structure:

--------------------%<--------------------
<table>
  <tr>
    <td>$navigation_panel</td>
    <td>$main_panel</td>
  </tr>
  <tr>
    <td colspan=2>$footnote_panel</td>
  </tr>
</table>
--------------------%<--------------------

In the above structure, the various elements are formed as follows:

1. $navigation_panel: This is simply done by including head.inc.

2. $main_panel: This is formed via the subject key in the query to this
   page. For example, if we call index.php as
   	 index.php?subject=coding-style
   then it will $main_panel will simply include coding-style.inc.

   If no subject key is specified, then we include main.inc.

   In addition, if a title is specified in the query, then it is used to
   form the title of the HTML page.

3. $footnote_panel is simply foot.inc.

-->
<html>
<head>
	<title>VIM-LaTeX </title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="content-Language" content="en-US">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<table width=95% cellpadding="0" cellspacing="0" border="0" class="head">
	<tr>
		<td class=leftpanel>
			<a href="index.php">
			<img src="vim-latex.gif" alt="VIM The Editor" width="115" height="32" border="0">
			</a><br>
			<a href="index.php?subject=download&title=Download">Download</a><br>
			<p></p>
			<hr class=navig>
			<div class=navheader>Documentation</div>
			<a href="index.php?subject=manual&title=Manual#user-manual">User Manual</a><br>
			<a href="index.php?subject=manual&title=LaTeX%20Reference#latex-reference">LaTeX Reference</a><br>
			<a href="index.php?subject=faq&title=FAQ">FAQ</a><br>
			<a href="index.php?subject=manual&title=Tutorial#tutorial">Tutorial</a><br>
			<a href="index.php?subject=features&title=Features">Features</a><br>
			<a href="index.php?subject=screenshots&title=Screenshots">Screenshots</a><br>
			<p></p>
			<hr class=navig>
			<div class=navheader>Support</div>
			<a href="index.php?subject=weare&title=People">We are ...<br>
			<a
			href="index.php?subject=contact&title=Contact">Feature
			Requests <br/>Bug Reports <br/>Mailing List <br/></a><br>
			<p></p>
			<a href="http://vim-latex.svn.sourceforge.net/viewvc/vim-latex/trunk/vimfiles/ftplugin/latex-suite/packages/">Package files</a><br>
			<a href="http://vim-latex.svn.sourceforge.net/viewvc/vim-latex/trunk/vimfiles/ftplugin/latex-suite/templates/">Templates</a><br>
			<p></p>
			<hr class=navig>
			<div class=navheader>Developers</div>
			<a href="http://vim-latex.svn.sourceforge.net/viewvc/vim-latex/">SVN Webinterface</a><br>
			<a href="http://sourceforge.net/svn/?group_id=52322">SVN instructions</a><br>
			<a href="index.php?subject=links&title=Links">Links</a><br>
			<img src="blank.gif" height="150" width="1"><br>
			<p class="doublesmall">
			Site hosted by:<br>
			<a href="http://sourceforge.net">
				<img src="http://sourceforge.net/sflogo.php?group_id=52322&type=1" width="88" height="31" border="0" alt="SourceForge Logo">
			</a><br>
			<img src=vim_created.gif alt="Created with Vim" width="90" height="36">
			</p>

		</td>
		<!-- main table will continue in index.php -->
<!-- End of left navigation bar. -->

<td class="mainpanel">
<!-- Begin of Main Panel -->

<h2 class="hline"></h2>
<p><a href="http://vim.sf.net">Vim</a> is undoubtedly one of the best
editors ever made. <a href="http://www.latex-project.org/">LaTeX</a> is an
extremely powerful, intelligent typesetter. Vim-LaTeX aims at bringing
together the best of both these worlds.</p> <p>We attempt to provide a
comprehensive set of tools to view, edit and compile LaTeX documents
without needing to ever quit Vim. Together, they provide tools starting
from macros to speed up editing LaTeX documents to compiling tex files to
forward searching .dvi documents.</p> <p>See the <a
href="index.php?subject=features&title=Features">features page</a> for a
brief tour of the various features in LaTeX-suite. All these features can
be tuned extensively using the included <tt>texrc</tt> file. The <a
href="index.php?subject=screenshots&title=Screenshots">screenshots page</a>
shows you how a typical working session with LaTeX-suite might progress.
<p>LaTeX-suite is made for Vim versions 6.0 and above. Installation
instructions are given in the <a
href="index.php?subject=download&title=Download">download page</a>.</p>

<!--
vim:ft=php
-->

<!-- End of Main Panel -->
</td>
</tr>
<tr>
<td colspan=2 class=footpanel>
<!-- Begin of footer -->

<a href="index.php?subject=contact&title=Contact">&copy;Vim-latexSuite&nbsp;Team&nbsp;2002</a>

</td>
</tr>
</table>

</body>
</html>
