<?php
include_once('database/dbinfo.php');
$mysqli = connect();

$tomorrow = date("m/d/y", strtotime("+1 days"));

$resultSet = $mysqli->query("SELECT * FROM dbreservation WHERE date='$tomorrow'");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetForm.css">
    <title>Watcher Homepage</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
    <div class="title">(Tomorrow) Reservation Info</div>
    <div class="content">
	<div class="user-details">

        <form id="form1" method="POST">
        <table border="1" cellpadding="5" cellspacing="0">
            <t>
                <th>Child First &nbsp</th>
                <th>Child Last &nbsp</th>
                <th>Location &nbsp</th>
                <th>Date &nbsp</th>
                <th>Time &nbsp</th>
                <th>Guardian Email</th>

            </t>
            <?php
                while ($rows = $resultSet->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['child_first']; ?></td>
                    <td><?php echo $rows['child_last']; ?></td>
                    <td><?php echo $rows['location']; ?></td>
                    <td><?php echo $rows['date']; ?></td>
                    <td><?php echo $rows['time']; ?></td>
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
        <li><a class="active" href="index.php">Home</a></li>
        <li><a class="dark" href="SignInChildren.php">Sign In Children</a></li>
        <li><a class="dark" href="SignOutChildren.php">Sign Out Children</a></li>
        <li><a class="gray" href="ViewChildrenInfo.php">View Children Info</a></li>
        <li><a class="dark" href="logout.php">Sign Out</a></li>
      </ul>
            </div>
