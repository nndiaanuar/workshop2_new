<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profit</title>
    <link rel="stylesheet" href="../CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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

      <!-- Total Profit Section -->
    <div class="container my-5">
        <div class="text-center mx-auto p-3" style="max-width: 400px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <h2 style="font-family: 'Poppins', sans-serif;">Total Profit</h2>
            <p id="total-profit" class="fs-2 fw-bold text-success" style="font-family: 'Poppins', sans-serif;">RM 2500</p>
        </div>
    </div>

    <!-- Concert-Specific Profits -->
    <div class="container">
        <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">Concert Profits</h2>
        <div class="row g-4">
            <!-- Concert 1 -->
            <div class="col-md-4">
                <div class="card text-center p-4 h-100" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <h4>Rock Festival</h4>
                    <p class="mb-2"><strong>Tickets Sold:</strong> 3</p>
                    <p class="mb-0"><strong>Profit:</strong> RM 750</p>
                </div>
            </div>
            <!-- Concert 2 -->
            <div class="col-md-4">
                <div class="card text-center p-4 h-100" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <h4>Jazz Night</h4>
                    <p class="mb-2"><strong>Tickets Sold:</strong> 2</p>
                    <p class="mb-0"><strong>Profit:</strong> RM 450</p>
                </div>
            </div>
            <!-- Concert 3 -->
            <div class="col-md-4">
                <div class="card text-center p-4 h-100" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <h4>Indie Vibes</h4>
                    <p class="mb-2"><strong>Tickets Sold:</strong> 5</p>
                    <p class="mb-0"><strong>Profit:</strong> RM 1300</p>
                </div>
            </div>
        </div>
    </div><br><br>

        <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>