<?php

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




// insert info student to students tables ////
include 'db.php';

$name = filter_var($_POST['name']);
$phone = filter_var($_POST['phone']);
$email = filter_var($_POST['email']);
$img = filter_var($_POST['img']);


if ($_POST['action'] == 'Save') {
	

	$target = "images/" . basename($_FILES['img']['name']);
	$img = $_FILES['img']['name'];
	

	
	$sql = "INSERT INTO student (name, phone , email, image)
	VALUES ('$name','$phone', '$email', '$img')";

	if ($conn->query($sql) === TRUE) {	
		if (move_uploaded_file($_FILES['img']['tmp_name'] , $target)) {	
				header('location:Add-massage.php' . '?' . 'val=' . $name  );
    			$last_id = $conn->insert_id;    			
		} else {
	    		header('location:Add-massage.php' . '?' . 'val=' . $name  );
    			$last_id = $conn->insert_id;    			
		}		
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
//// insert info student to students tables ////




//// insert info coursesID , studentID to join table "idinfo" ////

$selected = $_POST['checkbox'];
if(isset($selected)){
	$N = count($selected);

    for($i=0; $i < $N; $i++){

    	$sql = "INSERT INTO idinfo (coursesID, studentID)
 		VALUES ($selected[$i] , $last_id) ";
				
		if ($conn->query($sql) === TRUE) {	

			header('location:Add-massage.php' . '?' . 'val=' . $name  );
		} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
} 

//// insert info coursesID to join table "idinfo" ////







