<?php  

include 'db.php';
// include 'Edit-student.php';


$name = filter_var($_POST['name']);
$description = filter_var($_POST['description']);
$img = filter_var($_POST['img']);
$id = filter_var($_GET['val']);

if ($name == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  name FROM courses WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			$name = $row['name'];
		}
	} else {
		echo "0 results";
	}
}

if ($description == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  description FROM courses WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			$description = $row['description'];
		}
	} else {
		echo "0 results";
	}
}


if ($img == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  image FROM courses WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			$img = $row['img'];
		}
	} else {
		echo "0 results";
	}
}

 if ($_POST['action'] == 'Update') {

 $sql="UPDATE courses SET name='$name', description='$description', image='$img'
  	   WHERE id=" .$id . ""; 

	// move_uploaded_file($img, "$image");	

 	if ($conn->query($sql) === TRUE) {	
 		 header('location:Add-massage.php' . '?' . 'val=' . $name  );
 	} else {
 	    echo "Error: " . $sql . "<br>" . $conn->error;
 	}
 	
 }

  if ($_POST['action'] == 'Delete') {
    	    	
    	// $id = filter_var($_GET['val']);

    	$sql = 'DELETE FROM courses WHERE id=' . $id . '';
		if ($conn->query($sql) === TRUE) {
			header('location:Add-massage.php' . '?' . 'val=' . $name );
		}else{
			echo "Eror";		
		}

}
$conn->close();











