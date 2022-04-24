<?php
include_once('database/dninfo');


?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form for YMCA Child Watch</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <form action="" method="post">
       <?php
	if($_GET['name'] == NULL) {
		echo '<div class="title">Register</div>';
	} else {
		echo '<div class="title">Edit Account</div>';
	}
	?>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your First Name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your Last Name" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your city" required>
          </div>
          <div class="input-box">
            <span class="details">State</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your city" required>
          </div>
          <div class="input-box">
            <span class="details">ZIP</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your city" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your city" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Type</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your city" required>
          </div>
          <div class="input-box">
            <span class="details">Email <Address></Address></span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your email address" required>
          </div>
          <div class="input-box">
            <span class="details">Barcode</span>
            <span class="required"></span>
            <input type="text" placeholder="Enter your barcode details" required>
          </div>
 
        </div>
        <div class="submit-button">
          <form action="generalHomepage.html" method="get">
            <input type="submit" value="Register">
          </form>
      </div>
      <div class="switch-button">
          <form action="LoginPage.html" method="get">
            <input type="submit" value="I already have an account">
          </form>
      </div>
      </div>
    </form>
</div>
</body>
</html>
