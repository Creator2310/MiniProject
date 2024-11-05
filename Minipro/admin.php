<?php
// Start the session
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "Access denied. Admins only.";
    exit();
}

// Database connection details
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

// Initialize message variable
$message = "";

// Handle delete user request
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM user_details WHERE id = ?");
    $stmt->bind_param("i", $deleteId);
    if ($stmt->execute()) {
        $message = "User deleted successfully.";
    } else {
        $message = "Error deleting user: " . $stmt->error;
    }
    $stmt->close();
}

// Handle update user request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_id'])) {
    $updateId = $_POST['update_id'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE user_details SET username = ?, fullname = ?, email = ? WHERE id = ?");
    $stmt->bind_param("sssi", $username, $fullname, $email, $updateId);
    if ($stmt->execute()) {
        $message = "User updated successfully.";
    } else {
        $message = "Error updating user: " . $stmt->error;
    }
    $stmt->close();
}

// Fetch all users
$result = $conn->query("SELECT id, username, fullname, email FROM user_details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - User Management</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" type="image/icon" href="/Pics/favicon.ico">
    <script>
        // Check if the message variable is set and display it as an alert
        <?php if ($message): ?>
            alert("<?= addslashes($message) ?>");
        <?php endif; ?>
    </script>
</head>
<body>
<header>
    <h2 class="logo">Admin Dashboard</h2>
    <nav class="navigation">
        <a href="index.php"><button class="bt">Logout</button></a>
    </nav>
</header>
<div class="dashboard">
    <h2>User Management</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form action="admin.php" method="post">
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><input type="text" name="username" value="<?= htmlspecialchars($row['username']) ?>"></td>
                <td><input type="text" name="fullname" value="<?= htmlspecialchars($row['fullname']) ?>"></td>
                <td><input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>"></td>
                <td>
                    <input type="hidden" name="update_id" value="<?= htmlspecialchars($row['id']) ?>">
                    <button type="submit">Update</button>
                    <a href="admin.php?delete_id=<?= htmlspecialchars($row['id']) ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<?php $conn->close(); ?>
</body>
</html>
