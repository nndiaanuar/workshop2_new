<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit or Drop Artist</title>
    <link rel="stylesheet" href="../CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table {
            width: 100%;
            margin-top: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
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
            <a class="navbar-brand" href="homepageCompany.html">
                <img src="../Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
            </a>                
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="manageArtist.html">Artist Management</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchconcert.html">Concert</a></li>
                    <li class="nav-item"><a class="nav-link" href="history.html">History</a></li>
                    <li class="nav-item"><a class="nav-link" href="profit.html">Profit</a></li>
                    <li class="nav-item"><a class="nav-link" href="../login.html">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="container-fluid"></div>
        <h1 class="text-center mb-5">Edit or Drop Artist</h1>
        
        <!-- Search Bar -->
        <div class="search-bar d-flex justify-content-end" style="font-family: 'Poppins', sans-serif;">
            <div class="input-group" style="width: 320px;">
                <input type="text" class="form-control" placeholder="Search artist by name" id="searchConcert">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-search"></i> Search
                </button>
            </div>
        </div>
        
        <table class="table table-bordered table-hover" style="font-family: 'Poppins', sans-serif;">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>IC Number</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>980101-14-5678</td>
                    <td>Male</td>
                    <td>012-3456789</td>
                    <td>johndoe@example.com</td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary btn-edit">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Drop</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>970202-11-3456</td>
                    <td>Female</td>
                    <td>011-9876543</td>
                    <td>janesmith@example.com</td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary btn-edit">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Drop</button>
                    </td>
                </tr>
                <tr>
                    <td>Adam Lee</td>
                    <td>960303-10-2345</td>
                    <td>Male</td>
                    <td>010-1122334</td>
                    <td>adamlee@example.com</td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary btn-edit">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Drop</button>
                    </td>
                </tr>
            </tbody>
        </table>
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