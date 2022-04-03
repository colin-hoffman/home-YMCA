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
?>
