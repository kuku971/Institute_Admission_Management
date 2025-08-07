<?php
$servername = "localhost";  // Change if needed
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "student_admission";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];

    // Query to check status
    $sql = "SELECT status FROM students WHERE phone='$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status = $row["status"];
    } else {
        $status = "Mobile number not found.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Application Status</title>
    <link rel="stylesheet" href="check_status.css">
</head>
<body>
    <div class="status-container">
        <h2>Check Your Application Status</h2>
        <form method="post" action="">
            <input type="text" name="phone" placeholder="Enter Mobile Number" required>
            <button type="submit">Check Status</button>
        </form>

        <?php if (isset($status)) { ?>
            <div class="status-result">
                <strong>Status:</strong> <?php echo htmlspecialchars($status); ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
