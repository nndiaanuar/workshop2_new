<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wallet</title>
    <link rel="stylesheet" href="CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index_full.php">
                <img src="Images/logo.png" alt="Concert Logo" style="height: 40px; margin-right: 10px;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 24px;">Concert Ticketing</span>
            </a>                
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="wallet.php">My Wallet</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchconcert.php">Search Concert</a></li>
                    <li class="nav-item"><a class="nav-link" href="discountoffer.php">Discount Offer</a></li>
                    <li class="nav-item"><a class="nav-link" href="purchase.php">My Purchase</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">My Wallet</h1>
        <!-- Enlarged Wallet Box -->
        <div class="card mx-auto text-center p-4" style="max-width: 700px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <!-- Wallet Balance -->
                <div class="mb-4">
                    <h3 class="fw-bold" style="font-family: 'Poppins', sans-serif;">Wallet Balance</h3>
                    <p id="wallet-balance" class="fs-2 text-success" style="font-family: 'Poppins', sans-serif;">RM 0.00</p>
                </div>
                
                <!-- Information Section -->
                <div class="mb-4 text-start" style="font-family: 'Poppins', sans-serif;">
                    <p>* This money can only be used to buy from selected vendors and for ticket purchases.</p>
                    <p>* Money refunded will be returned here.</p>
                </div>

                <!-- Buttons Section -->
                <div class="d-flex justify-content-between gap-3">
                    <a href="discountoffer.php" class="btn btn-primary w-100" style="font-family: 'Poppins', sans-serif;">View Vendors</a>
                    <a href="searchconcert.php" class="btn btn-primary w-100" style="font-family: 'Poppins', sans-serif;">View Concerts</a>
                    <a href="vendors.php" class="btn btn-success w-100" style="font-family: 'Poppins', sans-serif;">Top Up</a>
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