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
							<li><a href="contact.php">Contact</a></li>
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
				<div class="jumbotron">
					<center><h1>Now Create your CV</h1>
					<p>Fill in all the forms</p>
					

				</div>

				<div class="alert alert-success">
 					<h2>Personal Details</h2>
				</div>
				
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<form class="form-horizontal" action="Display.php" method="GET">
								

								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="name" placeholder="Enter name"/>
									</div>

								</div>



								

								<div class="form-group">
									<label for="Surname" class="col-sm-2 control-label">Surname</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="surname" placeholder="Enter Surname.."/>
									</div>

								</div>


								<div class="form-group">
									<label for="DOB" class="col-sm-2 control-label">D.O.B</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="dob" placeholder="Enter date of birth"/>
									</div>

								</div>


								<div class="form-group">
									<label for="nationality" class="col-sm-2 control-label">Nationality</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="nationality" placeholder="Enter Nationality"/>
									</div>

								</div>


								<div class="form-group">
									<label for="ID number" class="col-sm-2 control-label">ID number</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="id number" placeholder="Enter Identity Number.."/>
									</div>

								</div>


								<div class="form-group">
									<label for="health" class="col-sm-2 control-label">Health</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control"  name="health" placeholder="Enter Health"/>
									</div>

								</div>



								<div class="form-group">
									<label for="Present occupation" class="col-sm-2 control-label">Present occupation</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="ccupation" placeholder="Enter Present Occupation"/>
									</div>

								</div>


								<div class="form-group">
									<label for="Address" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-5">
									<textarea class="form-control"  rows="4" name="address" placeholder="Enter Address"/></textarea>
									</div>

								</div>


								<div class="form-group">
									<label for="telephone" class="col-sm-2 control-label">Telephone</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="telephone"placeholder="Enter telephone"/>
									</div>

								</div>


								<div class="form-group">
									<label for="cell number" class="col-sm-2 control-label">Cell Number</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="cell number" placeholder="Enter Cell Number"/>
									</div>

								</div>


								


								<div class="form-group">
									<label for="E-mail" class="col-sm-2 control-label">E-mail</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="email" placeholder="Enter E-mail"/>
									</div>

								</div>



								


								<div class="form-group">
									<label for="home language" class="col-sm-2 control-label">Home language</label>
									<div class="col-sm-5">
									<input type ="text" class="form-control" name="home language" placeholder="Enter home language"/>
									</div>

								</div>


								<div class="form-group">
									<label for="other language" class="col-sm-2 control-label">Other Language</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="3" name="other language" placeholder="Enter other language"/></textarea>
									</div>

								</div>


								<div class="alert alert-success">

								<h1>Academic Details</h1>
								</div>

								



								<div class="form-group">
									<label for="Matricu" class="col-sm-2 control-label">Matriculation</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="20" name="matric"  placeholder="Enter Materic detials,school name ,year,certificate,Subject and grade.....with your senior School details"/></textarea>
									</div>
								</div>


								<div class="form-group">
									<label for="senior" class="col-sm-2 control-label">Senior High</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="15" name="senior"  placeholder="Enter your senior school details"/></textarea>
									</div>
								</div>



								<div class="form-group">
									<label for="high" class="col-sm-2 control-label">High Education</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="15" name="high"  placeholder="Enter your high education details e.g,year,diploma,subjects and name of institute"/></textarea>
									</div>
								</div>



								<div class="form-group">
									<label for="activities" class="col-sm-2 control-label">High eductaion Activities and achievements</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="15" name="activities" placeholder="Enter your activties and achievements"/></textarea>
									</div>
								</div>




								<div class="form-group">
									<label for="certificate" class="col-sm-2 control-label">certificate courses</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="15" name="certificate"  placeholder="Enter your certificate cousres e.g 
									. year,institution,course etc.."/></textarea>
									</div>
								</div>

								<div class="form-group">
									<label for="employmet" class="col-sm-2 control-label">Employment Experience</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="15" name="employment" placeholder="Enter your Employment Experience  e.g 
									where you are currently working,duties and years"/></textarea>
									</div>
								</div>




								<div class="form-group">
									<label for="Developed Ability" class="col-sm-2 control-label">Developed Abilities</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="12" name="developed ability"  placeholder="Developed Abilities"/></textarea>
									</div>
								</div>



								<div class="form-group">
									<label for="Hobbies" class="col-sm-2 control-label">Your Hobbies/Interests</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="15" name="hobbies" placeholder="Enter your hobbies /interests"/></textarea>
									</div>
								</div>



								<div class="form-group">
									<label for="Referees" class="col-sm-2 control-label">Referees</label>
									<div class="col-sm-5">
									<textarea class="form-control" rows="16" name="referees" placeholder="Enter your referees"/></textarea>
									</div>
								</div>

								

								<center><button class="btn btn-primary btn-small">Display</button>
   								</center>     
									<br>
									<br>



									</div>

								</div>



							</form>

							

						</div>

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
