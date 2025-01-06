<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Management</title>
    <link rel="stylesheet" href="../CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .option-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.3s;
        }
        .option-card:hover {
            transform: scale(1.05);
        }
        .option-card h5 {
            margin-bottom: 15px;
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
    <div class="container my-5" style="font-family: 'Poppins', sans-serif;">
        <h1 class="text-center mb-5">Manage Artists</h1>
        <div class="row g-4">
            <!-- View Current Artists -->
            <div class="col-md-4">
                <div class="option-card text-center">
                    <h5>View Current Artists</h5>
                    <p>View the list of artists currently registered in the system.</p>
                    <a href="viewArtists.html" class="btn btn-primary">View Artists</a>
                </div>
            </div>
            <!-- Register New Artist -->
            <div class="col-md-4">
                <div class="option-card text-center">
                    <h5>Register New Artist</h5>
                    <p>Add new artists to the database with complete details.</p>
                    <a href="registerArtist.html" class="btn btn-success">Register Artist</a>
                </div>
            </div>
            <!-- Edit or Drop Artist -->
            <div class="col-md-4">
                <div class="option-card text-center">
                    <h5>Edit or Drop Artist Data</h5>
                    <p>Modify artist details or remove an artist from the system.</p>
                    <a href="editOrDropArtist.html" class="btn btn-danger">Edit/Drop Artist</a>
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