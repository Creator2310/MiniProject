<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $user = $conn->real_escape_string($_POST['username']);
    $pass = $conn->real_escape_string($_POST['password']); // Store password as plain text

    // Prepare SQL statement to select the user by username
    $sql = "SELECT * FROM user_details WHERE username = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Directly compare the plain-text password
            if ($pass === $row['password']) {
                // Set session variables for the logged-in user
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];

                // Redirect based on user role
                if ($row['role'] === 'admin') {
                    header("Location: admin.php");
                } else {
                    header("Location: home.php");
                }
                exit();
            } else {
                echo "<script>alert('Invalid password'); window.location = 'index.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid username'); window.location = 'index.php';</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Database error: Unable to prepare statement.'); window.location = 'index.php';</script>";
    }
}

// Close the connection
$conn->close();
?>
