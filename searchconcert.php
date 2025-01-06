<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Concert</title>
    <link rel="stylesheet" href="CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index_full.html">
                <img src="Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
            </a>                
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="wallet.html">My Wallet</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchconcert.html">Search Concert</a></li>
                    <li class="nav-item"><a class="nav-link" href="discountoffer.html">Discount Offer</a></li>
                    <li class="nav-item"><a class="nav-link" href="purchase.html">My Purchase</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">Search Concert</h1><br>
        
        <!-- Search Section -->
        <form>
            <div class="row g-3 justify-content-center text-center">
                <!-- Search by Name -->
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search by name" style="font-family: 'Poppins', sans-serif;">
                    </div>
                </div>

                <!-- Choose Date -->
                <div class="col-md-2">
                    <input type="date" class="form-control" style="font-family: 'Poppins', sans-serif;">
                </div>

                <!-- Ticket Price Range -->
                <div class="col-md-2">
                    <label for="priceRange" class="form-label" style="font-family: 'Poppins', sans-serif;">Ticket Price Range</label>
                    <input type="range" class="form-range" id="priceRange" min="0" max="500" step="10">
                    <div class="d-flex justify-content-between">
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px;">0</span>
                        <span style="font-family: 'Poppins', sans-serif; font-size: 13px;">500</span>
                    </div>
                </div>

                <!-- Status Filter -->
                <div class="col-md-2">
                    <label for="statusFilter" class="form-label" style="font-family: 'Poppins', sans-serif;">Status</label>
                    <select class="form-select" id="statusFilter" style="font-family: 'Poppins', sans-serif;">
                        <option value="all">All</option>
                        <option value="confirm">Confirm</option>
                        <option value="not-confirm">Not Confirm</option>
                    </select>
                </div>
            </div>

            <!-- Buttons -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary me-2" style="font-family: 'Poppins', sans-serif;">Submit</button>
                <button type="reset" class="btn btn-secondary" style="font-family: 'Poppins', sans-serif;">Reset</button>
            </div>
        </form>

        <!-- Search Results -->
        <div class="container my-5">
            <div class="row">
                <!-- Concert Card -->
                <div class="col-md-4 mb-4">
                    <div class="card home-card">
                        <img src="concert1.jpg" class="card-img-top" alt="Concert 1">
                        <div class="card-body">
                            <h5 class="card-title">Concert 1</h5>
                            <p class="card-text">Experience the energy of live performances with top local artists.</p>
                            <p class="card-text"><strong>Status:</strong> Not Confirm</p>
                            <a href="detailconcert.html" class="btn btn-outline-primary">View More</a>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Concerts -->
                <div class="col-md-4 mb-4">
                    <div class="card home-card">
                        <img src="concert2.jpg" class="card-img-top" alt="Concert 2">
                        <div class="card-body">
                            <h5 class="card-title">Concert 2</h5>
                            <p class="card-text">Discover the magic of live music with sensational performances.</p>
                            <p class="card-text"><strong>Status:</strong> Confirm</p>
                            <a href="detailconcert.html" class="btn btn-outline-primary">View More</a>
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