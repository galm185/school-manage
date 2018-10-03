<?php 

/////////  courses-list-nav //////////

function build_courses_nav(){
	include 'db.php';

	$sql = 'SELECT id, name, image FROM courses';
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo '<a href="courses-info.php?val='. $row['id'] .'" class="links">';
			echo '<span class="image">';
			echo '<img class="img" src=images/'. $row['image'] .' alt="' . $row['name'] . '"/>';
			echo '</span class="image">';
			echo '<span class="info">' . $row['name'] . '</span>';
			echo '</a>';
			}
	} else {
			echo "0 results";
		}			
}

/////////  courses-list-nav //////////



/////////  courses-info //////////

function courses_info(){
	include 'db.php';
	$username = filter_var($_GET['val']);

	$sql = 'SELECT id, name, description, image FROM courses WHERE id=' . $username . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
			foreach($result as $row) {
				echo "<div id='main-header'>";
				echo "<h3>course</h3>";
				echo "<a class='button' href='Edit-course.php?val=" . $row['id'] ."'>Edit</a></div>";
				echo "<div id='main-info'>";
				echo "<div id='wrapp-img'>";
				echo '<img src=images/'. $row['image'] .' alt="' . $row['name'] . '"/>';
				echo "</div>";
				echo "<div id='content'>";
				echo "<h2>". $row['name'] . "</h2>";
				echo "<p>" . $row['description'] ."</p>";
				echo "</div>";
				echo "</div>";
			}
		} else {
				echo "0 results";
			}
				

	}


/////////  courses-info //////////


/////////  courses_listStudent //////////

function courses_listStudent(){
	include 'db.php';
	$username = filter_var($_GET['val']);

	$sql = 'SELECT id, name, image
  			FROM student JOIN idinfo
    		ON student.id = idinfo.studentID
    		WHERE idinfo.coursesID =' . $username . '' ;


	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
			foreach($result as $row) {
				
				echo "<a href='student-info.php?val=". $row['id'] . "'" . "<div class='wrapp-img-link'>" .'<div class="wrapp-img-link">' . '<img class="img-main" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ) .'" alt="' . $row['name'] . '"/>' . "</div>". "student" . " " . $row['name'] . "</a>";
			}
	} else {
				echo "There are no students are enrolled in this course ";
			}
				

	}

/////////  courses_listStudent //////////

