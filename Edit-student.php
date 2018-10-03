<?php  
	include 'db.php'; 
	include 'student-edit-createField.php';

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

			<form action="student-edit-save-delete.php?val=<?php echo$id;?>"  method="POST" >
			
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
				<label>
					<h4>phone</h4>
					<input type="number" name="phone"  placeholder=" <?php fieldPhone();?> " >
				</label>
				<label id="Description">
					<h4>email</h4>
					<input type="email" id="email" name="email"  placeholder=" <?php fieldEmail();?> ">
				</label>
				<label id="image">
					<h4><?php fieldImage();?> </h4>
					<input type="file" id="image" name="img" ">
				</label>
				<label id="coursesList">
					<h4>courses</h4>
					<?php  checkBoxlist() ;?>
				</label>
			</form>
		</div>
	</main>
</body>
</html>
