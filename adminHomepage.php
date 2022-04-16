<?php
include_once('database/dbinfo.php');
$mysqli = connect();
$resultSet = $mysqli->query("SELECT * FROM dblocation");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
    <div class="title">Locations</div>
    <div class="content">
	<div class="user-details">

        <form id="form1" method="POST">
        <table border="1" cellpadding="5" cellspacing="0">
            <t>
                <th>Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Capacity</th>

            </t>
            <?php
                while ($rows = $resultSet->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['start_time']; ?></td>
                    <td><?php echo $rows['end_time']; ?></td>
                    <td><?php echo $rows['capacity']; ?></td>
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
        <li><a class="dark" href="http://localhost/home-YMCA/CreateLocation.php">Create Location</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/EditLocation.php">Edit Location</a></li>
        <li><a class="dark" href="#contact">Create Users</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
            </div>