<?php
  // Make number array
  $howMany = 2 ;

  for ($i = 1; $i <= $howMany; $i++) {
    $numbers[] = rand(10,100);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Number Maker</title>
    <style>
      .navbar{
    font-size: 15px !important;
    background-color: green;
    }
    .nav-link{
        margin-left: 10px;
    }
    .navbar .navbar-brand{
            color: white;
            margin-left: 80px;
    }
    .navbar .navbar-brand:hover{
            background-color: white;
    }
    .navbar .navbar-nav li a:hover{
            background-color: white;
        
    }
    #navbarSupportedContent > ul > li.nav-item.dropdown.show > div{
      background-color:greenyellow;
    }
    /* #navbarSupportedContent > ul > li.nav-item.dropdown.show > div{
      background-color: darkslategray;
    } */
    
    </style>
  </head>
  <body>
    <p class="numbers">
      <?php foreach($numbers as $num) : ?>
      <span><?php  ?></span>
      <?php endforeach ?>
    </p>
  </body>
</html>