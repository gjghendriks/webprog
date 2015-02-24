<?php
// this is to check and send the register form

$title = $initials = $initialsErr = $last_name = $last_nameErr = $attending = $email = $password = $passwordErr = "";
//This is not my code
//Source: http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete
//Also the preg_match functions on lines  and  are from here
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(!empty($_POST['title'])){//Form is being sent

	//This goes because there is always a valid value
	$title = $_POST["title"];
	
	$initials = test_input($_POST["initials"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$initials)) {
		$initialsErr = "Only letters and white space allowed"; 
	}
	
	$last_name = test_input($_POST["last_name"]);
	// check if name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
		$last_nameErr = "Only letters and white space allowed"; 
	}

	//These go because there is always a valid value
	$attending = $_POST["attending"];
	$email = $_POST["email"];
	
	if(true){
		$passwordErr ="dkaljs";
	}

	if($last_nameErr or $initialsErr or $passwordErr != ""){
		//There is an error somewhere so we cannot submit
		echo "Erroorororo";
		
	}
	else{
		//No errors, we can submit to database and clear the form
		
	}
}





?>