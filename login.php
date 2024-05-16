<<<<<<< HEAD
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'minilik_lms') or die(mysqli_error($conn));

/* student */
$query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);
// comment 
// ddddd
// second comment
/* admin */
$query_admin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result_admin = mysqli_query($conn, $query_admin) or die(mysqli_error($conn));
$row_admin = mysqli_fetch_array($result_admin);
$num_row_admin = mysqli_num_rows($result_admin);
// checked
/* teacher */
$query_teacher = mysqli_query($conn, "SELECT * FROM teacher WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
$num_row_teacher = mysqli_num_rows($query_teacher);
$row_teacher = mysqli_fetch_array($query_teacher);

if ($num_row > 0) {
    $_SESSION['id'] = $row['id'];
    header('Location: student_dashboard.php'); // Redirect to student dashboard
} else if ($num_row_teacher > 0) {
    $_SESSION['id'] = $row_teacher['id'];
    header('Location: teacher_dashboard.php'); // Redirect to teacher dashboard
} else if ($num_row_admin > 0) {
    $_SESSION['id'] = $row_admin['admin_id'];
    header('Location: pages/dashboard.php'); // Redirect to admin dashboard
} else {
    
 
    header('location:login_form.php'); // Red
}

// Close the database connection
mysqli_close($conn);
?>

=======
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'minilik_lms') or die(mysqli_error($conn));

/* student */
$query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);
// here second
/* admin */
$query_admin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result_admin = mysqli_query($conn, $query_admin) or die(mysqli_error($conn));
$row_admin = mysqli_fetch_array($result_admin);
$num_row_admin = mysqli_num_rows($result_admin);

/* teacher */
$query_teacher = mysqli_query($conn, "SELECT * FROM teacher WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
$num_row_teacher = mysqli_num_rows($query_teacher);
$row_teacher = mysqli_fetch_array($query_teacher);

if ($num_row > 0) {
    $_SESSION['id'] = $row['id'];
    header('Location: student_dashboard.php'); // Redirect to student dashboard
} else if ($num_row_teacher > 0) {
    $_SESSION['id'] = $row_teacher['id'];
    header('Location: teacher_dashboard.php'); // Redirect to teacher dashboard
} else if ($num_row_admin > 0) {
    $_SESSION['id'] = $row_admin['admin_id'];
    header('Location: pages/dashboard.php'); // Redirect to admin dashboard
} else {
    
 
    header('location:login_form.php'); // Red
}

// Close the database connection
mysqli_close($conn);


?>

>>>>>>> 257ed74cd96fa553df1f3490c422aa0f98d47fd3
