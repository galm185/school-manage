<?php  
	
	function fieldName(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  name FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo $row['name'];
		}
	} else {
		echo "0 results";
	}
}

function fieldPhone(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  phone FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo $row['phone'];
		}
	} else {
		echo "0 results";
	}
}

function fieldEmail(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  email FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo $row['email'];
		}
	} else {
		echo "0 results";
	}
}

function fieldImage(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  image , name FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {			
		echo '<img id="old-image" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="' . $row['name'] . '"/>';
		}
	} else {
		echo "0 results";
	}
}


//// checkbox corses list ////

function checkBoxlist(){
	include 'db.php';

	$sql = 'SELECT id ,name FROM courses' ;
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo "<label>";
			echo "<input type='checkbox' name='checkbox[]' value='" . $row['id'] ."'><span>". $row['name'] ."</span>";
			echo "</label>";
		}
	} else {
		echo "This student is currently not enrolled in any courses";
	}
}	

//// checkbox corses list ////
