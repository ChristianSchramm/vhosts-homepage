<?php 

// Computername
$computer = "artdeco.hob";

// Array mit Projektname und port
$hosts = array(
  "vvo-website" => "8033",
  "lidl-express" => "8030"
);

?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Markus' Projekte</title>
</head>

<style>

  body {
    background: #fff;
    font-family: Arial, sans-serif;
  }
  .main {
    width: 960px;
    margin: 0 auto;
  }
</style>
<body>

  <div class="main">
    <h1 class="heading level1">Markus' Projekte</h1>
    <ul class="list">
      <?php 
        foreach($hosts as $key=>$value) {
          echo "<li><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
        } 
      ?>
    </ul>
  </div>
    
  </ul>
</body>
</html>