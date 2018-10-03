<?php

include 'db.php';


$name = $_POST['name'];
$Description = $_POST['Description'];
$img = $_POST['img'];


if ($_POST['action'] == 'Save') {

	$target = "images/" . basename($_FILES['img']['name']);
	$img = $_FILES['img']['name'];
	

	$sql = "INSERT INTO courses (name, Description, image)
	VALUES ('$name', '$Description', '$img')";

	if ($conn->query($sql) === TRUE) {	
		if (move_uploaded_file($_FILES['img']['tmp_name'] , $target)) {	
				header('location:Add-massage.php' . '?' . 'val=' . $name  );
    			$last_id = $conn->insert_id;
		} else {
	    	echo "erorrr upload file";
		}		

	} else {
	    echo "Error: 222" . $sql . "<br>" . $conn->error;
	}
}
 else if ($_POST['action'] == 'Delete') {
    echo "delete";

}
 else {
    echo "problem";
}
