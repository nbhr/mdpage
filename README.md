MDPage
======

This is an embarrassingly tiny PHP script that renders a Markdown file as a static HTML page. In fact this just transforms a Markdown file using [PHP Markdown Extra](https://michelf.ca/projects/php-markdown/extra/), and adds some lines to include a CSS provided by [Bootswatch](http://bootswatch.com) and [MathJax](http://www.mathjax.org/) via CDN.

You can use this to build a *one-page* site for small projects quickly.


How to use
----------

Simply upload `index.php` and `Michelf` directory to your host as is.
Prepare your own `index.md` and upload it to the same location.
Then access `index.php` with your browser, and `index.php` will parse `index.md` and render it for you.


How to customize
----------------

To change the style, edit the `<head>` section written in `index.php`. By default, it uses a [Bootswatch](http://bootswatch.com) style.


Limitations
-----------

Obviously this is not a CMS. No menus, no file manager, no editor, no access control.


Credits / Technologies
----------------------

I do not deserve any credit. All the great things are done by the following implementations.

- [PHP Markdown Extra](https://michelf.ca/projects/php-markdown/)
- [Bootswatch](http://bootswatch.com)
- [MathJax](http://www.mathjax.org/)


Similar projects
----------------

- Client-side rendering: browsers get Markdown from servers, and then render them by JavaScript.
  - [MDwiki](http://dynalon.github.io/mdwiki/)
- Server-side rendering: servers transform Markdown to HTML, and then feed them to browsers.
  - Google `flat-file-cms markdown` to find CMS engines that accept Markdown.
- Local rendering: authors convert Markdown to HTML, and then upload them to servers.
  - [Jekyll](http://jekyllrb.com/)

