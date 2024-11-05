<?php
include "../required/connection.php"; // Include your database connection

// Fetch all users from the database
$sql = "SELECT * FROM users";
$res = $conn->query($sql);
$message = ""; // Initialize message variable

// Check if there's a message to display
if (isset($_GET['message'])) {
    $message = htmlspecialchars($_GET['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <title>User Management</title>
</head>
<body>
    <div class="container mt-4">
        <?php if ($message): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <a class="btn btn-primary mb-3" href="adduser.php">Add Users</a>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Series</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($res->num_rows > 0): ?>
                    <?php while ($row = $res->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td>
                                <a class="btn btn-warning" href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="deleteuser.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No results found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
