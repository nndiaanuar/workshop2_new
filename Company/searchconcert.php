<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Concert</title>
    <link rel="stylesheet" href="../CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .search-bar {
            margin: 10px 0;
        }
        .concert-container {
            margin-top: 20px;
        }
        .concert-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .concert-img {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            text-align: center;
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
        <h1 class="text-center mb-4">Concerts</h1>

        <!-- Search Bar -->
        <div class="search-bar d-flex justify-content-end" style="font-family: 'Poppins', sans-serif;">
            <div class="input-group" style="width: 320px;">
                <input type="text" class="form-control" placeholder="Search concert by name" id="searchConcert">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-search"></i> Search
                </button>
            </div>
        </div>

        <!-- Concert Display -->
        <div class="concert-container" style="font-family: 'Poppins', sans-serif;">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card concert-card">
                        <img src="concert1.jpg" class="card-img-top concert-img" alt="Concert 1">
                        <div class="card-body" style="flex: 1; max-width: 350px; min-height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="card-title">Concert 1</h5>
                            <p class="card-text">Experience the best of live performances.</p>
                            <a href="concertdetails.html" class="btn btn-outline-primary" style="font-family: 'Poppins', sans-serif;">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card concert-card">
                        <img src="concert2.jpg" class="card-img-top concert-img" alt="Concert 2">
                        <div class="card-body" style="flex: 1; max-width: 350px; min-height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="card-title">Concert 2</h5>
                            <p class="card-text">A night of unforgettable music.</p>
                            <a href="concertdetails.html" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card concert-card">
                        <img src="concert3.jpg" class="card-img-top concert-img" alt="Concert 3">
                        <div class="card-body" style="flex: 1; max-width: 350px; min-height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                            <h5 class="card-title">Concert 3</h5>
                            <p class="card-text">Feel the rhythm, feel the vibe.</p>
                            <a href="concertdetails.html" class="btn btn-outline-primary">View Details</a>
                        </div>
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