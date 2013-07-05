<?php 

// Dein Name
$name = "Markus";

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
  <title>Projekte <?php echo $name ?></title>
  <style>

    body {
      background: #fff;
      font-family: Arial, sans-serif;
    }
    .main {
      width: 500px;
      margin: 0 auto;
      background: #eee;
      padding: 50px;
    }

    li {
      margin-bottom: 10px;
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
    <h1 class="heading level1">Projekte <?php echo $name ?></h1>
    <ol class="list">
      <?php 
        foreach($hosts as $key=>$value) {
          echo "<li><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
        } 
      ?>
    </ol>
  </div>
    
  </ul>
</body>
</html>