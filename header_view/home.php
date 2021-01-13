<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tour >> Home</title>	
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<style type="text/css">
  	.carousel-inner img {
    	width: 100%;
    	height: 500px;
  	}
  	</style>
</head>
<body>
	<div class="main-container" >
		<div class="row" >
			<div class="col-xs-2" style="width: 100%;">
				<div id="demo" class="carousel slide" data-ride="carousel">
  					<ul class="carousel-indicators">
    					<li data-target="#demo" data-slide-to="0" class="active"></li>
    					<li data-target="#demo" data-slide-to="1"></li>
    					<li data-target="#demo" data-slide-to="2"></li>
  					</ul>
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img src="images/nature1.jpg" alt="Los Angeles" >
      						<div class="carousel-caption">
        						<h3>Los Angeles</h3>
        						<p>We had such a great time in LA!</p>
      						</div>   
    					</div>
    					<div class="carousel-item">
      						<img src="images/nature2.jpg" alt="Chicago" >
      						<div class="carousel-caption">
        						<h3>Chicago</h3>
        						<p>Thank you, Chicago!</p>
      						</div>   
    					</div>
    					<div class="carousel-item">
      						<img src="images/nature3.jpg" alt="New York" >
      						<div class="carousel-caption">
        						<h3>New York</h3>
        						<p>We love the Big Apple!</p>
      						</div>   
    					</div>
  					</div>
  					<a class="carousel-control-prev" href="#demo" data-slide="prev">
    					<span class="carousel-control-prev-icon"></span>
  					</a>
  					<a class="carousel-control-next" href="#demo" data-slide="next">
    					<span class="carousel-control-next-icon"></span>
  					</a>
				</div>
			</div>

			<div class="col-xs-2" style="background-color:white;width: 100%;">
				<h1>Our services goes here</h1>
				
			</div>

			<div class="col-xs-2" style="background-color:blue;width: 100%;">
				<h1>Our services goes here</h1>
			</div>

			<div class="col-xs-2" style="background-color:grey;width: 100%;">
				<h1>Why chose us goes here</h1>
			</div>

			<div class="col-xs-2" style="background-color:black;width: 100%;">
				<h1>Reviews goes here</h1>
			</div>

			<div class="col-xs-2" style="background-color:orange;width: 100%;">
				<h1>Daily rides,user count,KM travelled and no of cars goes here</h1>
			</div>

		</div>
	</div>

</body>
</html>
<?php
include 'footer.php';
?>