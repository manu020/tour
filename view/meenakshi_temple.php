<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Meenakshi temple</title>
</head>
<body style="background-color: #F8EFBA;">

	<div class="container" style="margin: auto;">
		<center>
			<h2>Tour to Meenakshi Temple</h2><br>

			<div class="row" >
				<div class="col-xs-12" style="width: 100%;">
					<div id="demo" class="carousel slide" data-ride="carousel" >
  						<div class="carousel-inner" style="width: 70%;height: 400px;border: 2px solid orange; border-radius: 4px;">
    						<div class="carousel-item active">
      							<img src="images/menakshi1.jpg" alt="Meenakshi Temple" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/menakshi2.jpg" alt="Meenakshi Temple" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/menakshi3.jpg" alt="Meenakshi Temple" >
    						</div>
  						</div>
					</div>
				</div>
			</div><br>

			<h3>Overview</h3>
			<p>One of the best temple to visit is Meenakshi Temple also referred to as Meenakshi Amman Temple or Meenakshi Sundareshwarar Temple  is a historic Hindu temple located on the southern bank of the Vaigai River in the temple city of Madurai, Tamil Nadu.</p><br>

			<h3>Plan</h3>
			<div id="accordion">
    			<div class="card ">
      				<div class="card-header bg-warning">
        				<a class="card-link text-dark" data-toggle="collapse" href="#collapseOne">
          					<b>ARRIVAL</b>
        				</a>
      				</div>
      				<div id="collapseOne" class="collapse show" data-parent="#accordion">
        				<div class="card-body">
          					Upon your arrival to Chennai airport, our representative will receive and assist you for a smooth hotel check-in. After relaxing a while, start the day as per the schedule.
        				</div>
      				</div>
    			</div>
    			<div class="card">
      				<div class="card-header bg-warning">
        				<a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseTwo">
        					<b>SCHEDULE</b> 
      					</a>
      				</div>
      				<div id="collapseTwo" class="collapse" data-parent="#accordion">
        				<div class="card-body">
          					Our representative wil take you to the Meenakshi Temple. Start the day by exploring the various historic facts of Meenakshi Temple located in Madhurai. Explore some of the wonders of this temple and also our representative wil take you to some of the best temples around. Rest of the day is at your leisure.  
      				</div>
    			</div>
    			<div class="card">
      				<div class="card-header bg-warning">
        				<a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseThree">
          					<b>DEPARTURE</b>
        				</a>
      				</div>
      			<div id="collapseThree" class="collapse" data-parent="#accordion">
        			<div class="card-body">
          				Based on your departure schedule, you can either plan your drive to visit Shopping Mall and buy souvenirs for your family and friends. Later on, you can resume your return journey. Tour Ends with happy memories!
        			</div>
      			</div>
    		</div><br>

			<button type="button" class="btn btn-success btn-block" data-toggle="collapse" data-target="#inc" >
				<span class="button-toggler-icon"></span>
				<b>INCLUSIVES</b>
			</button>
  			<div id="inc" class="collapse" style="text-align: left;">
  				<ul>
  					<li>Arrival and Departure assistance at the Airport/Railway station</li>
  					<li>Daily Breakfast at Hotels</li>
  					<li>Vehicles for all Transfers & Sight seeing as per the plan</li>
  					<li>All government related taxes</li>
  				</ul>
  			</div><br>
  			<button type="button" class="btn btn-success btn-block" data-toggle="collapse" data-target="#exc"><b>EXCLUSIVES</b></button>
  			<div id="exc" class="collapse" style="text-align: left;">
  				<ul>
  					<li>Flight or Train Fare tickets</li>
  					<li>Entrance Fee at the monuments and sight seeing</li>
  					<li>Personal expenses such as telephone, laundry bills etc</li>
  					<li>Any additional activities</li>
  				</ul>
  			</div><br>
		</center>
	</div>

</body>
</html>
<?php
include 'footer.php';
?>