<?php  
	include 'db.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add content</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet">
	<link rel="stylesheet" href="style-Add-content-courses.css">
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
		<div id="main_container">
			<div id='main-header'>
				<h3>Add courses</h3>	
			</div>

			<form action="Add-course-function.php" method="post" enctype="multipart/form-data" >
			
				<div class="buttons-form">
					<label>
						<input type="submit" name="action" value="Save" class="style-buttons">
					</label>
					<label>
						<input type="submit" name="action" value="Delete" class="style-buttons">
					</label>
				</div>
				<label>
					<h4>Name</h4>
					<input type="text" name="name" >
				</label>
				<label id="Description">
					<h4>Description</h4>
					<input type="text" id="Description" name="Description" >
				</label>
				<label id="image">
					<h4>image</h4>
					<input type="file" id="image" name="img">
				</label>
			</form>
		</div>
	</main>

</body>
</html>

