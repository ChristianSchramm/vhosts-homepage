<?php 
  require_once('config.php'); 
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Projekte <?php echo $name ?></title>
  <link rel="stylesheet" href="assets/css/main.css">
  <meta name="viewport" content="width: device-width, initial-scale=1">
</head>

<body>
  
  <main class="main">

    <section class="section section-main">
    
      <div class="inner">
        <h1 class="heading style1">Aktuelle Projekte: <?php echo $name ?></h1>
        <ol class="list-current">
          <?php 
            $max = 3;
            foreach($current_projects as $key=>$value) {
              if($max > 0) {
                echo "<li><iframe src=\"http://" . $computer . ":" . $value . "\" class=\"iframe\"></iframe><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
              }
              $max--;
            }
          ?>
        </ol>
      </div>
    </section>

    <section class="section">

      <div class="inner">
        <h2 class="heading style2">Abgeschlossene Projekte</h2>
        <ol class="list-older">
          <?php  
            foreach($older_projects as $key=>$value) {
              echo "<li><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
            }
          ?>
        </ol>
      </div>

    </section>

    <section class="section">

      <div class="inner">
        <h2 class="heading style2">Interne Projekte</h2>
        <ol class="list-older">
          <?php  
            foreach($internal_projects as $key=>$value) {
              echo "<li><a href=\"http://" . $computer . ":" . $value . "\">" . $key . "</a></li>";
            }
          ?>
        </ol>
      </div>

    </section>

  </main>

  <script src="assets/js/vendor/jquery.js"></script>
  <script src="assets/js/vhosts.js"></script>

</body>
</html>