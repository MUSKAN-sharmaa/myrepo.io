<?php
include "../required/connection.php";

// Check if 'id' is set in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // Convert to integer for safety
    
    // SQL query to delete the user by ID
    $sql = "DELETE FROM users WHERE id=$id";

    // Execute query and redirect with success or error message
    if ($conn->query($sql) === TRUE) {
        $message = "User deleted successfully!";
        header("Location: index.php?message=" . urlencode($message));
        exit;
    } else {
        echo "Error deleting user: " . $conn->error;
    }
} else {
    die("Error: User ID not specified or invalid.");
}
?>
