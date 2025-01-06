<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Concert</title>
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
                <a href="homepageStaff.html"><i class="bi bi-house"></i> Dashboard</a>
                <a href="manageStaff.html"><i class="bi bi-people"></i> Staff Management</a>
                <a href="manageConcert.html"><i class="bi bi-music-note-list"></i> Concert Management</a>
                <a href="manageVenue.html"><i class="bi bi-building"></i> Venue Management</a>
                <a href="manageVendor.html"><i class="bi bi-shop"></i> Vendor Management</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Add Concert</a>
                <a href="logout.html" class="btn btn-danger ms-auto">Logout</a>
            </div>
        </nav>

        <!-- Add Concert Form -->
        <div class="container mt-4">
            <div class="form-container">
                <h2 class="mb-4">Add New Concert</h2>
                <form action="submit-add-concert.php" method="POST">
                    <div class="form-group">
                        <label for="title">Concert Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter concert title" required>
                    </div>
                    <div class="form-group">
                        <label for="venue">Venue</label>
                        <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter concert venue" required>
                    </div>
                    <div class="form-group">
                        <label for="totalSlot">Total Slots</label>
                        <input type="number" class="form-control" id="totalSlot" name="totalSlot" placeholder="Enter total slots available" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Concert Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="percentagePerSlot">Revenue Percentage Per Ticket Sale</label>
                        <input type="number" class="form-control" id="percentagePerSlot" name="percentagePerSlot" placeholder="Enter percentage (e.g., 10)" required>
                        <small class="form-text text-muted">Enter the percentage of revenue per ticket sale that your system will take.</small>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="upcoming">Upcoming</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add Concert</button>
                        <a href="manageConcert.html" class="btn btn-secondary ml-2">Cancel</a>
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
