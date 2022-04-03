<?php
include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Reservation.php');

function add_reservation($reservation) {
	if (!$reservation instanceof Reservation)
		die("Error: add_reservation type mismatch");
	$con=connect();
	$query= "SELECT * FROM dbreservation WHERE id = '" . $reservation->get_id() ."'";
	$result = mysqli_query($con, $query);

	if ($result == null || mysqli_num_rows($result) == 0) {
		mysqli_query($con, 'INSERT INTO dbreservation VALUES("' .
			$reservation->get_id() . '","' .
			$reservation->get_count() . '","' .
			$reservation->get_child_first() . '","' .
			$reservation->get_child_last() . '","' .
			$reservation->get_location() . '","' .
			$reservation->get_date() . '","' .
			$reservation->get_time() . '","' .
			$reservation->get_guardian_email() .

			'");');
		mysqli_close($con);
		return true;
	}
	mysqli_close($con);
	return false;
}

?>
