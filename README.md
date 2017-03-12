HTML Redirect
=============

This project scratches an itch to create a single
page that will use every browser redirection
technique I could find.

While most likely overkill, the idea was to enure
that some fallback technique would be available,
even if that ultimately results in a page with
a link the user has to click on.


Usage
-----
Simply copy the file and edit the URL that you'd
like the page to redirect to.


Techniques and Features
-----------------------

* The file uses PHP so the URL only has to be
  specified once. You can make a .html version
  by doing your own substitutions, or by running
  the php processor from the command line:
  `php index.php > index.html`

* HTTP 302 header redirect technique

* meta-tag refresh redirect technique

* JavaScript window.location.href technique

* Manual fall back with anchor-tag technique

* Canonical url provided for search engines

