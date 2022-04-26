<?php
session_start();
include_once('database/dbinfo.php');
$mysqli = connect();
$email = $_SESSION['_id'];
$useremail = $mysqli->query("SELECT email from dbpersons WHERE id='$email'");
$emailstring = $useremail->fetch_assoc();
$email = $emailstring['email'];
$resultSet1 = $mysqli->query("SELECT * FROM dbchild WHERE guardian_email='$email'");
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetForm.css">
    <title>View My Children</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
    <div class="title">Children Info</div>
    <div class="content">
	<div class="user-details">

        <form id="form1" method="POST">
        <table border="1" cellpadding="5" cellspacing="0">
	    <t>
		<th>Edit &nbsp</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Allergies</th>
                <th>Guardian Phone Number</th>
                <th>Guardian Email</th>

            </t>
            <?php
                while ($rows = $resultSet1->fetch_assoc()) {
            ?>
		<tr>
		    <?php echo '<td><a href="http://localhost/home-YMCA/CreateNewChild.php?name='.$rows['id'].'"> edit </td>' ?>
                    <td><?php echo $rows['first_name']; ?></td>
                    <td><?php echo $rows['last_name']; ?></td>
                    <td><?php echo $rows['birthday']; ?></td>
                    <td><?php echo $rows['allergies']; ?></td>
                    <td><?php echo $rows['guardian_phone']; ?></td>
                    <td><?php echo $rows['guardian_email']; ?></td>
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
        <li><a class="dark" href="http://localhost/home-YMCA/index.php">Home</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/CreateReservation.php">Create Reservation</a></li>
        <li><a class="active" href="http://localhost/home-YMCA/viewMyChildren.php">View My Children</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/CreateNewChild.php">Create New Child</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
            </div>
</html>

            
