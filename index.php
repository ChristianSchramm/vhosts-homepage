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
    }

    .main {
      width: 890px;
      margin: 0 auto;
      background: #eee;
      padding: 50px;
      border: 1px solid #ccc;
    }

    .list {
      overflow: hidden;
    }

    li {
      margin-bottom: 10px;
      position: relative;
      border: 1px solid #ccc;
      height: 230px;
      width: 250px;
      list-style: none;
      float: left;
      margin: 0 0 0 25px;
    }

    li:first-child {
      margin: 0;
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
        foreach($hosts as $key=>$value) {
          echo "<li><iframe src=\"http://" . $computer . ":" . $value . "\" class=\"iframe\"></iframe><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
        } 
      ?>
    </ol>
  </div>

</body>
</html>