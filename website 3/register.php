<?php
include_once 'connn.php';

// Include your database connection file or establish a connection here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data

    // Retrieve values from the form
    $name = $_POST["name"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $courses = $_POST["courses"];
   
      // Get the label value of the selected type
      $type = ($_POST["type"] == "group-type") ? "Group" : "Individual";

    // Checkboxes
    $twoHours = isset($_POST["two-hours"]) ? 1 : 0;
    $halfDay = isset($_POST["half-day"]) ? 1 : 0;
    $fullDay = isset($_POST["full-day"]) ? 1 : 0;
    $twoDays = isset($_POST["two-days"]) ? 1 : 0;

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO user (name, password, number, email, address, courses, type, two_hours, half_day, full_day, two_days)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sssssssiiii", $name, $password, $number, $email, $address, $courses, $type, $twoHours, $halfDay, $fullDay, $twoDays);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: register.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}

   

 


// if(isset($_POST['reg'])){
//     // Get form data
//     $name = $_POST["name"];
//     $password = $_POST["password"];
//     $number = $_POST["number"];
//     $email = $_POST["email"];
//     $address = $_POST["address"];
//     $course_name = $_POST["course_name"];
   
    
//     // Check if 'type' is set in the $_POST array
//     $courseType = isset($_POST["type"]) ? $_POST["type"] : '';

//     // Check if 'duration' is set in the $_POST array and is an array
//     /*$checkedLabels = isset($_POST["duration"]) && is_array($_POST["duration"]) ? $_POST["duration"] : array();

//      // Get the label text of the checked checkboxes
//      $courseDuration = implode(", ", array_map(function($label) {
//         return htmlentities($label); // Ensure proper encoding
//     }, $checkedLabels));*/

//     // SQL query to insert data into the database
//     $sql = "INSERT INTO users (username, password, number, email, address, course_name, course_type)
//             VALUES ('$name', '$password', '$number', '$email', '$address', '$course_name', '$courseType')";

//     // Execute the query
//     if ($conn->query($sql) === TRUE) {
//         echo "Registration successful!";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     // Close the database connection
//     $conn->close();
// }
?>
