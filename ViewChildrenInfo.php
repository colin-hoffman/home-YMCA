<?php
include_once('database/dbinfo.php');
$mysqli = connect();
$resultSet = $mysqli->query("SELECT * FROM dbchild");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetForm.css">
    <title>View Children Info</title>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Allergies</th>
                <th>Guardian Phone Number</th>
                <th>Guardian Email</th>

            </t>
            <?php
                while ($rows = $resultSet->fetch_assoc()) {
            ?>
                <tr>
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
        <li><a class="gray" href="http://localhost/home-YMCA/CreateReservation.php">Sign In Children</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/EditReservation.php">Sign Out Children</a></li>
        <li><a class="active" href="http://localhost/home-YMCA/CreateNewChild.php">View Children Info</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/EditChild.php">Sign Out</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
            </div>