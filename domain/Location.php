<?php
/*
 * Created April 1 2022
 * Version #1
 */

class Location {
	private $id;
	private $name;
	private $start_time;
	private $end_time;
	private $capacity;

	function __construct($i, $n, $s, $e, $c) {

		$this->id = $i;
		$this->name = $n;
		$this->start_time = $s;
		$this->end_time = $e;
		$this->capacity = $c;
	}
	
?>
