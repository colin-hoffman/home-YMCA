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
	private $id;         // id (unique key) = inc number
	private $first_name; // first name as a string
	private $last_name;  // last name as a string
	private $phone1;   // primary phone -- home, cell, or work
	private $birthday;     // format: 64-03-12
	private $email;   // email address as a string
	private $allergies; // child's allergies as a string

	function __construct($id, $f, $l, $p1, $e, $bd, $all) {
		$this->id = $id + 1;
		$this->first_name = $f;
		$this->last_name = $l;
		$this->phone1 = $p1;
		$this->birthday = $bd;
		$this->email = $e;
		$this->allergies = $all;
	}

	function get_id() {
		return $this->id;
	}

	function get_allergies(){
		return $this->allergies;
	}
//	function get_start_date() {
//		return $this->start_date;
//	}

//	function get_venue() {
//		return $this->venue;
//	}

	function get_first_name() {
		return $this->first_name;
	}

	function get_last_name() {
		return $this->last_name;
	}

//	function get_address() {
//		return $this->address;
//	}

//	function get_city() {
//		return $this->city;
//	}

//	function get_state() {
//		return $this->state;
//	}

//	function get_zip() {
//		return $this->zip;
//	}

	function get_phone1() {
		return $this->phone1;
	}

//	function get_phone1type() {
//		return $this->phone1type;
//	}

//	function get_phone2() {
//		return $this->phone2;
//	}

//	function get_phone2type() {
//		return $this->phone2type;
//	}

	function get_birthday() {
		return $this->birthday;
	}

	function get_email() {
		return $this->email;
	}

//	function get_employer() {
//		return $this->employer;
//	}

//	function get_position() {
//		return $this->position;
//	}

//	function get_credithours() {
//		return $this->credithours;
//	}

//	function get_howdidyouhear() {
//		return $this->howdidyouhear;
//	}

//	function get_commitment() {
//		return $this->commitment;
//	}

//	function get_motivation() {
//		return $this->motivation;
//	}

//	function get_specialties() {
//		return $this->specialties;
//	}

//	function get_convictions() {
//		return $this->convictions;
//	}

//	function get_type() {
//		return $this->type;
//	}

//	function get_screening_type() {
//		return $this->screening_type;
//	}

//	function get_screening_status() {
//		return $this->screening_status;
//	}

//	function get_status() {
//		return $this->status;
//	}

//	function get_availability() {   // array of day:hours:venue
//		return $this->availability;
//	}

//	function set_availability($dayscolonhours) { // tack on the venue for each pair
//		$this->availability = array();
//		foreach($dayscolonhours as $dayhour) {
//			$dh = explode(":",$dayscolonhours);
//			$this->availability[] = $dh[0].":".$dh[1].":".$this->venue;
//		}
//	}

//	function get_schedule() {
//		return $this->schedule;
//	}

//	function get_hours() {
//		return $this->hours;
//	}

//	function get_notes() {
//		return $this->notes;
//	}

//	function get_password() {
//		return $this->password;
//	}
}
?>
