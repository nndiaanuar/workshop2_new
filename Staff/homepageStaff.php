<?php
include '../Database/connect.php';

session_start();

if (!isset($_SESSION['username'])) {
    echo "Unauthorized access!";
    exit();
}

// Initialize variables for totals
$totalStaff = 0;
$totalConcerts = 0;
$totalVenues = 0;

// Query for Total Staff
$resultStaff = pg_query($conn, "SELECT COUNT(*) AS total_staff FROM staff");
if ($resultStaff) {
    $row = pg_fetch_assoc($resultStaff);
    $totalStaff = $row['total_staff'];
}

// Query for Total Concerts
$resultConcerts = pg_query($conn, "SELECT COUNT(*) AS total_concerts FROM concert");
if ($resultConcerts) {
    $row = pg_fetch_assoc($resultConcerts);
    $totalConcerts = $row['total_concerts'];
}

// Query for Total Venues
$resultVenues = pg_query($conn, "SELECT COUNT(*) AS total_venues FROM venue");
if ($resultVenues) {
    $row = pg_fetch_assoc($resultVenues);
    $totalVenues = $row['total_venues'];
}

// Close the database connection
pg_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Interface</title>
    <!-- <link rel="stylesheet" href="CSS/styles2.css"> -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Sidebar Styling */
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            margin: 5px 0;
            display: flex;
            align-items: center;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        .sidebar i {
            font-size: 1.2rem;
        }

        /* Main Content Styling */
        main {
            margin-left: 220px;
            padding: 30px;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 10px;
            color: white;
        }

        .card .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .card.bg-primary {
            background-color: #007bff;
        }

        .card.bg-success {
            background-color: #28a745;
        }

        .card.bg-warning {
            background-color: #ffc107;
        }

        .card.bg-danger {
            background-color: #dc3545;
        }

        .card h5 {
            font-weight: 600;
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        @media (max-width: 768px) {
            .sidebar {
                height: auto;
                position: static;
            }

            main {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
             <!-- Sidebar -->
            <nav class="col-md-2 sidebar">
                <a href="homepageStaff.php"><i class="bi bi-house"></i>Dashboard</a>
                <a href="concertStaff.php"><i class="bi bi-music-note-list"></i>Concert Management</a>
                <a href="venueStaff.php"><i class="bi bi-building"></i>Venue Management</a>
                <a href="vendorStaff.php"><i class="bi bi-shop"></i>Vendor Management</a>
                <a href="paymentStaff.php"><i class="bi bi-cash-stack"></i> Payment Management</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Welcome, <?php echo $_SESSION['position'] . ' ' . $_SESSION['name']; ?>
                </a>
                <a href="../logout.php" class="btn btn-danger ms-auto">Logout</a>
            </div>
        </nav>

        <!-- Dashboard Overview -->
        <div class="container mt-4">
            <h2 class="mb-4">Dashboard Overview</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-users"></i>
                            <h5>Total Staff</h5>
                            <h5><?php echo $totalStaff; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-building"></i>
                            <h5>Total Venues</h5>
                            <h5><?php echo $totalVenues; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-store"></i>
                            <h5>Total Vendors</h5>
                            <h5>6</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </main>

    <!-- Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
