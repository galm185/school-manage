<?php  
	
	function fieldName(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT name FROM courses WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo $row['name'];
		}
	} else {
		echo "0 results";
	}
}
			  
function fieldDescription(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  description FROM courses WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo $row['description'];
		}
	} else {
		echo "0 results";
	}
}


function fieldImage(){
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  image , name FROM courses WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {			
		echo '<img id="old-image" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="' . $row['name'] . '"/>';
		}
	} else {
		echo "0 results";
	}
}


