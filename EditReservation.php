<?php
//include_once('domain/Reservation.php');
//include_once('database/dbReservation.php');
include_once('database/dbinfo.php');

$mysqli = connect();

//$mysqli = NEW MySQLi('localhost', 'homebasedb', 'homebasedb', 'homebasedb');

$resultSet = $mysqli->query("SELECT * FROM dbchild");
$resultSet2 = $mysqli->query("SELECT * FROM dblocation");

//$test3 = $mysqli->query("SELECT COUNT(id) FROM dbchild WHERE first_name = 'Jerry'");
?>
<!--
<select name= "children">
-->
</select>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <form action="EditReservation.php" method="post">
    <input type="hidden" name="check" value="Submit">
    <div class="title">Edit Reservation</div>
    <div class="content">
	<div class="user-details">
            <div class="input-box">
            <span class="details">Location</span>
            <span class="required"></span>
            <select id="Location" name='location' required>
		<option hidden="" disabled="disabled" selected="selected" value="">Select Location</option>
		<?php
		while ($rows = $resultSet2->fetch_assoc())
		{
			$name = $rows['name'];
			echo "<option value='$name'>$name</option>";
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
		<option hidden="" disabled="disabled" selected="selected" value="">Select Child</option>
		<?php
		while ($rows = $resultSet->fetch_assoc())
		{
			$child_name = $rows['first_name'];
			$child_last_name = $rows['last_name'];
			echo "<option value='$child_name $child_last_name'>$child_name $child_last_name</option>";
		}
		?>
<!--
                <option hidden="" disabled="disabled" selected="selected" value="">Select Child Profile</option>
                <option value="test5">Barry</option>
                <option value="child">Tim</option>
		<option value="test6">James</option>
-->
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
			$tomorrow = date("m/d/y", strtotime("+1 days"));
			$day_after_tomorrow = date("m/d/y", strtotime("+2 days"));

			echo "<option value='$tomorrow'>$tomorrow</option>";
			echo "<option value='$day_after_tomorrow'>$day_after_tomorrow</option>";
		?>
<!--
		<option value="test7">3/31/2022</option>
		<option value="date">4/1/2022</option>
-->
            </select>
            <span class="select_arrow">
            </span>
            </div>
            <div class="input-box">
            <span class="details">Time</span>
            <span class="required"></span>
            <select id="Time" name="time" required>
		<option hidden="" disabled="disabled" selected="selected" value="">Select Time Slot</option>
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

			foreach($options as $key=>$val){
				echo "<option value='$val'>$val</option>";
			}
?>
<!--
		<option value="18">6:00 pm</option>
                <option value="19">7:00 pm</option>
		<option value="20">8:00 pm</option>
-->
            </select>
            <span class="select_arrow">
            </span>
            </div>
        </div>
        <div class="submit-button">
          <input type="submit" name="_submit_check" value="Edit Reservation">
	     <form action="CreateReservation.php" method="post">
          </form>
      </div>
      </div>
	  <ul class="topnav">
        <li><a class="dark" href="index.php">Home</a></li>
        <li><a class="gray" href="CreateReservation.php">Create Reservation</a></li>
        <li><a class="active" href="EditReservation.php">Edit Reservation</a></li>
        <li><a class="dark" href="ViewMyChildren.php">View Children Info</a></li>
        <li><a class="gray" href="CreateNewChild.php">Create New Child</a></li>
        <li><a class="dark" href="EditChild.php">Edit Child</a></li>
        <li class="right"><a class="gray" href="logout.php">Sign Out</a></li>
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
		$id = $child_split[0] . $email_final;

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

			$final_result = "INSERT INTO dbreservation (id, count, child_first, child_last, location, date, time, guardian_email, status) VALUES ('$id', '$count', '$child_split[0]', '$child_split[1]', '$location', '$date', '$time', '$email_final', '0')";

			if($mysqli->query($final_result) === TRUE){
				echo "You have successfully reserved a slot at $location for $child_split[0] $child_split[1] on $date at $time.";
			}
			else {
				//for bug checking
				echo "invalid data passed";
			}
		}
	}
	$mysqli->close();
?>
</div>
</body>
</html>
