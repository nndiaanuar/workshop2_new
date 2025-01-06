<?php
// Start the session
session_start();

// Include database connection
include 'Database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];  // The plain-text password entered by the user

        // Prepared statement to fetch the user's record from the database
        $query = "SELECT * FROM staff WHERE username = $1";
        $result = pg_prepare($conn, "login_query", $query);
        $result = pg_execute($conn, "login_query", [$username]);

        // Check if the username exists
        if ($row = pg_fetch_assoc($result)) {
            // Compare the entered password with the stored plain-text password
            if ($password === $row['password']) {
                // Store session data for the logged-in user
                $_SESSION['username'] = $row['username'];
                $_SESSION['position'] = $row['position'];
                
                // Redirect to the respective page based on position
                if ($row['position'] === 'ADMIN') {
                    header("Location: Admin/DashboardAdmin.php"); // Redirect to admin dashboard
                } else {
                    header("Location: Staff/homepageStaff.php"); // Redirect to staff homepage
                }
                exit(); // Make sure no further code is executed after the redirect
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Invalid username.";
        }

        pg_close($conn);
    } else {
        echo "Username and password must be provided.";
    }
} else {
    echo "Invalid request method.";
}
?>
