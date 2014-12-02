<?php
// 必要なファイルを読み込む
require_once("Michelf/MarkdownExtra.inc.php");
use Michelf\MarkdownExtra;

// 変換
$text = file_get_contents("index.md");
$html = MarkdownExtra::defaultTransform($text);

// ここから先は純粋にHTML + CSS + JavaScript
// CSSは適当にCDNから選ぶ
// MathjaxもCDNから読み込む
?>
<html>
  <head>
    <meta charset="utf-8">

    <!-- BootSwatch -->
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/united/bootstrap.min.css" rel="stylesheet">

    <!-- MathJax -->
    <script type="text/javascript">
      window.MathJax = {
        tex2jax: {
          inlineMath: [ ['$$','$$'], ["\\(","\\)"] ],
          displayMath: [ ['$$$','$$$'], ["\\[","\\]"] ],
          processEscapes: true
        }
      };
    </script>
    <script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>

  </head>
  <body>
    <div class="container">
      <?php print $html; ?>
    </div>
  </body>
</html>