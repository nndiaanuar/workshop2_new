<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Concert</title>
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

    <div class="container my-5" style="font-family: 'Poppins', sans-serif;">

        <!-- Side-by-Side Boxes -->
        <div class="row">
            <!-- Concert Details Box -->
            <div class="col-md-6">
                <div class="card p-4 h-100">
                    <h3 style="font-family: 'Poppins', sans-serif;">Concert Details</h3>
                    <ul class="list-unstyled mb-4">
                        <li><strong>Name:</strong> Live Music Night</li>
                        <li><strong>Venue:</strong> City Concert Hall</li>
                        <li><strong>Date:</strong> 25th December 2024</li>
                        <li><strong>Time:</strong> 7:00 PM</li>
                        <li><strong>Status:</strong> Confirm</li>
                    </ul>
                    <div>
                        <h5 style="font-family: 'Poppins', sans-serif;">Buy Ticket</h5>
                        <div class="d-flex align-items-center mt-3">
                            <button class="btn btn-primary me-3" style="font-family: 'Poppins', sans-serif;">Buy Ticket</button>
                            <input type="number" min="1" max="10" class="form-control" placeholder="Enter amount" style="width: 150px; font-family: 'Poppins', sans-serif;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Artists Performed Box -->
            <div class="col-md-6">
                <div class="card p-4 h-100">
                    <h3 style="font-family: 'Poppins', sans-serif;">Artists Performed</h3>
                    <div class="border p-3" style="border-radius: 10px;">
                        <div class="row">
                            <!-- Column Headers -->
                            <div class="col-6">
                                <h5 style="font-family: 'Poppins', sans-serif;">Name</h5>
                                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">Artist 1</p>
                                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">Artist 2</p>
                                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">Artist 3</p>
                            </div>
                            <div class="col-6">
                                <h5 style="font-family: 'Poppins', sans-serif;">Slot</h5>
                                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">7:00 PM - 7:30 PM</p>
                                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">7:30 PM - 8:00 PM</p>
                                <p class="text-muted" style="font-family: 'Poppins', sans-serif;">8:00 PM - 8:30 PM</p>
                            </div>
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