<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./style.css">
    <style>
       
    </style>
</head>

<body>
    <header>
        <h1>Admin Page</h1>
    </header>

    <nav>
        <a href="#">Contact Us</a>
        <a href="./feedback.php">Feedback</a>
        <a href="./Registation.php">Registation Details</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <section>
        <img src="./images1/logo.svg.PNG" alt="Header Image">

        <div class="dashboard-section">
            <h2>Contact Us</h2>
            
            <?php
             include 'connn.php';
            $sql = "SELECT * FROM messages";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Id</th><th>name</th><th>email</th><th>messege</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['message']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }           
            ?>
        </div>

        <div>
       <form action="delete.php" method="post">
                    <label for="id">ID to delete:</label>
                    <input type="number" name="id" required>
                    <div class="btn">
                        <button type="submit" name="del_msg">Delete Data</button>
                    </div>
                </form>
       </div>


        


    </section>
</body>

</html>
