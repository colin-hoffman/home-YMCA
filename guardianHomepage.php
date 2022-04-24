<?php
include_once('database/dbinfo.php');
$mysqli = connect();
$email = $_SESSION['_id'];

$userEmail = $mysqli->query("SELECT email FROM dbpersons WHERE id='$email'");
$emailString = $userEmail->fetch_assoc();
$email = $emailString['email'];

$resultSet = $mysqli->query("SELECT * FROM dbreservation WHERE guardian_email='$email'");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $("#form1 #select-all").click(function() {
        $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
});
</script>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
    <div class="title">My Reservations</div>
    <div class="content">
	<div class="user-details">

        <form id="form1" method="POST">
        <table border="1" cellpadding="5" cellspacing="0">
            <t>
                <th>Edit &nbsp</th>
		<th>Location &nbsp</th>
		<th>First &nbsp</th>
                <th>Last &nbsp</th>
                <th>Date &nbsp</th>
		<th>Time &nbsp</th>
            </t>
	    <?php
                while ($rows = $resultSet->fetch_assoc()) {
            ?>
                <tr>
                <?php echo '<td><a href="http://localhost/home-YMCA/CreateReservation.php?name=' . $rows['id'] . '"> edit </td>'?>
		    <td><?php echo $rows['location']; ?></td>
		    <td><?php echo $rows['child_first']; ?></td>
                    <td><?php echo $rows['child_last']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td><?php echo $rows['time']; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
        </p>
       
            </div>
            </div>        
    </form>
    <ul class="topnav">
        <li><a class="active" href="http://localhost/home-YMCA/index.php">Home</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/CreateReservation.php">Create Reservation</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/ViewMyChildren.php">View Children Info</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/CreateNewChild.php">Create New Child</a></li>
        <li class="right"><a class="dark" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
            </div>
