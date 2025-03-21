<?php 
//database connection 
include_once 'connn.php';

// Retrieve data from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT * FROM admin_acount WHERE name = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<script>alert("Login Successfully");</script>';
    header("Location: admin.php");
}else{
    echo '<script>alert("Failed");</script>';
}
$conn->close();
?>