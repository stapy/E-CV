<html>
	<head>

		<title>Cv-Creator</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet"  href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
		<body>
			<div class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<a href="index.html" class="navbar-brand">Cv Creator</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="collapse navbar-collapse navHeaderCollapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="Cv.html">CV</a></li>
							<li><a href="Contact.php">Contact</a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media</a>
							<ul class="dropdown-menu">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Google+</a></li>

							</ul>
							</li>
						</ul>
					</div>	

				</div>

			</div>




			<div class="container">

					<div class="row">
						<div class="col-md-12">
							<form action="contact.php" class="form-horizontal" method="POST">

								<div class="alert alert-success">
								<h1>Contact</h1>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label" name="contact-name">Name</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" placeholder="Enter name"/>
									</div>

								</div>



								<div class="form-group">
									<label for="email" class="col-sm-2 control-label" name="contact-email">email</label>
									<div class="col-sm-5">
									<input type ="email" class="form-control" placeholder="Enter email"/>
									</div>

								</div>



								<div class="form-group">
									<label for="message" class="col-sm-2 control-label" name="contact-message">Message</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="10" placeholder="Enter Message"/></textarea>
									</div>

								</div>





								<div class="form-group">
									
									<div class="col-sm-offset-2 col-sm-6">
									<button type="submit" class="btn btn-danger">Submit</button>
									</div>

								</div>


			</form>
		</div>
			</div>
				</div>





			<div class="navbar navbar-default navbar-fixed-bottom">

				<div class="container">

					<p class="navbar-text pull-left">Create your CV the easy way</p>
					<a href="#" class="navbar-btn btn-danger btn pull-right">Subscribe on youtube</a>

				</div>



			</div>



			<script src="jquery.js"></script>
			<script src="js/bootstrap.js"></script>
		</body>

</html>


<?php

if(isset($_POST['contact-message']) && isset($_POST['contact-name']) && isset($_POST['contact-email'])){

	$contact_name=$_POST['$contact-name'];
	 $contact_email=$_POST['$contact-email'];
	 $contact_message=$_POST['$contact-message'];

	 if(!empty($contact_name) && !empty($contact_email) && !empty($contact_message)){

	 	$to="Ngoystavios@gmail.com";
	 	$subject="Contact submited";
	 	$body=$contact_message."\n".$contact_name;
	 	$headers='From :'.$contact_email;

	 	if(mail($to, $subject, $message,$headers)){
	 		echo "Thank you for contacting us we will get back to you ";
	 	}else{
	 		echo "An erro as occured during processing";
	 	}

	 }else{

	 	echo "All filed is requred to be inserted";
	 }


}



?>
