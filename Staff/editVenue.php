<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Venue</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

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

        main {
            margin-left: 220px;
            padding: 30px;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 sidebar">
                <a href="homepageStaff.html"><i class="bi bi-house"></i> Dashboard</a>
                <a href="manageStaff.html"><i class="bi bi-people"></i> Staff Management</a>
                <a href="manageConcert.html"><i class="bi bi-music-note-list"></i> Concert Management</a>
                <a href="manageVenue.html"><i class="bi bi-building"></i> Venue Management</a>
                <a href="manageVendor.html"><i class="bi bi-shop"></i> Vendor Management</a>
            </nav>
        </div>
    </div>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Edit Venue</a>
                <a href="logout.html" class="btn btn-danger ms-auto">Logout</a>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="form-container">
                <h2 class="mb-4">Edit Venue Information</h2>
                <form action="submit-edit-venue.php" method="POST">
                    <input type="hidden" name="venueId" value="1"> <!-- Replace with dynamic ID -->
                    <div class="form-group">
                        <label for="name">Venue Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="Stadium ABC" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="City Center" required>
                    </div>
                    <div class="form-group">
                        <label for="capacity">Capacity</label>
                        <input type="number" class="form-control" id="capacity" name="capacity" value="2000" required>
                    </div>
                    <div class="form-group">
                        <label for="rentalCost">Rental Cost</label>
                        <input type="number" class="form-control" id="rentalCost" name="rentalCost" value="5000" required>
                    </div>
                    <div class="form-group">
                        <label for="minTicketSales">Minimum Ticket Sales</label>
                        <input type="number" class="form-control" id="minTicketSales" name="minTicketSales" value="1500" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Update Venue</button>
                        <a href="manageVenue.html" class="btn btn-secondary ml-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
