<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Vendor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Sidebar Styling */
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            margin: 5px 0;
            display: flex;
            align-items: center;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        .sidebar i {
            font-size: 1.2rem;
        }

        /* Main Content Styling */
        main {
            margin-left: 220px;
            padding: 30px;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
        }

        /* Table Styling */
        .table th, .table td {
            vertical-align: middle;
        }

        .table th {
            text-align: left;
        }
        
        .table tbody tr:hover {
            transform: scale(1.01);
            transition: transform 0.3s ease;
        }
        @media (max-width: 768px) {
            .sidebar {
                height: auto;
                position: static;
            }

            main {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar">
                <a href="homepageStaff.php"><i class="bi bi-house"></i>Dashboard</a>
                <a href="concertStaff.php"><i class="bi bi-music-note-list"></i>Concert Management</a>
                <a href="venueStaff.php"><i class="bi bi-building"></i>Venue Management</a>
                <a href="vendorStaff.php"><i class="bi bi-shop"></i>Vendor Management</a>
                <a href="paymentStaff.php"><i class="bi bi-cash-stack"></i> Payment Management</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Manage Vendor</a>
                <a href="../logout.php" class="btn btn-danger ms-auto">Logout</a>
            </div>
        </nav>

        <!-- Vendor Management Table -->
        <div class="container mt-4">
            <h2 class="mb-4">Vendor List</h2>

            <!-- Table -->
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th>Name</th>
                        <th>Short Offer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>KFC</td>
                    <td>Special discounts for app users!</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#vendorModal" onclick="updateModal('KFC', 'KFC offers a 15% discount to app customers at all stores in Malaysia. Provide your username and customer ID to the cashier to enjoy the offer.')">Details</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Starbucks</td>
                    <td>Enjoy exclusive coffee deals!</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#vendorModal" onclick="updateModal('Starbucks', 'Starbucks offers a Buy 1 Get 1 Free deal on selected beverages every Friday for app customers. Show your customer ID at checkout to redeem the offer.')">Details</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Domino's Pizza</td>
                    <td>Pizza discounts just for you!</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#vendorModal" onclick="updateModal('Dominos Pizza', 'Dominos Pizza offers a 20% discount on large pizzas for app customers. Use the promo code provided in your app account to claim the offer.')">Details</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Watsons</td>
                    <td>Health & beauty savings!</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#vendorModal" onclick="updateModal('Watsons', 'Watsons offers 10% cashback for purchases over RM50 at all outlets in Malaysia. Provide your username during checkout to receive the cashback.')">Details</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Uniqlo</td>
                    <td>Stylish discounts await!</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#vendorModal" onclick="updateModal('Uniqlo', 'Uniqlo offers RM20 off for purchases over RM150. Show your app account at the counter to redeem this offer.')">Details</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Grab</td>
                    <td>Ride and dine discounts!</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#vendorModal" onclick="updateModal('Grab', 'Grab offers RM5 off on every ride or food order for app customers. Use your customer ID to apply the discount in the app.')">Details</button>
                    </td>
                </tr>
            </tbody>
            </table>

            <!-- Vendor Modal -->
            <div class="modal fade" id="vendorModal" tabindex="-1" aria-labelledby="vendorModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="vendorModalLabel">Vendor Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p id="vendorDetails"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function updateModal(title, details) {
        // Set modal title and body content
        document.getElementById("vendorModalLabel").textContent = title;
        document.getElementById("vendorDetails").textContent = details;
    }
    </script>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
