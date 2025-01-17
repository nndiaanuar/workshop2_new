<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Purchase</title>
    <link rel="stylesheet" href="CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .purchase-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }
    </style>

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
        <h1 class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">My Purchases</h1>
        <div class="d-flex justify-content-end mb-3">
            <select id="filterDropdown" class="form-select w-auto" onchange="filterPurchases()">
                <option value="All">All</option>
                <option value="Complete">Complete</option>
                <option value="Upcoming">Upcoming</option>
            </select>
        </div>
        <div id="purchaseResults">
            <!-- Purchases will be displayed here -->
        </div>
    </div>

    <script>
        const purchases = [
            { name: "Concert A", price: "RM150", tickets: 2, status: "Complete" },
            { name: "Concert B", price: "RM200", tickets: 1, status: "Upcoming" },
            { name: "Concert C", price: "RM120", tickets: 4, status: "Complete" },
            { name: "Concert D", price: "RM300", tickets: 2, status: "Upcoming" }
        ];

        function displayPurchases(filteredPurchases) {
            const purchaseResults = document.getElementById('purchaseResults');
            purchaseResults.innerHTML = '';
            filteredPurchases.forEach(purchase => {
                const purchaseCard = `
                    <div class="purchase-card mb-3">
                        <h5>${purchase.name}</h5>
                        <p>Price: ${purchase.price}</p>
                        <p>Tickets Purchased: ${purchase.tickets}</p>
                        <p>Status: <strong>${purchase.status}</strong></p>
                    </div>
                `;
                purchaseResults.innerHTML += purchaseCard;
            });
        }

        function filterPurchases() {
            const filter = document.getElementById('filterDropdown').value;
            const filteredPurchases = purchases.filter(purchase =>
                filter === "All" || purchase.status === filter
            );
            displayPurchases(filteredPurchases);
        }

        // Display all purchases by default
        window.onload = () => filterPurchases();
    </script>
    
     <!-- Footer -->
     <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Concert Ticketing System. All rights reserved.</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>