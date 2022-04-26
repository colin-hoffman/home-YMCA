<?php
/*
 * Copyright 2015 by Allen Tucker. This program is part of RMHP-Homebase, which is free
 * software.  It comes with absolutely no warranty. You can redistribute and/or
 * modify it under the terms of the GNU General Public License as published by the
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */
/*
 * Modified by Xun Wang on Feb 25, 2015
 */

session_start();
session_cache_expire(30);
?>
<html>
    <head>
        <title>
            Search for People
        </title>
        <link rel="stylesheet" href="stylesheetForm.css" type="text/css" />
		<link rel="stylesheet" href="lib/jquery-ui.css" />

    </head>
    <body>
        <div class="container">
            <div class="title">Locations</div>
                <div class="content">
	                <div class="user-details">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                // display the search form
                $area = $_GET['area'];
                echo('<form method="post">');
                echo('<p><strong>Search for People:</strong>');
                $types = array('manager' => 'Administrator', 'guardian' => 'Guardian',
                		'wactcher' => 'Watcher');
                echo '<p>Type:<select name="s_type">' ;
                echo '<option value="" SELECTED></option>' ;
                foreach ($types as $type => $typename)
                	echo '<option value="'.$type.'">'.$typename.'</option>';

                echo '</select>';
                echo '<p>Name (type a few letters): ';
                echo '<input type="text" name="s_name">';
                
                echo('<p><input type="submit" name="Search" value="Search">');
                echo('</form></p>');

                // if user hit "Search"  button, query the database and display the results
                if ($_POST['Search']) {
                    $type = $_POST['s_type'];
                    $name = trim(str_replace('\'', '&#39;', htmlentities($_POST['s_name'])));
                    // now go after the volunteers that fit the search criteria
                    include_once('database/dbPersons.php');
                    include_once('domain/Person.php');
                    $result = getonlythose_dbPersons($type, $name); //added s_venue
                    echo '<p><strong>Search Results:</strong> <p>Found ' . sizeof($result) . ' ' . $status . ' ';
                    if ($type != "")
                        echo $type . "s";
                    else
                        echo "persons";
                    if ($name != "")
                        echo ' with name like "' . $name . '"';
				    if (sizeof($result) > 0) {
				       echo ' (select one for more info).';
				       echo '<div id="target" style="overflow: scroll; width: variable; height: 400px;">';
				       echo '<p><table> <tr><td>Name</td><td>Phone</td>
				                            <td>E-mail</td><td>Address</td></tr>';
				       foreach ($result as $vol) {
				          echo "<tr><td><a href=personEdit.php?id=" .
				               str_replace(" ","_",$vol->get_id()) . ">" .
				               $vol->get_first_name() . " " . $vol->get_last_name() . "</td><td>" .
				               phone_edit($vol->get_phone1()) . "</td><td>" .
				               $vol->get_email() . "</td><td>";
				          echo "" . $vol->get_address() . " " .
                        $vol->get_city() . ", " .
                        $vol->get_state() . "";
				          echo "</td></a></tr>";
				       }
				       echo '</table>';
				       echo '</div>';
				    }

                }
                ?>

<ul class="topnav">
        <li><a class="dark" href="http://localhost/home-YMCA/index.php">Home</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/CreateLocation.php">Create Location</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/personEdit.php?id=new">Create Users</a></li>
        <li><a class="gray" href="http://localhost/home-YMCA/viewChildrenInformation.php">View Children Info</a></li>
        <li><a class="active" href="http://localhost/home-YMCA/personSearch.php"> Search People</a></li>
        <li><a class="dark" href="http://localhost/home-YMCA/logout.php">Sign Out</a></li>
      </ul>
                <!-- below is the footer that we're using currently-->
                </div>
        </div>
        <?PHP include('footer.inc'); ?>
    </body>
</html>
