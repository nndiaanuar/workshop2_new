<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Staff</title>
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

         /* Table Hover Effects */
         .table tbody tr:hover {
            transform: scale(1.01); /* Subtle zoom effect */
            transition: transform 0.3s ease;
        }

        /* Table Styling */
        .table th, .table td {
            vertical-align: middle;
        }

        .table th {
            text-align: left;
        }

        /* Button Styling */
        .btn-sm {
            padding: 5px 10px;
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
                <a href="homepageStaff.php"><i class="bi bi-house"></i> Dashboard</a>
                <a href="manageStaff.php"><i class="bi bi-people"></i> Staff Management</a>
                <a href="manageConcert.php"><i class="bi bi-music-note-list"></i> Concert Management</a>
                <a href="manageVenue.php"><i class="bi bi-building"></i> Venue Management</a>
                <a href="manageVendor.php"><i class="bi bi-shop"></i> Vendor Management</a>
                <a href="managePayment.php"><i class="bi bi-cash-stack"></i> Payment Management</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Manage Staff</a>
                <a href="../logout.php" class="btn btn-danger ms-auto">Logout</a>
            </div>
        </nav>

        <!-- Staff Management Table -->
        <div class="container mt-4">
            <h2 class="mb-4">Staff List</h2>
            
            <!-- Table -->
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">IC No</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Position</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Aiman</td>
                        <td>980101-01-1234</td>
                        <td>Male</td>
                        <td>+60123456789</td>
                        <td>Manager</td>
                        <td>
                            <a href="editStaff.php" class="btn btn-warning btn-sm">Edit</a>
                            <a href="deleteStaff.php" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Siti</td>
                        <td>970202-02-2345</td>
                        <td>Female</td>
                        <td>+60198765432</td>
                        <td>Assistant</td>
                        <td>
                            <a href="editStaff.php" class="btn btn-warning btn-sm">Edit</a>
                            <a href="deleteStaff.php" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Add New Staff Button -->
            <div class="mt-4">
                <a href="addStaff.php" class="btn btn-success">Add New Staff</a>
            </div>
        </div>
    </main>

    <!-- Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
