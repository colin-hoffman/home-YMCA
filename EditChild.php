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
    <title>Edit Child</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
    <div class="title">Edit Child</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter the first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter the last name" required>
          </div>
          <div class="input-box">
            <span class="details">Birthday(MM-DD-YYYY)</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter the birthday" required>
          </div>
          <div class="input-box">
            <span class="details">Allergies</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter any allergies" required>
          </div>
          <div class="input-box">
            <span class="details">Guardian Phone(XXX-XXX-XXXX)</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter the phone number of guardian" required>
          </div>
          <div class="input-box">
            <span class="details">Guardian Email</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter email of guardian" required>
          </div>

        </div>
        <div class="submit-button">
          <form action="generalHomepage.html" method="get">
            <input type="submit" value="Create Child">
          </form>
      </div>
      </div>

      <ul class="topnav">
        <li><a class="dark" href="index.php">Home</a></li>
        <li><a class="gray" href="CreateReservation.php">Create Reservation</a></li>
        <li><a class="dark" href="ViewMyChildren.php">View Children Info</a></li>
        <li><a class="active" href="CreateNewChild.php">Create New Child</a></li>
        <li><a class="gray" href="EditChild.php">Edit Child</a></li>
        <li class="right"><a class="dark" href="logout.php">Sign Out</a></li>
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

			$final_result = "INSERT INTO dbreservation (id, count, child_first, child_last, location, date, time, guardian_email) VALUES ('$id', '$count', '$child_split[0]', '$child_split[1]', '$location', '$date', '$time', '$email_final')";

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
