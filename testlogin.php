<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simulate user validation (replace with database check in real implementation)
    if ($username === 'testuser' && $password === '1234') {
        // Redirect to the dummy dashboard
        header("Location: http://192.168.191.20/Workshop%202%20-%20New/dummypage.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
