<?php
/*
 * Copyright 2015 by Jerrick Hoang, Ivy Xing, Sam Roberts, James Cook, 
 * Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan, 
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker. 
 * This program is part of RMH Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 * 
 */

	session_start();
	session_cache_expire(30);
?>
<!--
<html>
	<head>
		<title>
			About
		</title>
		<link rel="stylesheet" href="styles.css" type="text/css" />
	</head>
	<body>
!-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>About YMCA Child Watch</title>
    <link rel="stylesheet" href="stylesheetForm.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    <body>
		<div class="container">
    		<div class="title">Background</div>
			<?PHP include('header.php');?>
				<div class="content">
				<!-- <div id="container"> !-->
				<br>
				YMCA Membership includes free Child Watch for our members ages 6 weeks to 10 years old! 
				<br>
				<br>
				<p>We'll watch your little one while you workout, swim, play basketball or more, as long as 
				you stay in the building.</p>

				As we continue to phase back our Child Watch services, specific age requirements may vary by location. 
			</div>
		<?PHP include('footer.inc');?>
		</div>
	</body>
</html>
