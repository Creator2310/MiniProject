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
    $username = $conn->real_escape_string($_POST['username']);
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);  // Note: consider hashing passwords
    $role = $_POST['role']; // Get role from the form submission

    // Prepare an insert statement
    $sql = "INSERT INTO user_details (username, fullname, email, password, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssss", $username, $fullname, $email, $password, $role);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            header("Location: index.php"); // Redirect to login page
            exit();
        } else {
            echo "Error: " . $stmt->error; // Output error message
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error; // Handle prepare statement error
    }
}

// Close connection
$conn->close();
?>
