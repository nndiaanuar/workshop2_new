<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
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

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar">
                <a href="DashboardAdmin.php"><i class="bi bi-house"></i> Dashboard</a>
                <a href="manageStaff.php"><i class="bi bi-people"></i> Staff Management</a>
                <a href="manageConcert.php"><i class="bi bi-music-note-list"></i> Concert Management</a>
                <a href="manageVenue.php"><i class="bi bi-building"></i> Venue Management</a>
                <a href="manageVendor.php"><i class="bi bi-shop"></i> Vendor Management</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Edit Staff</a>
                <a href="../logout.php" class="btn btn-danger ms-auto">Logout</a>
            </div>
        </nav>

        <!-- Edit Staff Form -->
        <div class="container mt-4">
            <div class="form-container">
                <h2 class="mb-4">Edit Staff Information</h2>
                <form action="submit-edit-staff.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Aiman" required>
                    </div>
                    <div class="form-group">
                        <label for="ic_no">IC No</label>
                        <input type="text" class="form-control" id="ic_no" name="ic_no" value="980101-01-1234" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" checked>
                            <label class="form-check-label" for="genderMale">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                            <label class="form-check-label" for="genderFemale">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="+60123456789" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" value="Manager" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Update Staff</button>
                        <a href="manageStaff.php" class="btn btn-secondary ml-2">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </main>

    <!-- Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
