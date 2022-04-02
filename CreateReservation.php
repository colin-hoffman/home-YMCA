<?php
$mysqli = NEW MySQLi('localhost', 'homebasedb', '', 'homebasedb');

$resultSet = $mysqli->query("SELECT first_name, last_name FROM dbchild");
$resultSet2 = $mysqli->query("SELECT * FROM dblocation");
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
    <div class="title">Create Reservation</div>
    <div class="content">
        <div class="user-details">
            <div class="input-box">
            <span class="details">Location</span>
            <span class="required"></span>
            <select required>
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
	    <select name="child">
		<option hidden="" disabled="disabled" selected="selected" value="">Select Child</option>
		<?php
		while ($rows = $resultSet->fetch_assoc())
		{
			$child_name = $rows['first_name'];
			$child_last_name = $rows['last_name'];
			echo "<option value='$child_name'>$child_name $child_last_name</option>";
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
            <select id="Date" required>
		<option hidden="" disabled="disabled" selected="selected" value="">Select Date</option>
		<?php
			$tomorrow = date("m/d/y", strtotime("+1 days"));
			$day_after_tomorrow = date("m/d/y", strtotime("+2 days"));
			
			echo "<option>$tomorrow</option>";
			echo "<option>$day_after_tomorrow</option>";
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
            <select id="Time" required>
		<option hidden="" disabled="disabled" selected="selected" value="">Select Time Slot</option>
		<?php
			$resultSet3 = mysqli->query("SELECT start_time, end_time FROM dblocation WHERE name = '$name'");
			$resultSet3 = $resultSet3->fetch_assoc();
			$end_time = $resultSet3['end_time'];
			echo "<option value='$end_time'>$end_time</option>";
		?>
                <option value="test8">6:00 pm</option>
                <option value="test9">7:00 pm</option>
		<option value="test10">8:00 pm</option>
            </select>
            <span class="select_arrow">
            </span>
            </div>
        </div>
        <div class="submit-button">
          <input type="submit" value="Create Reservation">
             <form action="generalHomepage.html" method="get">
          </form>
      </div>
      </div>

      <ul class="topnav">
        <li><a class="active" href="#">Home</a></li>
        <li><a class="dark" href="#news">Edit Reservation</a></li>
        <li><a class="gray" href="#contact">View My Children</a></li>
        <li class="right"><a class="dark" href="#about">Sign Out</a></li>
      </ul>

       
</div>
</body>
</html>
