<?php
include_once 'connn.php';
if (isset($_POST['del_msg'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM messages WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//
if (isset($_POST['del_reg'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: Registation.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//

if (isset($_POST['del_cont'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM Feedback WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: feedback.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>