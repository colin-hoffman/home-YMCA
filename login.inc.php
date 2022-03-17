<?PHP
/*
 * Copyright 2015 by Adrienne Beebe, Connor Hargus, Phuong Le, 
 * Xun Wang, and Allen Tucker. This program is part of RMHP-Homebase, which is free 
 * software.  It comes with absolutely no warranty. You can redistribute and/or 
 * modify it under the terms of the GNU General Public License as published by the 
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */
session_start();
session_cache_expire(30);
?>
<html>
<head>
<title>Login Form YMCA Child Watch</title>
<link rel="stylesheet" href="stylesheetForm.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <span class="required"></span>
            <input type="text"  placeholder="Enter your Username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <span class="required"></span>
            <input type="password" placeholder="Enter your Password" required>
          </div>
        </div> 
        <div class="submit-button">
            <form action="guardianHomepage.html" method="get">
              <input type="submit" value="Login">
            </form>
        </div>
        <div class="switch-button">
            <form action="RegistrationPage.html" method="get">
              <input type="submit" value="I need to create an account">
            </form>
        </div>
    </div>
  </div>
</body>
</html>

