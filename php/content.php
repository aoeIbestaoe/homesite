<html>
<head>
  <title>Content</title>
  <link rel="stylesheet" href="../css/layout.css">
</head>
<body>
<div class="page">
  <div class="content">
    <?php
      $dir    = '../DATA';
      $files = array_diff(scandir($dir), array('.', '..'));;

      foreach($files as $file) {
        echo '<div class="item" id="dir_' . $file . '">' . ucfirst($file) . '</div>';
      }
    ?>
    <div class="item new">+</div>
  </div>
</div>
</body>
</html>
