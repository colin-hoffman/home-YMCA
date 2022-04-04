<?php
include_once('dbinfo.php');
if (isset($_POST['something'])) {
    foreach($_POST['check'] AS $value) {
        $stmnt = $db->prepare();
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#form1 #select-all").click(function() {
        $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
});
</script>

<form id="form1" method="POST">
<!--
<link rel="stylesheet" href="stylesheetForm.css">
-->
<table border="1" cellpadding="5" cellspacing="0">
    <th><input type="checkbox" id="select-all"/></th>
    <th>Location</th>
    <th>Child</th>
    <th>Date</th>
    <th>Time</th>
    <!-- Need proper select statement for reservations table below
    <?php
    
    $stmnt -> $db->prepare("SELECT * FROM tablename where STATEMENTS THAT MATCH THE USER ARE TRUE");
    $stmnt -> execute();
    while ($row = $stmnt-> fetch()) {
        $l = $row['location'];
        $c = $row['child'];
        $d = $row['date'];
        $t = $row['time'];
        $id = $row['id'];
        echo "<tr><td><input type='checkbox' name='check[]' value='$id'/></td>
        <td>$l</td><td>$c</td><td>$d</td><td>$t</td></tr>";
    }
    ?>
    -->
</table>
</p>
    <div class="submit-button">
        <input type="submit" value="Submit Text"/>
    </div>
</form>
