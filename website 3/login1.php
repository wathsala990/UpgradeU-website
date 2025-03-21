<?php
// database connection
include_once 'connn.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $password = $_POST["password"];

    // Validate user credentials using prepared statement
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, store user information in the session
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row["id"];
        $_SESSION['username'] = $row["username"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['number'] = $row["number"];
        $_SESSION['course_name'] = $row["course_name"];

        // Redirect to a new page
        header("Location: login.html");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Invalid username or password";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
