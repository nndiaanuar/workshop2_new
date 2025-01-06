<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Offer</title>
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
        <h1 class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">Discount Offers</h1>
        <div class="row g-4">
            <!-- Vendor 1 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">KFC</h5>
                        <p class="card-text text-muted" style="font-family: 'Poppins', sans-serif;">Special discounts for app users!</p>
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#vendorModal" style="font-family: 'Poppins', sans-serif;" onclick="updateModal('KFC', 'KFC offers a 15% discount to app customers at all stores in Malaysia. Provide your username and customer ID to the cashier to enjoy the offer.')">Details</button>
                    </div>
                </div>
            </div>
            <!-- Vendor 2 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Starbucks</h5>
                        <p class="card-text text-muted" style="font-family: 'Poppins', sans-serif;">Enjoy exclusive coffee deals!</p>
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#vendorModal" style="font-family: 'Poppins', sans-serif;" onclick="updateModal('Starbucks', 'Starbucks offers a Buy 1 Get 1 Free deal on selected beverages every Friday for app customers. Show your customer ID at checkout to redeem the offer.')">Details</button>
                    </div>
                </div>
            </div>
            <!-- Vendor 3 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Domino's Pizza</h5>
                        <p class="card-text text-muted" style="font-family: 'Poppins', sans-serif;">Pizza discounts just for you!</p>
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#vendorModal" style="font-family: 'Poppins', sans-serif;" onclick="updateModal('Dominos Pizza', 'Dominos Pizza offers a 20% discount on large pizzas for app customers. Use the promo code provided in your app account to claim the offer.')">Details</button>
                    </div>
                </div>
            </div>
            <!-- Vendor 4 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Watsons</h5>
                        <p class="card-text text-muted" style="font-family: 'Poppins', sans-serif;">Health & beauty savings!</p>
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#vendorModal" style="font-family: 'Poppins', sans-serif;" onclick="updateModal('Watsons', 'Watsons offers 10% cashback for purchases over RM50 at all outlets in Malaysia. Provide your username during checkout to receive the cashback.')">Details</button>
                    </div>
                </div>
            </div>
            <!-- Vendor 5 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Uniqlo</h5>
                        <p class="card-text text-muted" style="font-family: 'Poppins', sans-serif;">Stylish discounts await!</p>
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#vendorModal" style="font-family: 'Poppins', sans-serif;" onclick="updateModal('Uniqlo', 'Uniqlo offers RM20 off for purchases over RM150. Show your app account at the counter to redeem this offer.')">Details</button>
                    </div>
                </div>
            </div>
            <!-- Vendor 6 -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Grab</h5>
                        <p class="card-text text-muted" style="font-family: 'Poppins', sans-serif;">Ride and dine discounts!</p>
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#vendorModal" style="font-family: 'Poppins', sans-serif;" onclick="updateModal('Grab', 'Grab offers RM5 off on every ride or food order for app customers. Use your customer ID to apply the discount in the app.')">Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div class="modal fade" id="vendorModal" tabindex="-1" aria-labelledby="vendorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vendorModalLabel">Vendor Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="vendorModalBody">
                    <!-- Vendor details will be inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateModal(title, content) {
            document.getElementById('vendorModalLabel').innerText = title;
            document.getElementById('vendorModalBody').innerText = content;
        }
    </script>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>