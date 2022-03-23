include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Child.php');

/**
 * add a person to dbChild table: if already there return false
*/
function add_child($child) {
	if(!$child instance of Child)
		die("Error: add_child type mismatch");
	$con=connect();
	$query= "SELECT * FROM dbChild WHERE first_name = '" . $child->get_first_name() . "'";
	$result = mysqli_query($con, $query);
	if ($result == null || mysql_num_rows($result) == 0) {
		mysqli_query($con, 'INSERT INTO dbChild VALUES("' .
			$child->get_id() . '","' .
			$child->get_first_name() . '","'.
			$child->get_last_name() . '","'.
			$child->get_allergies() . '","'.
			$child->get_phone1() . '","' .
			$child->get_birthday() . '","'.
			$child->get_email() . 
			'");');
		mysqli_close($con);
		return true;
	}
	mysqli_close($con);
	return false;
}

/*
* remove a child from dbChild table
*/

function remove_child($first_name) {
	$con = connect();
	$query = 'SELECT * FROM dbChild WHERE first_name = "' . $first_name . '"';
	$result = mysqli_query($con, $query);
	if ($result == null || mysqli_num_rows($result) == 0){
		mysqli_close($con);
		return false;
	}
	$query = 'DELETE FROM dbChild WHERE first_name = "' . $first_name . '"';
	$result = mysqli_query($con, $query);
	mysqli_close($con);
	return true;
}

function retrieve_child($first_name) {
	$con = connect();
	$query = "SELECT * FROM dbChild WHERE first_name = '" . $first_name . "'";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) !== 1){
		mysqli_close($con);
		return false;
	}
	$result_row = mysqli_fetch_assoc($result);
	// var_dump($result_row);
	$theChild = make_a_child($result_row);
	//mysqli_close($con);
	return $theChild;
}

function make_a_child($result_row){
	$theChild = new Child(
		$result_row['first_name'],
		$result_row['last_name'],
		$result_row['guardian_phone'],
		$result_row['birthday']
		$result_row['email']
		$result_row['allergies']
		$result_row['id']
	return $theChild;
}
