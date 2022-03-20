<?php
/*
 * Copyright 2013 by Allen Tucker. 
 * This program is part of RMHC-Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 * 
 */

/*
 * Created on Mar 28, 2008
 * @author Oliver Radwan <oradwan@bowdoin.edu>, Sam Roberts, Allen Tucker
 * @version 3/28/2008, revised 7/1/2015
 */
 class Person {
	private $id;         // id (unique key) = first_name . phone1
	private $start_date; // format: 99-03-12
	private $venue;      // portland or bangor
	private $first_name; // first name as a string
	private $last_name;  // last name as a string
	private $address;   // address - string
	private $city;    // city - string
	private $state;   // state - string
	private $zip;    // zip code - integer
	private $phone1;   // primary phone -- home, cell, or work
	private $phone1type; // home, cell, or work
	private $phone2;   // secondary phone -- home, cell, or work
	private $phone2type; // home, cell, or work
	private $birthday;     // format: 64-03-12
	private $email;   // email address as a string
	private $employer;    // current employer or school attending
	private $position;    // job title or "student"
	private $credithours; // hours required if volunteering for academic credit; otherwise blank
	private $howdidyouhear;  // about RMH; internet, family, friend, volunteer, other (explain)
	private $commitment;  // App: "year" or "semester" (if student) or N/A (guest chef, events, or projects)
	private $motivation;   // App: why interested in RMH?
	private $specialties;  // App: special interests and hobbies related to RMH
	private $convictions;  // App: ever convicted of a felony?  "yes" or blank
	private $type;       // array of "volunteer", "weekendmgr", "sub", "guestchef", "events", "projects", "manager"
	private $screening_type; // if status is "applicant", type of screening used for this applicant
	private $screening_status; // array of dates showing completion of screening steps
	private $status;     // a person may be an "applicant", "active", "LOA", or "former"
	private $availability; // array of day:hours:venue triples; e.g., Mon:9-12:bangor, Sat:afternoon:portland
	private $schedule;     // array of scheduled shift ids; e.g., 15-01-05:9-12:bangor
	private $hours;        // array of actual hours logged; e.g., 15-01-05:0930-1300:portland:3.5
	private $notes;        // notes that only the manager can see and edit
	private $password;     // password for calendar and database access: default = $id


	function __construct($f, $l, $v, $a, $c, $s, $z, $p1, $p1t, $p2, $p2t, $e, $t,
			$screening_type, $screening_status, $st, $emp, $pos, $credithours, $comm, $mot, $spe,
			$convictions, $av, $sch, $hrs, $bd, $sd, $hdyh, $notes, $pass) {
		$this->id = $f . $p1;
		$this->start_date = $sd;
		$this->venue = $v;
		$this->first_name = $f;
		$this->last_name = $l;
		$this->address = $a;
		$this->city = $c;
		$this->state = $s;
		$this->zip = $z;
		$this->phone1 = $p1;
		$this->phone1type = $p1t;
		$this->phone2 = $p2;
		$this->phone2type = $p2t;
		$this->birthday = $bd;
		$this->email = $e;
		$this->employer = $emp;
		$this->position = $pos;
		$this->credithours = $credithours;
		$this->howdidyouhear = $hdyh;
		$this->commitment = $comm;
		$this->motivation = $mot;
		$this->specialties = $spe;
		$this->convictions = $convictions;
		if ($t !== "")
			$this->type = explode(',', $t);
		else
			$this->type = array();
		$this->screening_type = $screening_type;
		if ($screening_status !== "")
			$this->screening_status = explode(',', $screening_status);
		else
			$this->screening_status = array();

		$this->status = $st;
		if ($av == "")
			$this->availability = array();
		else
			$this->availability = explode(',', $av);
		if ($sch !== "")
			$this->schedule = explode(',', $sch);
		else
			$this->schedule = array();
		if ($hrs !== "")
			$this->hours = explode(',', $hrs);
		else
			$this->hours = array();
		$this->notes = $notes;
		if ($pass == "")
			$this->password = md5($this->id);
		else
			$this->password = $pass;  // default password == md5($id)
	}

	function get_id() {
		return $this->id;
	}

	function get_start_date() {
		return $this->start_date;
	}

	function get_venue() {
		return $this->venue;
	}

	function get_first_name() {
		return $this->first_name;
	}

	function get_last_name() {
		return $this->last_name;
	}

	function get_address() {
		return $this->address;
	}

	function get_city() {
		return $this->city;
	}

	function get_state() {
		return $this->state;
	}

	function get_zip() {
		return $this->zip;
	}

	function get_phone1() {
		return $this->phone1;
	}

	function get_phone1type() {
		return $this->phone1type;
	}

	function get_phone2() {
		return $this->phone2;
	}

	function get_phone2type() {
		return $this->phone2type;
	}

	function get_birthday() {
		return $this->birthday;
	}

	function get_email() {
		return $this->email;
	}

	function get_employer() {
		return $this->employer;
	}

	function get_position() {
		return $this->position;
	}

	function get_credithours() {
		return $this->credithours;
	}

	function get_howdidyouhear() {
		return $this->howdidyouhear;
	}

	function get_commitment() {
		return $this->commitment;
	}
	function set_convictions($convictions) {
		$this->convictions = $convictions;
	}

	function get_motivation() {
		return $this->motivation;
	}

	function get_specialties() {
		return $this->specialties;
	}

	function get_convictions() {
		return $this->convictions;
	}

	function get_type() {
		return $this->type;
	}

	function get_screening_type() {
		return $this->screening_type;
	}

	function get_screening_status() {
		return $this->screening_status;
	}

	function get_status() {
		return $this->status;
	}

	function get_availability() {   // array of day:hours:venue
		return $this->availability;
	}

	function set_availability($dayscolonhours) { // tack on the venue for each pair
		$this->availability = array();
		foreach($dayscolonhours as $dayhour) {
			$dh = explode(":",$dayscolonhours);
			$this->availability[] = $dh[0].":".$dh[1].":".$this->venue;
		}
	}

	function get_schedule() {
		return $this->schedule;
	}

	function get_hours() {
		return $this->hours;
	}

	function get_notes() {
		return $this->notes;
	}

	function get_password() {
		return $this->password;
	}
}
?>
