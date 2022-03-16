<?php
/*
 * Copyright 2015 by Allen Tucker. This program is part of RMHC-Homebase, which is free 
 * software.  It comes with absolutely no warranty. You can redistribute and/or 
 * modify it under the terms of the GNU General Public License as published by the 
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */
/*
 * 	personEdit.php
 *  oversees the editing of a person to be added, changed, or deleted from the database
 * 	@author Oliver Radwan, Xun Wang and Allen Tucker
 * 	@version 9/1/2008 revised 4/1/2012 revised 8/3/2015
 */
session_start();
session_cache_expire(30);
include_once('database/dbPersons.php');
include_once('domain/Person.php');
include_once('database/dbApplicantScreenings.php');
include_once('domain/ApplicantScreening.php');
include_once('database/dbLog.php');
$id = str_replace("_"," ",$_GET["id"]);

if ($id == 'new') {
    $person = new Person('new', 'applicant', $_SESSION['venue'], null, null, null, null, null, null, null, null, null, "applicant", 
                    null, 'new', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, "");
} else {
    $person = retrieve_person($id);
    if (!$person) { // try again by changing blanks to _ in id
        $id = str_replace(" ","_",$_GET["id"]);
        $person = retrieve_person($id);
        if (!$person) {
            echo('<p id="error">Error: there\'s no person with this id in the database</p>' . $id);
            die();
        }
    }
}
?>
<html>
    <head>
        <title>
            Editing <?PHP echo($person->get_first_name() . " " . $person->get_last_name()); ?>
        </title>
        <link rel="stylesheet" href="lib/jquery-ui.css" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <script src="lib/jquery-1.9.1.js"></script>
		<script src="lib/jquery-ui.js"></script>
		<script>
			$(function(){
				$( "#birthday" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#start_date" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#end_date" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#screening_status[]" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
			})
		</script>
    </head>
    <body>
        <div id="container">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                include('personValidate.inc');
                if ($_POST['_form_submit'] != 1)
                //in this case, the form has not been submitted, so show it
                    include('personForm.inc');
                else {
                    //in this case, the form has been submitted, so validate it
                    $errors = validate_form($person);  //step one is validation.
                    // errors array lists problems on the form submitted
                    if ($errors) {
                        // display the errors and the form to fix
                        show_errors($errors);
                        if (!$_POST['availability'])
                          $availability = null;
                        else {
                          $postavail = array();
                          foreach ($_POST['availability'] as $postday) 
                        	  $postavail[] = $postday;
                          $availability = implode(',', $postavail);
                        }
                        if ($_POST['isstudent']=="yes")  {
                        	$position="student";
                        	$employer = $_POST['nameofschool'];
                        }
                        else {
                        	$position = $_POST['position'];
                        	$employer = $_POST['employer'];
                        }
                        $person = new Person($person->get_first_name(), $_POST['last_name'], $_POST['location'], 
                        				$_POST['address'], $_POST['city'], $_POST['state'], $_POST['zip'],
                                        $person->get_phone1(), $_POST['phone1type'], $_POST['phone2'],$_POST['phone2type'], 
                        		        $_POST['email'], implode(',', $_POST['type']), 
                        				$_POST['screening_type'], implode(',', $_POST['screening_status']),
                                        $_POST['status'], $employer, $position, $_POST['credithours'], 
                                        $_POST['commitment'], $_POST['motivation'], $_POST['specialties'], $_POST['convictions'], 
                                        $availability, $_POST['schedule'], $_POST['hours'], 
                                        $_POST['birthday'], $_POST['start_date'], $_POST['howdidyouhear'],
                                        $_POST['notes'], $_POST['old_pass']);
                        include('personForm.inc');
                    }
                    // this was a successful form submission; update the database and exit
                    else
                        process_form($id,$person);
                        echo "</div>";
                    include('footer.inc');
                    echo('</div></body></html>');
                    die();
                }

                /**
                 * process_form sanitizes data, concatenates needed data, and enters it all into a database
                 */
                function process_form($id,$person) {
                    //echo($_POST['first_name']);
                    //step one: sanitize data by replacing HTML entities and escaping the ' character
                    if ($person->get_first_name()=="new")
                   		$first_name = trim(str_replace('\\\'', '', htmlentities(str_replace('&', 'and', $_POST['first_name']))));
                    else
                    	$first_name = $person->get_first_name();
                    $last_name = trim(str_replace('\\\'', '\'', htmlentities($_POST['last_name'])));
                    $location = $_POST['location'];
                    $address = trim(str_replace('\\\'', '\'', htmlentities($_POST['address'])));
                    $city = trim(str_replace('\\\'', '\'', htmlentities($_POST['city'])));
                    $state = trim(htmlentities($_POST['state']));
                    $zip = trim(htmlentities($_POST['zip']));
                    if ($person->get_first_name()=="new") {
                    	$phone1 = trim(str_replace(' ', '', htmlentities($_POST['phone1'])));
                    	$clean_phone1 = preg_replace("/[^0-9]/", "", $phone1);
                    	$phone1type = $_POST['phone1type'];
                    }
                    else {
                    	$clean_phone1 = $person->get_phone1();
                    	$phone1type = $person->get_phone1type();
                    }
                    $phone2 = trim(str_replace(' ', '', htmlentities($_POST['phone2'])));
                    $clean_phone2 = preg_replace("/[^0-9]/", "", $phone2);
                    $phone2type = $_POST['phone2type'];
                    $email = $_POST['email'];
                    $type = implode(',', $_POST['type']);
                    $screening_type = $_POST['screening_type'];
                    if ($screening_type!="") {
                    	$screening = retrieve_dbApplicantScreenings($screening_type);
                    	$step_array = $screening->get_steps();
                    	$step_count = count($step_array);
                    	$date_array = array();
                    	for ($i = 0; $i < $step_count; $i++) {
                        	$date_array[$i] = $_POST['screening_status'][$i];
                        	if ($date_array[$i]!="" && $date_array[$i]!="--" && strlen($date_array[$i]) != 8) {
                           	 	echo('<p>Completion Date for step: "' . $step_array[$i] . '" is in error, please enter mm-dd-yy.<br>');
                        	}
                    	}
                    	$screening_status = implode(',', $date_array);
                    }
                    $status = $_POST['status'];
                	if ($_POST['isstudent']=="yes")  {
                        $position="student";
                        $employer = $_POST['nameofschool'];
                    }
                    else {
                        $position = $_POST['position'];
                        $employer = $_POST['employer'];
                    }
                    $credithours = $_POST['credithours'];
                    $motivation = trim(str_replace('\\\'', '\'', htmlentities($_POST['motivation'])));
                    $specialties = trim(str_replace('\\\'', '\'', htmlentities($_POST['specialties'])));
                    $convictions = $_POST['convictions'];
                    if (!$_POST['availability'])
                          $availability = null;
                    else {
                          $availability = implode(',', $_POST['availability']);
                    }
                    // these two are not visible for editing, so they go in and out unchanged
                    $schedule = $_POST['schedule'];
                    $hours = $_POST['hours'];
                    $birthday = '11-11-11';
                    $start_date = '11-11-11';
                    $howdidyouhear = $_POST['howdidyouhear'];
                    $notes = trim(str_replace('\\\'', '\'', htmlentities($_POST['notes'])));
                    //used for url path in linking user back to edit form
                    $path = strrev(substr(strrev($_SERVER['SCRIPT_NAME']), strpos(strrev($_SERVER['SCRIPT_NAME']), '/')));
                    //step two: try to make the deletion, password change, addition, or change
                    if ($_POST['deleteMe'] == "DELETE") {
                        $result = retrieve_person($id);
                        if (!$result)
                            echo('<p>Unable to delete. ' . $first_name . ' ' . $last_name . ' is not in the database. <br>Please report this error to the House Manager.');
                        else {
                            //What if they're the last remaining manager account?
                            if (strpos($type, 'manager') !== false) {
                                //They're a manager, we need to check that they can be deleted
                                $managers = getall_type('manager');
                                if (!$managers || mysqli_num_rows($managers) <= 1 || $id=="Allen7037298111" || $id==$_SESSION['id'])
                                    echo('<p class="error">You cannot remove this manager from the database.</p>');
                                else {
                                    $result = remove_person($id);
                                    echo("<p>You have successfully removed " . $first_name . " " . $last_name . " from the database.</p>");
                                    if ($id == $_SESSION['_id']) {
                                        session_unset();
                                        session_destroy();
                                    }
                                }
                            } else {
                                $result = remove_person($id);
                                echo("<p>You have successfully removed " . $first_name . " " . $last_name . " from the database.</p>");
                                if ($id == $_SESSION['_id']) {
                                    session_unset();
                                    session_destroy();
                                }
                            }
                        }
                    }

                    // try to reset the person's password
                    else if ($_POST['reset_pass'] == "RESET") {
                        $id = $_POST['old_id'];
                        $result = remove_person($id);
                        $pass = $first_name . $clean_phone1;
                        $newperson = new Person($first_name, $last_name, $location, $address, $city, $state, $zip, $clean_phone1, $phone1type, $clean_phone2,$phone2type,
                        				$email, $type, $screening_type, $screening_status, $status, $employer, $position, $credithours,
                                        $commitment, $motivation, $specialties, $convictions, $availability, $schedule, $hours, 
                                        $birthday, $start_date, $howdidyouhear, $notes, "");
                        $result = add_person($newperson);
                        if (!$result)
                            echo ('<p class="error">Unable to reset ' . $first_name . ' ' . $last_name . "'s password.. <br>Please report this error to the House Manager.");
                        else
                            echo("<p>You have successfully reset " . $first_name . " " . $last_name . "'s password.</p>");
                    }

                    // try to add a new person to the database
                    else if ($_POST['old_id'] == 'new') {
                        $id = $first_name . $clean_phone1;
                        //check if there's already an entry
                        $dup = retrieve_person($id);
                        if ($dup)
                            echo('<p class="error">Unable to add ' . $first_name . ' ' . $last_name . ' to the database. <br>Another person with the same name and phone is already there.');
                        else {
                        	$newperson = new Person($first_name, $last_name, $location, $address, $city, $state, $zip, $clean_phone1, $phone1type, $clean_phone2,$phone2type,
                        				$email, $type, $screening_type, $screening_status, $status, $employer, $position, $credithours,
                                        $commitment, $motivation, $specialties, $convictions, $availability, $schedule, $hours, 
                                        $birthday, $start_date, $howdidyouhear, $notes, "");
                            $result = add_person($newperson);
                            if (!$result)
                                echo ('<p class="error">Unable to add " .$first_name." ".$last_name. " in the database. <br>Please report this error to the House Manager.');
                            else if ($_SESSION['access_level'] == 0)
                                echo("<p>Your application has been successfully submitted.<br>  The House Manager will contact you soon.  Thank you!");
                            else
                                echo('<p>You have successfully added <a href="' . $path . 'personEdit.php?id=' . $id . '"><b>' . $first_name . ' ' . $last_name . ' </b></a> to the database.</p>');
                        }
                    }

                    // try to replace an existing person in the database by removing and adding
                    else {
                        $id = $_POST['old_id'];
                        $pass = $_POST['old_pass'];
                        $result = remove_person($id);
                        if (!$result)
                            echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                        else {
                            $newperson = new Person($first_name, $last_name, $location, $address, $city, $state, $zip, $clean_phone1, $phone1type, $clean_phone2,$phone2type,
                        				$email, $type, $screening_type, $screening_status, $status, $employer, $position, $credithours,
                                        $commitment, $motivation, $specialties, $convictions, $availability, $schedule, $hours, 
                                        $birthday, $start_date, $howdidyouhear, $notes, $pass);
                            $result = add_person($newperson);
                            if (!$result)
                                echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                            //else echo("<p>You have successfully edited " .$first_name." ".$last_name. " in the database.</p>");
                            else
                                echo('<p>You have successfully edited <a href="' . $path . 'personEdit.php?id=' . $id . '"><b>' . $first_name . ' ' . $last_name . ' </b></a> in the database.</p>');
                            add_log_entry('<a href=\"personEdit.php?id=' . $id . '\">' . $first_name . ' ' . $last_name . '</a>\'s Personnel Edit Form has been changed.');
                        }
                    }
                }
                ?>
            </div>
            <?PHP include('footer.inc'); ?>
        </div>
    </body>
</html> 
