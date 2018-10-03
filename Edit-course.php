<?php  
	include 'db.php'; 
	include 'course-edit-createField.php';

	$id = $_GET['val'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit student</title>
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet">
	<link rel="stylesheet" href="style-edit-student.css">
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
				<h3>Edit student</h3>	
			</div>

			<form action="course-edit-save-delete.php?val=<?php echo$id;?>"  method="POST" >
			
				<div class="buttons-form">
					<label>
						<input type="submit" name="action" value="Update" class="style-buttons">
					</label>
					<label>
						<input type="submit" name="action" value="Delete" class="style-buttons">
					</label>
				</div>
				<label>
					<h4>Name</h4>
					<input type="text" name="name"  placeholder=" <?php fieldName();?> "  >
				</label>
				<label id="Description">
					<h4>Description</h4>
					<input type="text" id="Description" name="description" placeholder=" <?php fieldDescription();?> ">
				</label>
				<label id="image">
					<h4><?php fieldImage();?> </h4>
					<input type="file" id="image" name="img" ">
				</label>
			</form>
		</div>
	</main>
</body>
</html>
