<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Details</title>
    <link rel="stylesheet" href="../CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .details-container {
            margin-top: 20px;
        }
        .info-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .info-box h4 {
            margin-bottom: 10px;
        }
        .register-btn {
            text-align: center;
            margin-top: 30px;
        }
        .table {
            width: 100%;
            margin-top: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .table-container {
            margin-top: 20px;
        }
        /* Table Rows */
        .table th, .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #343a40;
            color: #fff;
        }

        /* Table Hover Effects */
        .table tbody tr:hover {
            background-color: #f1f1f1;
            transform: scale(1.01); /* Subtle zoom effect */
            transition: transform 0.3s ease;
        }

        /* Action Buttons inside Table */
        .table .btn {
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .table .btn-warning {
            background-color: #f0ad4e;
            border-color: #eea236;
        }

        .table .btn-warning:hover {
            background-color: #ec971f;
        }

        .table .btn-danger {
            background-color: #d9534f;
            border-color: #c9302c;
        }

        .table .btn-danger:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="homepageCompany.php">
                <img src="../Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
            </a>                
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="manageArtist.php">Artist Management</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchconcert.php">Concert</a></li>
                    <li class="nav-item"><a class="nav-link" href="history.php">History</a></li>
                    <li class="nav-item"><a class="nav-link" href="profit.php">Profit</a></li>
                    <li class="nav-item"><a class="nav-link" href="../login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Main Content -->
     <div class="container my-5">
        <div class="container-fluid"></div>
        <h1 class="text-center mb-5">Concert Details</h1>

        <!-- Concert Details -->
        <div class="details-container row">
            <div class="col-md-8">
                <div class="info-box">
                    <h4>Concert Name: Live Music Fest</h4>
                    <p><strong>Venue:</strong> National Stadium</p>
                    <p><strong>Time:</strong> 7:00 PM - 11:00 PM</p>
                    <p><strong>Ticket Price:</strong> RM120</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <p><strong>Available Slots:</strong> 200</p>
                    <p><strong>Companies Joined:</strong> 3</p>
                </div>
            </div>
        </div>

        <!-- Artists Table -->
        <div class="table-container" style="font-family: 'Poppins', sans-serif;">
            <h4 class="mb-3">Artists Performing</h4>
            <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Artist Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Performance Slot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>28</td>
                    <td>Male</td>
                    <td>7:00 PM - 8:00 PM</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>Female</td>
                    <td>8:00 PM - 9:00 PM</td>
                </tr>
                <tr>
                    <td>Emily Brown</td>
                    <td>30</td>
                    <td>Female</td>
                    <td>9:00 PM - 10:00 PM</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Register Button -->
    <div class="register-btn text-center">
        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
    </div>

    <!-- Modal for Register -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register for Concert Slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="artistSelect" class="form-label">Select Artist</label>
                            <select class="form-select" id="artistSelect">
                                <option selected>Choose an artist</option>
                                <option value="Artist1">Artist 1</option>
                                <option value="Artist2">Artist 2</option>
                                <option value="Artist3">Artist 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="slotSelect" class="form-label">Available Slot</label>
                            <select class="form-select" id="slotSelect">
                                <option selected>Choose a slot</option>
                                <option value="Slot1">Slot 1 (9:00 AM - 10:00 AM)</option>
                                <option value="Slot2">Slot 2 (10:30 AM - 11:30 AM)</option>
                                <option value="Slot3">Slot 3 (1:00 PM - 2:00 PM)</option>
                                <!-- Example of a disabled slot -->
                                <option value="Slot4" disabled>Slot 4 (2:30 PM - 3:30 PM) - Taken</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ticketAmount" class="form-label">Number of Tickets</label>
                            <input type="number" class="form-control" id="ticketAmount" placeholder="Enter ticket amount">
                        </div>
                        <button type="submit" class="btn btn-success w-100">Confirm Registration</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>