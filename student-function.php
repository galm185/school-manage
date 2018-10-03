<?php 

/////////  student-list-nav //////////
				
function build_student_nav(){
	include 'db.php';
	$sql = 'SELECT id ,name, phone, image FROM student';
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		foreach($result as $row) {
			echo '<a href="student-info.php?val='. $row['id'] .'" class="links">';
			echo '<span class="image">';
			echo '<img class="img" src=images/'. $row['image'] .' alt="' . $row['name'] . '"/>';
			echo '</span class="image">';
			echo '<span class="info">' . $row['name'] . '</span>';
			echo '<span class="info">' . $row['phone'] . '</span>';
			echo '</a>';
			}
		}
	else {
		echo "0 results";
	}
}

/////////  student-list-nav //////////


/////////  student-info //////////


function student_info(){
	include 'db.php';
	$username = filter_var($_GET['val']);

	$sql = 'SELECT id ,name, phone, image , email FROM student WHERE id=' . $username . '' ;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
			foreach($result as $row) {
				echo "<div id='main-header'>";
				echo "<h3>student</h3>";
				echo "<a class='button' href='Edit-student.php?val=" . $row['id'] ."'>Edit</a></div>";
				echo "<div id='main-info'>";
				echo "<div id='wrapp-img'>";
				echo '<img src=images/'. $row['image'] .' alt="' . $row['name'] . '"/>';
				echo "</div>";
				echo "<div id='content'>";
				echo "<h2>". $row['name'] . "</h2>";
				echo "<span>" . $row['phone'] . "</span>";
				echo "<span>" . $row['email'] . "</span>";
				echo "</div>";
				echo "</div>";
				  }
		} else {
				echo "0 results";
			}
				

	}

/////////  student-info //////////


/////////  student-courses-list //////////

function student_listCourses(){
	include 'db.php';
	$username = filter_var($_GET['val']);

	$sql = 'SELECT id ,name ,description , image 
  			FROM courses JOIN idinfo
    		ON courses.id = idinfo.coursesID
    		WHERE idinfo.studentID =' . $username . '' ;
	
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
			foreach($result as $row) {				
				echo "<a href='courses-info.php?val=". $row['id'] . "'>" . "<div class='wrapp-img-link'>" .'<img class="img-main" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="' . $row['name'] . '"/>' . "</div>". "course" . " " . $row['name'] . "</a>";
			}
	} else {
				echo "This student is currently not enrolled in any courses";
			}
				

	}	
/////////  student-courses-list //////////
