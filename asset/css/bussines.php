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
      body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
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