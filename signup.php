<?php
$_SESSION['logged_in'] = 1;
$_SESSION['access_level'] = 0;
$_SESSION['venue'] = "";
$_SESSION['type'] = "";
$_SESSION['_id'] = "guest";

header("Refresh:0; url=personEdit.php?id=new"); 
?>
