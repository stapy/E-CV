<?php
	
	echo "<center><h1><u>Curriculm vitae</u></h1></center>";

	echo "<h3><u>Personal Detials</ul></h3>";
	


	if ( isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['dob']) && isset($_GET['nationality']) && isset($_GET['id number']) &&
		isset($_GET['health']) && isset($_GET['occupation']) && isset($_GET['address']) && isset($_GET['telephone']) && isset($_GET['cell number']) &&
		isset($_GET['email']) && isset($_GET['home language']) && isset($_GET['other language']) && isset($_GET['matric']) && isset($_GET['senior']) &&
		isset($_GET['high']) && isset($_GET['activities']) && isset($_GET['certificate']) && isset($_GET['employment']) && isset($_GET['developed ability']) && 
		isset($_GET['hobbies']) && isset($_GET['referees'])){

		 $name=htmlentities($_GET['name']);
		 $surname=htmlentities($_GET['surname']);
		 echo "Name : ".$name;
		 echo "Surname: ".$surname;
		
}else{

	//echo "the info being field in is incorrect";
}
		
	?>
