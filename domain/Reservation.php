<?php



class Reservation {
	private $id;
	private $count;
	private $child_first;
	private $child_last;
	private $location;
	private $date;
	private $time;
	private $guardian_email;

	function __construct($c, $first, $last, $loc, $d, $t, $g) {
		$this->id = $first . $g;
		$this->count = $c;
		$this->child_first = $first;
		$this->child_last = $last;
		$this->location = $loc;
		$this->date = $d;
		$this->time = $t;
		$this->guardian_email = $g;
	}
	function get_id() {
		return $this->id;
	}

	function get_count() {
		return this->count;
	}

	function get_child_first() {
		return this->child_first;
	}

	function get_child_last() {
		return this->child_last;
	}

	function get_location() {
		return this->location;
	}

	function get_date() {
		return this->date;
	}
	function get_time() {
		return this->time;
	}
	function get_guardian_email() {
		return this->guardian_email;
	}
}
?>
