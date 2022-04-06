<?php
include_once('database/dbinfo.php');
$mysqli = connect();
$resultSet1 = $mysqli->query("SELECT * FROM dbreservation");
$resultSet2 = $mysqli->query("SELECT * FROM dbpersons");
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $("#form1 #select-all").click(function() {
        $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
});
</script>

<script>
$(document).ready(function() {
    $("#form2 #select-all").click(function() {
        $("#form2 input[type='checkbox']").prop('checked', this.checked);
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
    <div class="smaller-container">
	
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
                while ($rows = $resultSet1->fetch_assoc()) {
            ?>
                <tr>
                    <td><input type='checkbox'></td>
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
    </div>
    <br>
    <div class="smaller-container-right">
    <div class="content">
	<div class="user-details">
        <form id="form2" method="POST">
        <table border="1" cellpadding="5" cellspacing="0">
            <t>
                <th><input type="checkbox" id="select-all"/></th>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>State</th>
            </t>
            <?php
                while ($rows = $resultSet2->fetch_assoc()) {
            ?>
                <tr>
                    <td><input type='checkbox'></td>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['first_name']; ?></td>
                    <td><?php echo $rows['last_name']; ?></td>
                    <td><?php echo $rows['city']; ?></td>
                    <td><?php echo $rows['state']; ?></td>
                </tr>
            <?php
                }
            ?>
        </table>
        </p>
    </div>
    </div>
</form>
    </div>
           
     