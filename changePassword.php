<?php
include_once('database/dbinfo.php');
$mysqli = connect();
$email = $_SESSION['_id'];

$userEmail = $mysqli->query("SELECT email FROM dbpersons WHERE id='$email'");
$emailString = $userEmail->fetch_assoc();
$email = $emailString['email'];

//$resultSet = $mysqli->query("SELECT password FROM dbpersons WHERE guardian_email='$email'");

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<div class="container">
    <form action"" method="post">
        <div class="title">Change Password</div>
            <div class="content">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Current Password</span>
                        <span class="required"></span>
                        <input type="text" required>
                    </div>
                    <div class="input-box">
                        <span class="details">New Password</span>
                        <span class="required"></span>
                        <input type="text" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <span class="required"></span>
                        <input type="text" required>
                    </div>
                    </div>
          <div class="submit-button">
          <form action="generalHomepage.html" method="get">
            <input type="submit" value="Change Password">
          </form>
          <ul class="topnav">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a class="dark" href="CreateLocation.php">Create Reser</a></li>
        <li><a class="gray" href="#users">Create Users</a></li>
        <li><a class="dark" href="#ViewChildrenInfo">View Children Info</a></li>
        <li><a class="gray" href="personSearch.php"> Search People</a></li>
        <li><a class="dark" href="logout.php">Sign Out</a></li>
      </ul>
            </div>


            <?php
/* 	if(isset($_POST['_submit_check'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


		//Check for password being in use
		$check_copy = $mysqli->query("SELECT email, password FROM dbpersons WHERE email = '$email' AND password = '$password'");

		//first check for copy
	        if($check_copy->num_rows > 0) {
			echo "$password has already been used for $email.";

		//Change Password
		} else {

			$final_result = "UPDATE dbreservation SET password = $newpassword WHERE email = $email")

			if($mysqli->query($final_result) === TRUE){
				echo "You have successfully changed your password"; */
