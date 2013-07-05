<?php 
  require_once('config.php'); 
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Projekte <?php echo $name ?></title>
  <style>

    .iframe {
      -moz-transform: scale(0.24);
      -ms-transform: scale(0.24);
      -o-transform: scale(0.24);
      -webkit-transform: scale(0.24);
      border: 1px solid #aaa;
      height: 768px;
      left: -390px;
      overflow: hidden;
      position: absolute;
      top: -250px;
      transform: scale(0.24);
      width: 1024px;
    }

    body {
      background: #fff;
      font-family: Arial, sans-serif;
    }

    .heading {
      margin: 0 0 25px 0;
      text-align: center;
    }

    .main {
      background: #eee;
      border: 1px solid #ccc;
      margin: 0 auto;
      padding: 50px;
      width: 980px;
    }

    .list {
      overflow: hidden;
    }

    li {
      border: 1px solid #ccc;
      float: left;
      height: 230px;
      list-style: none;
      margin: 25px;
      position: relative;
      width: 250px;
    }

    a:link,
    a:visited {
      color: #333;
      display: block;
      font-weight: bold;
      padding: 10px;
      text-align: center;
      text-decoration: none;
    }

    a:active,
    a:hover,
    a:focus {
      background: #fff;
      text-decoration: underline;
    }

  </style>
</head>

<body>

  <div class="main">
    <h1 class="heading level1">Projekte: <?php echo $name ?></h1>
    <ol class="list">
      <?php 
        $max = 9;
        foreach($hosts as $key=>$value) {
          if($max > 0) {
            echo "<li><iframe src=\"http://" . $computer . ":" . $value . "\" class=\"iframe\"></iframe><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
          }
          $max--;
        }
      ?>
    </ol>
  </div>

</body>
</html>