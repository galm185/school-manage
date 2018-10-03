<?php  

include 'db.php';


$name = filter_var($_POST['name']);
$phone = filter_var($_POST['phone']);
$email = filter_var($_POST['email']);
$img = filter_var($_POST['img']);
$id = filter_var($_GET['val']);

if ($name == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  name FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			$name = $row['name'];
		}
	} else {
		echo "0 results";
	}
}

if ($phone == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  phone FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			$phone = $row['phone'];
		}
	} else {
		echo "0 results";
	}
}

if ($email == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  email FROM student WHERE id=' . $id . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			$email = $row['email'];
		}
	} else {
		echo "0 results";
	}
}

if ($img == '') {
	include 'db.php'; 

	$id = filter_var($_GET['val']);

	$sql = 'SELECT  image FROM student WHERE id=' . $id . '' ;
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
	
	if($img == ''){
		$img = "4.png";
	}

 $sql="UPDATE student SET name='$name', phone='$phone', email='$email', image='$img'
  	   WHERE id=" .$id . ""; 

 	if ($conn->query($sql) === TRUE) {	
 		$selected = $_POST['checkbox'];
		if(isset($selected)){
			$N = count($selected);
    		for($i=0; $i < $N; $i++){
    			$sql = "INSERT INTO idinfo (coursesID, studentID)
 				VALUES ($selected[$i] , " . $id . ") ";	
				if ($conn->query($sql) === TRUE) {	
					header('location:Add-massage.php' . '?' . 'val=' . $name  );
				} else {
	    			echo "Error: " . $sql . "<br>" . $conn->error;
				}
    		}
  		}else{header('location:Add-massage.php' . '?' . 'val=' . $name  );} 
 	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
 	
 }

  if ($_POST['action'] == 'Delete') {
    	    	
    	$sql = 'DELETE FROM student WHERE id=' . $id . '';
		if ($conn->query($sql) === TRUE) {
			header('location:Add-massage.php' . '?' . 'val=' . $name );
		}else{
			echo "Eror";		
		}

}
$conn->close();











