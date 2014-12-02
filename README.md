MDPage
======

This is a tiny PHP script that renders a Markdown file as a static HTML page.
In fact this is just a wrapper of [PHP Markdown Extra](https://michelf.ca/projects/php-markdown/extra/) using a CSS provided by [Bootswatch](http://bootswatch.com)) and [MathJax](http://www.mathjax.org/) via CDN.

You can use this to build a *one-page* site for small projects quickly.


How to use
----------

Simply upload `index.php` and `Michelf` directory to your host as is.
Prepare your own `index.md` and upload it to the same location.
Then if you access `index.php` with your browser, it will read `index.md` and render it for you.


How to customize
----------------

To change the style, edit the HTML part of `index.php`. By default, it uses a [Bootswatch](http://bootswatch.com) style.


Limitations
-----------

This is not a CMS. No menus, no file manager, no editor, no access control.


Similar projects
----------------

- Client-side rendering
  - [MDwiki](http://dynalon.github.io/mdwiki/)
- Server-side rendering
  - Google `flat-file-cms markdown` to find CMS engines that accept Markdown.
- Local rendering
  - [Jekyll](http://jekyllrb.com/)

