<?php include 'student-function.php'; 
	  include 'courses-function.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP + MySQL</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
			<a href="index.php"><img src="images/logo.png" alt="logo"></a>
			<a href="">school</a>
			<a href="">administration</a>
			<div id="login">
				<span class="image"></span>
				<a href="" id="user_name">John Doe. Manager</a>
				<a href="" id="logout">logout</a>
			</div>
		</nav>
	</header>
	<main>
		<nav id="courses" class="nav">
			<h2 class="category">Courses<button class="add"><a href="Add-content-courses.php">+</button></h2>
			<?php build_courses_nav(); ?>
		</nav>
		<nav id="students"  class="nav">
			<h2 class="category">Students<button class="add"><a href="Add-content-student.php">+</button></h2>
			<?php build_student_nav(); ?>
		</nav>

		<div id="main_container">
			<?php student_info(); ?>
			<nav class='list-info-main'>
				<?php student_listCourses(); ?>
			</nav>			
		</div>
	</main>
</body>
</html>