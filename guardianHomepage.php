<?php
include_once('database/dbinfo.php');
$mysqli = connect();
$resultSet = $mysqli->query("SELECT * FROM dbreservation");
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
                <th><input type="checkbox" id="select-all"/></th>
                <th>Email Address</th>
                <th>Location</th>
                <th>Child</th>
                <th>Date</th>
                <th>Time</th>
            </t>
            <?php
                while ($rows = $resultSet->fetch_assoc()) {
            ?>
                <tr>
                    <td><input type='checkbox' name='check[]'></td>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['location']; ?></td>
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
        <li><a class="gray" href="http://localhost/home-YMCA/EditReservation.php">Edit Reservation</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/ViewMyChildren.php">View Children Info</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/CreateNewChild.php">Create New Child</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/EditChild.php">Edit Child</a></li>
        <li class="right"><a class="gray" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
            </div>