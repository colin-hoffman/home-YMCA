<?php
session_start();
//include_once('domain/Reservation.php');
//include_once('database/dbReservation.php');
include_once('database/dbinfo.php');

$mysqli = connect();

$email = $_SESSION['_id'];

$userEmail = $mysqli->query("SELECT email FROM dbpersons WHERE id='$email'");
$emailString = $userEmail->fetch_assoc();
$email = $emailString['email'];

//$mysqli = NEW MySQLi('localhost', 'homebasedb', 'homebasedb', 'homebasedb');

$resultSet = $mysqli->query("SELECT * FROM dbchild");

$passed_name = str_replace("_"," ", $_GET['name']);
if($_GET['name'] != NULL) {
	$resultSet2 = $mysqli->query("SELECT * FROM dbchild WHERE id='$passed_name'");
	$result_format = $resultSet2->fetch_assoc();

	//get all values
	$edit_id = $result_format['id'];
	$first = $result_format['first_name'];
	$last = $result_format['last_name'];
	$birth = $result_format['birthday'];
	$all = $result_format['allergies'];
	$phone = $result_format['guardian_phone'];

}

?>
</select>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Create Child</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
    <?php
	if($_GET['name'] == NULL) {
		echo '<div class="title">Create Child</div>';
	} else {
		echo '<div class="title">Edit Child</div>';
	}
    ?>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
	  <form action="" method = "post">  
	    <span class="details">First Name</span>
              <span class="required"></span>
	    <?php		
		if($_GET['name'] == NULL) {
			echo '<input type="text" placeholder="Enter the first name" name="first_name" id="first_name" required>';
		} else {
			echo '<input type="text" value="'.$first.'" name="first_name" id="first_name" required>';	
		}
	   ?>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <span class="required"></span>
	    <?php
		if ($_GET['name'] == NULL){
			echo '<input type="text" placeholder="Enter the last name" name="last_name" id="last_name" required>';
		} else {
			echo '<input type="text" value="'.$last.'" name="last_name" id="last_name" required>';
		}
	   ?>
          </div>
          <div class="input-box">
            <span class="details">Birthday(MM-DD-YYYY)</span>
            <span class="required"></span>
	    <?php
		if ($_GET['name'] == NULL){
			echo '<input type="text" placeholder="Enter the birthday" name="birthday" id="birthday" required>';
		} else {
			echo '<input type="text" value="'.$birth.'" name="birthday" id="birthday" required>';
		}
		?>		
	  </div>
          <div class="input-box">
            <span class="details">Allergies</span>
            <span class="required"></span>
	    <?php
		if ($_GET['name'] == NULL){
			echo '<input type="text" placeholder="Enter any allergies" name="allergies" id="allergies" required>';
		} else {
			echo '<input type="text" value="'.$all.'" name="allergies" id="allergies" required>';
		}
	  ?>
          </div>
          <div class="input-box">
            <span class="details">Guardian Phone(XXX-XXX-XXXX)</span>
            <span class="required"></span>
	<?php
		if ($_GET['name'] == NULL){
			echo '<input type="text" placeholder="Enter the phone number of guardian" name="guardian_phone" id="guardian_phone" required>';
		} else {
			echo '<input type="text" value="'.$phone.'" name="guardian_phone" id="guardian_phone" required>';
		}
	?>
	  </div>         
        </div>
        <div class="submit-button">
          <form  method="get">
	<?php
	if ($_GET['name'] == NULL){
		echo '<input type="submit" name="_submit_check" value="Create Child">';
	} else {
		echo '<input type="submit" name="_submit_check" value="Edit Child">';

		echo '<div> &nbsp; </div>';
		echo '<input type="submit" name="_delete" value="Delete Child">';
	}
	?>
          </form>
      </div>
      </div>
	
      <ul class="topnav">
        <li><a class="dark" href="http://localhost/home-YMCA/index.php">Home</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/CreateReservation.php">Create Reservation</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/ViewMyChildren.php">View Children Info</a></li>
        <li><a class="active" href="http://localhost/home-YMCA/CreateNewChild.php">Create New Child</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/EditChild.php">Edit Child</a></li>
        <li class="right"><a class="dark" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
</form> 
<?php
	if(isset($_POST['_submit_check'])) {
		
//		//get child values
//		$split = $_POST['child'];
//		$child_split = explode(' ', $split);
		
		//get date and time
//		$date = $_POST['day'];
//		$time = $_POST['time'];
		
		//get location
//		$location = $_POST['location'];
		
		//get count
//		$count_rows = $mysqli->query("SELECT COUNT(id) FROM dbreservation WHERE date ='$date' AND time ='$time'");
//		$count_format = $count_rows->fetch_assoc();
//		$count = $count_format['COUNT(id)'];
		
		//get guardian email (temp.)
//		$email = $mysqli->query("SELECT guardian_email FROM dbchild WHERE first_name = '$child_split[0]' AND last_name = '$child_split[1]'");
//		$email_format = $email->fetch_assoc();
//		$email_final = $email_format['guardian_email'];
//		$id = $child_split[0] . $email_final;
		
		//Add check for reservation already existing
		//$check_copy = $mysqli->query("SELECT * FROM dbchild WHERE id = '$id' AND time ='$time' AND date ='$date' AND location = '$location'");
		
		//capacity check for locations
		//$check_cap = $mysqli->query("SELECT * FROM dblocation WHERE name = '$location'");
//		$check_format = $check_cap->fetch_assoc();
//		$check_count_true = $check_format['capacity'];
		
		//first check for copy
//	        if($check_copy->num_rows > 0) {
//			echo "$child_split[0] $child_split[1] is already scheduled for $location on $date at $time.";

		//check capcity of location
//		} else if($count + 1 > $check_count_true) {
//			echo "There are no availible slots for $location on $date at $time.";

		//create reservation
//		} else {
				
//			$final_result = "INSERT INTO dbreservation (id, count, child_first, child_last, location, date, time, guardian_email) VALUES ('$id', '$count', '$child_split[0]', '$child_split[1]', '$location', '$date', '$time', '$email_final')"; 

//			if($mysqli->query($final_result) === TRUE){
//				echo "You have successfully reserved a slot at $location for $child_split[0] $child_split[1] on $date at $time.";
//			}
//			else {
//				//for bug checking
//				echo "invalid data passed";
//			}
//		}	
		//	}
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$birthday = $_POST['birthday'];
		$allergies = $_POST['allergies'];
		$guardian_phone = $_POST['guardian_phone'];
		$guardian_email = $_POST['guardian_email'];
		$status = NULL;
		$id = $first_name.$guardian_email;

		$check_copy = $mysqli->query("SELECT * FROM dbchild WHERE id='$id'");

		if($_GET['name'] != NULL) {
	
			$child_remove = "DELETE FROM dbchild WHERE id='$edit_id'";
			if($mysqli->query($child_remove) == TRUE) {
				$create_child = "INSERT INTO dbchild (id, first_name, last_name, status, birthday, allergies, guardian_phone, guardian_email) VALUES ('$id', '$first_name', '$last_name', '$status', '$birthday', '$allergies', '$guardian_phone', '$email')";
				if($mysqli->query($create_child) == TRUE) {
					//echo "<div> &nbsp; </div>";
					//echo "Edited child information.";
					header("Refresh:0; url=http://localhost/home-YMCA/ViewMyChildren.php");
				}
			}	

		} else if($check_copy->num_rows >0) {
			echo '<div> &nbsp; </div>';
			echo "Cannot add $first_name $last_name, child already exists.";

		} else {
			$create_child = "INSERT INTO dbchild (id, first_name, last_name, status, birthday, allergies, guardian_phone, guardian_email) VALUES ('$id','$first_name', '$last_name', '$status', '$birthday', '$allergies', '$guardian_phone', '$email')";
			if($mysqli->query($create_child) == TRUE){
				//echo '<div> &nbsp; </div>';
				//echo "You have successfully created a new child profile.";
				header("Refresh:0; url=http://localhost/home-YMCA/ViewMyChildren.php");
			}

		}
	}
	else if(isset($_POST['_delete'])) {
		$delete_child = "DELETE FROM dbchild WHERE id='$edit_id'";

		if($mysqli->query($delete_child) == TRUE) {
			//echo "<div> &nbsp; </div>";
			//echo "Succesfully deleted child";
			header("Refresh:0; url=http://localhost/home-YMCA/ViewMyChildren.php");
		}
	}
	$mysqli->close();		
?>
</div>
</body>
</html>
