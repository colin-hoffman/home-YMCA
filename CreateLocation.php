<?php
//include_once('domain/Reservation.php');
//include_once('database/dbReservation.php');
include_once('database/dbinfo.php');

$mysqli = connect();

//$mysqli = NEW MySQLi('localhost', 'homebasedb', 'homebasedb', 'homebasedb');

$resultSet = $mysqli->query("SELECT * FROM dbchild");
$resultSet2 = $mysqli->query("SELECT * FROM dblocation");
$passed_name = str_replace("_", " ", $_GET['name']);

if($_GET['name'] != NULL) {
	$resultSet3 = $mysqli->query("SELECT * FROM dblocation WHERE name = '$passed_name'");
	$result_format = $resultSet3->fetch_assoc();

	$edit_name = $result_format['name'];
	$edit_start = $result_format['start_time'];
	$edit_end = $result_format['end_time'];
	$edit_cap = $result_format['capacity'];
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
    <title> Create Location</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
   <form action"" method="post">
	<?php
	if($_GET['name'] == NULL) {
    		echo '<div class="title">Create Location</div>';
	} else {
		echo '<div class="title">Edit Location</div>';
	}
	?>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Location Name</span>
	    <span class="required"></span>
<?php
		if($_GET['name'] == NULL) {
			echo '<input type="text" placeholder="Enter the Location Name" name="name" id="name" required>';
		} else {
			echo '<input type="text" placeholder="'. $edit_name .'" name="name" id="name" required>';
		}
	  ?>
          </div>
          <div class="input-box">
            <span class="details">Start Time</span>
	    <span class="required"></span>
	    <?php
		if($_GET['name'] == NULL) {
			echo '<input type="text" placeholder="Enter the start time of location" name="start" id="start" required>';
		} else {
			echo '<input type="text" placeholder="' . $edit_start. '" name="start" id="start" required>';
		}

	    ?>
          </div>
          <div class="input-box">
            <span class="details">Capacity</span>
	    <span class="required"></span>
	    <?php
		if($_GET['name'] == NULL) {	
             		echo '<input type="text" placeholder="Enter capacity of location" name="capacity" id="capacity" required>';
		} else {
			echo '<input type="text" placeholder="'. $edit_cap . '" name ="capacity" id="capacity" required>';
		}	
	    ?>
          </div>
          <div class="input-box">
            <span class="details">End Time</span>
	    <span class="required"></span>
	    <?php
		if($_GET['name'] == NULL) {
			echo '<input type="text" placeholder="Enter the end time of location" name="end" id="end" required>';
		} else {
			echo '<input type="text" placeholder="'. $edit_end .'" name="end" id="end" required>';
		}
	    ?>
          </div>
          
        </div>
        <div class="submit-button">
	  <form action="generalHomepage.html" method="get">
		<?php
		if($_GET['name'] == NULL) {
            		echo '<input type="submit" name="_submit_check" value="Create Location">';
		} else {
			echo '<input type="submit" name="_submit_check" value="Edit Location">';
		}
		?>
          </form>
      </div>
      </div>
    </form>
      <ul class="topnav">
        <li><a class="dark" href="http://localhost/home-YMCA/index.php">Home</a></li>
        <li><a class="active" href="http://localhost/home-YMCA/CreateLocation.php">Create New Location</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/EditLocation.php">Edit Location</a></li>
        <li><a class="dark" href="#users">Create Users</a></li>
        <li><a class="gray" href="#viewChildrenInfo">View Children Info</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/personSearch.php"> Search People</a></li>
        <li class="right"><a class="gray" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
</form> 
<?php
	if(isset($_POST['_submit_check'])) {
		$name = $_POST['name'];
		$cap = $_POST['capacity'];
		$start = $_POST['start'];
		$end = $_POST['end'];

		$check_copy = $mysqli->query("SELECT * FROM dblocation WHERE name = '$name'");
		if ($_GET['name'] != NULL) {
			$location_remove = "DELETE FROM dblocation WHERE name ='$edit_name'";
			if($mysqli->query($location_remove) == TRUE) {
				$location_add = "INSERT INTO dblocation (id, name, start_time, end_time, capacity) VALUES (0, '$name', '$start', '$end', '$cap')";
				if($mysqli->query($location_add) == TRUE) {
					echo "Edited location succesfully.";
				}
			}
		} else if($check_copy->num_rows > 0) {
			echo "Cannot add $name, location already exists.";
		} else {
			$location_add = "INSERT INTO dblocation (id, name, start_time, end_time, capacity) VALUES (0, '$name', '$start', '$end', '$cap')";
			if($mysqli->query($location_add) == TRUE){
				echo "You have succesfully created a new location.";
			}
		}
	}
	$mysqli->close();		
?>
</div>
</body>
</html>
