<?php
// username////
// CREATE USER 'gal'@'localhost' IDENTIFIED BY 'project';


 $conn = new mysqli("160.153.146.68", "GalDBUser","QWERTY67890", "SchoolGalProject");
// Create connection //
// $conn = new mysqli('localhost', 'root', '', 'school');

// Check connection
if ($conn->connect_error) {
	die('connection failed: ' . $conn->connect_error);
}
