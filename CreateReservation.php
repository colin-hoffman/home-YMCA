<?php
session_start();
//include_once('domain/Reservation.php');
//include_once('database/dbReservation.php');
include_once('database/dbinfo.php');
include_once('guardianHomapage.php');

$mysqli = connect();

$email = $_SESSION['_id'];

$userEmail = $mysqli->query("SELECT email FROM dbpersons WHERE id='$email'");
$emailString = $userEmail->fetch_assoc();
$email = $emailString['email'];

$resultSet = $mysqli->query("SELECT * FROM dbchild WHERE guardian_email='$email'");
$resultSet2 = $mysqli->query("SELECT * FROM dblocation");

$passed_name = str_replace("_", " ", $_GET['name']);


if($_GET['name'] != NULL) {
	$resultSet3 = $mysqli->query("SELECT * FROM dbreservation WHERE id='$passed_name'");
	$result_format = $resultSet3->fetch_assoc();

	$edit_id = $result_format['id'];
	$edit_name_first = $result_format['child_first'];
	$edit_name_last = $result_format['child_last'];
	$edit_location = $result_format['location'];
	$edit_date = $result_format['date'];
	$edit_time = $result_format['time'];

}

//$test3 = $mysqli->query("SELECT COUNT(id) FROM dbchild WHERE first_name = 'Jerry'");
?>
<!--
<select name= "children">
-->
</select>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Create Reservation</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
<!--
    <form action="CreateReservation.php" method="post">
-->
    <input type="hidden" name="check" value="Submit">
	<form action"" method="post">
	<?php
	if($_GET['name'] == NULL) {
    		echo '<div class="title">Create Reservation</div>';
	} else {
		echo '<div class="title">Edit Reservation</div>';
	}
	?>
    <div class="content">
	<div class="user-details">
            <div class="input-box">
            <span class="details">Location</span>
            <span class="required"></span>
            <select id="Location" name='location' required>
		<?php
		if($_GET['name'] == NULL) {
			echo "<option hidden='' disabled='disabled' selected='selected' value=''>Select Location</option>";
			while ($rows = $resultSet2->fetch_assoc())
			{
				$name = $rows['name'];
				echo "<option value='$name'>$name</option>";
			}
		} else {
			echo '<option selected="selected" value="'.$edit_location.'">'.$edit_location.'</option>';
			while ($rows = $resultSet2->fetch_assoc()) {
				$name = $rows['name'];
				if($name != $edit_location) {
					echo "<option value='$name'>$name</option>";
				}
			}
		}
		?>
            </select>
            <span class="select_arrow">
            </span>
            </div>
            <div class="input-box">
	    
            <span class="details">Child</span>
            <span class="required"></span>
	    <select id="Child" name='child' required>
		<?php
		if($_GET['name'] == NULL) {
			echo '<option hidden="" selected="selected" value="">Select Child</option>';
			while ($rows = $resultSet->fetch_assoc())
			{
				$child_name = $rows['first_name'];
				$child_last_name = $rows['last_name'];
				echo "<option value='$child_name $child_last_name'>$child_name $child_last_name</option>";
			}
		} else {
			echo '<option selected="selected" value="' . $edit_name_first . ' ' . $edit_name_last .'">' . $edit_name_first . ' ' . $edit_name_last . '</option>';
			while ($rows = $resultSet->fetch_assoc()) {
				$child_name = $rows['first_name'];
				$child_last_name = $rows['last_name'];
				if($child_name != $edit_name_first && $child_last_name != $edit_name_last) {
					echo "option value='$child_name $child_last_name'>$child_name $child_last_name</option>";
				}
			}
		}
		?>
            </select>
            <span class="select_arrow">
            </span>
            </div>
            <div class="input-box">
            <span class="details">Date</span>
            <span class="required"></span>
            <select id="Date" name="day" required>
		<option hidden="" disabled="disabled" selected="selected" value="">Select Date</option>
		<?php
		if($_GET['name'] == NULL) {
			echo '<option hidden="" disabled="disabled" selected="selected" value="">Select Date</option>';
			$tomorrow = date("m/d/y", strtotime("+1 days"));
			$day_after_tomorrow = date("m/d/y", strtotime("+2 days"));
			
			echo "<option value='$tomorrow'>$tomorrow</option>";
			echo "<option value='$day_after_tomorrow'>$day_after_tomorrow</option>";
		} else {
			echo '<option selected="selected" value="'. $edit_date .'">'.$edit_date.'</option>';
			$tomorrow = date("m/d/y", strtotime("+1 days"));
			$day_after_tomorrow = date("m/d/y", strtotime("+2 days"));
			if ($tomorrow != $edit_date) {
				echo "<option value='$tomorrow'>$tomorrow</option>";
			}
			if ($day_after_tomorrow != $edit_date) {
				echo "<option value='$day_after_tomorrow'>$day_after_tomorrow</option>";
			}
		}
		?>
            </select>
            <span class="select_arrow">
            </span>
            </div>
            <div class="input-box">
            <span class="details">Time</span>
            <span class="required"></span>
            <select id="Time" name="time" required>
		<?php
			//this code needs to be moved to Location.php as a method once I find
			//out why you guys can't run this file with include statments.
			$slots = '30 mins';
			$startTime = strtotime('8:00');
			$endTime = strtotime('14:00');

			$format = '12';
			$setFormat = ($format == '12')?'g:i A':'G:i';
			$currentTime = time();

			$add = strtotime('+'.$slots, $currentTime);
			$difference = $add - $currentTime;

			$options = array();
			while($startTime < $endTime) {
				$options[] = date($setFormat, $startTime);
				$startTime += $difference;
			}
			$options[] = date($setFormat, $startTime);
			if($_GET['name'] == NULL) {
				echo '<option hidden="" disabled="disabled" selected="selected" value="">Select Time Slot</option>';
				foreach($options as $key=>$val){
					echo "<option value='$val'>$val</option>";
				}
			} else {
				echo '<option selected="selected" value="'. $edit_time.'">'.$edit_time.'</option>';
				foreach($options as $key=>$val) {
					if($val != $edit_time) {
						echo "<option value='$val'>$val</option>";
					}
				}
			}
?>
            </select>
            <span class="select_arrow">
            </span>
            </div>
        </div>
	<div class="submit-button">
	  <form method="get">
		<?php
		if($_GET['name'] == NULL) {
			echo '<input type="submit" name="_submit_check" value="Create Location">';
		} else {
			echo '<input type="submit" name="_submit_check" value="Edit Reservation">';
			echo '<div> &nbsp </div>';
			echo '<input type="submit" name="_delete" value="Delete Reservation">';
		}
		?>
		
          </form>
      </div>
      </div>
	  <ul class="topnav">
        <li><a class="dark" href="http://localhost/home-YMCA/index.php">Home</a></li>
        <li><a class="active" href="http://localhost/home-YMCA/CreateReservation.php">Create Reservation</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/ViewMyChildren.php">View Children Info</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/CreateNewChild.php">Create New Child</a></li>
        <li class="right"><a class="dark" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
</form> 
<?php
	if(isset($_POST['_submit_check'])) {
		
		//get child values
		$split = $_POST['child'];
		$child_split = explode(' ', $split);
		
		//get date and time
		$date = $_POST['day'];
		$time = $_POST['time'];
		
		//get location
		$location = $_POST['location'];
		
		//get count
		$count_rows = $mysqli->query("SELECT COUNT(id) FROM dbreservation WHERE date ='$date' AND time ='$time'");
		$count_format = $count_rows->fetch_assoc();
		$count = $count_format['COUNT(id)'];
		
		//get guardian email (temp.)
		$email = $mysqli->query("SELECT guardian_email FROM dbchild WHERE first_name = '$child_split[0]' AND last_name = '$child_split[1]'");
		$email_format = $email->fetch_assoc();
		$email_final = $email_format['guardian_email'];
		$id = $child_split[1] . $date . $time . $email_final;
		
		//Add check for reservation already existing
		$check_copy = $mysqli->query("SELECT * FROM dbreservation WHERE id = '$id' AND time ='$time' AND date ='$date' AND location = '$location'");
		
		//capacity check for locations
		$check_cap = $mysqli->query("SELECT * FROM dblocation WHERE name = '$location'");
		$check_format = $check_cap->fetch_assoc();
		$check_count_true = $check_format['capacity'];
		
		//first check for copy
	        if($check_copy->num_rows > 0) {
			echo "$child_split[0] $child_split[1] is already scheduled for $location on $date at $time.";

		//check capcity of location
		} else if($count + 1 > $check_count_true) {
			echo "There are no availible slots for $location on $date at $time.";

		//create reservation

		} else {
			//edit by deleting and creating new reservation
			if($_GET['name'] != NULL) {
				$reservation_remove = "DELETE FROM dbreservation WHERE id='$edit_id'";
				if($mysqli->query($reservation_remove) == TRUE) {
					$reservation_add = "INSERT INTO dbreservation (id, count, child_first, child_last, location, date, time, guardian_email) VALUES ('$id', '$count', '$child_split[0]', '$child_split[1]', '$location', '$date', '$time', '$email_final')";
					if($mysqli->query($reservation_add) == TRUE) {
						//navigate to home
						header("Refresh:0; url=http://localhost/home-YMCA/index.php");
					}
				
				}
			//not edting, just create reservation	
			} else {		
				$final_result = "INSERT INTO dbreservation (id, count, child_first, child_last, location, date, time, guardian_email) VALUES ('$id', '$count', '$child_split[0]', '$child_split[1]', '$location', '$date', '$time', '$email_final')"; 
				if($mysqli->query($final_result) === TRUE){
					header("Refresh:0; url=http://localhost/home-YMCA/index.php");
				}
			}

		}	
	}
	//code deletes from database if delete button is hit		
        else if(isset($_POST['_delete'])) {
			$delete_reservation ="DELETE FROM dbreservation WHERE id='$edit_id'";
			if($mysqli->query($delete_reservation) == TRUE) {
				header("Refresh:0; url=http://localhost/home-YMCA/index.php");
			}
	}
	$mysqli->close();		
?>
</div>
</body>
</html>
