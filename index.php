<?php 
  require_once('config.php'); 
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Projekte <?php echo $name ?></title>
  <style>

    .iframe {
      height: 768px;
      width: 1024px;

      position: absolute;
      top: -260px;
      left: -390px;

      border: 1px solid #aaa;

      overflow: hidden;

      -webkit-transform: scale(0.24);
      -moz-transform: scale(0.24);
      -ms-transform: scale(0.24);
      -o-transform: scale(0.24);
      transform: scale(0.24);
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
      width: 980px;
      margin: 0 auto;
      background: #eee;
      padding: 50px;
      border: 1px solid #ccc;
    }

    .list {
      overflow: hidden;
    }

    li {
      
      position: relative;
      border: 1px solid #ccc;
      height: 230px;
      width: 250px;
      list-style: none;
      float: left;
      margin: 25px;
    }

    a:link,
    a:visited {
      padding: 5px;
      display: inline-block;
      color: #333;
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