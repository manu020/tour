<?php

	include 'header.php';

	if (isset($_POST["submit"])) { 
		$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("japujafar53198@gmail.com","My subject",$msg);
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>TOUR SITE</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <form action="mailto:japujafar53198@example.com" method="post" id="contact-form" enctype="text/plain">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        	<button type="submit" class="btn btn-primary text-right" name="submit" id="submit">Submit</button>
                        	<button type="reset" class="btn btn-primary text-right" name="reset" id="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>SLV Enterprise</p>
                    <p>Keisha complex</p>
                    <p>BH Road channappa extn</p>
                    <p>Nelamangala, 562123.</p>
                    <p>Email : thgowdatravels143@gmail.com</p>
                    <p>Tel: +91 7619649633 </p>

                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>