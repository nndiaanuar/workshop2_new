<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Artist</title>
    <link rel="stylesheet" href="../CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .option-card {
            margin: 1rem 0;
            padding: 1.5rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: 0.3s;
        }
        .option-card:hover {
            border-color: #007bff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }
        .btn-custom {
            width: 100%;
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

    <div class="container my-5" style="font-family: 'Poppins', sans-serif;">
        <h1 class="text-center mb-5">Register Artist</h1>
        <div class="row g-4">
        <!-- Flex Container for Options -->
        <div class="d-flex justify-content-center gap-4">
            <!-- Option 1: Register Existing Artist -->
            <div class="option-card border rounded p-4 text-center" 
                 style="flex: 1; max-width: 350px; min-height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                <h4>Register Existing Artist</h4>
                <p>If the artist is already part of the system, link them to your concert/event.</p>
                <button class="btn btn-outline-primary btn-custom mt-auto" data-bs-toggle="modal" data-bs-target="#existingArtistModal">Proceed</button>
            </div>
    
            <!-- Option 2: Register New Artist -->
            <div class="option-card border rounded p-4 text-center" 
                 style="flex: 1; max-width: 350px; min-height: 200px; display: flex; flex-direction: column; justify-content: space-between;">
                <h4>Register New Artist</h4>
                <p>Add a new artist to the system by filling out their details.</p>
                <button class="btn btn-outline-success btn-custom mt-auto" data-bs-toggle="modal" data-bs-target="#newArtistModal">Proceed</button>
            </div>
        </div>
    </div>
    
        <!-- Modal for Existing Artist -->
        <div class="modal fade" id="existingArtistModal" tabindex="-1" aria-labelledby="existingArtistModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="existingArtistModalLabel">Register Existing Artist</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-family: 'Poppins', sans-serif;">
                        <form>
                            <div class="mb-3">
                                <label for="artistIC" class="form-label">Select IC Number</label>
                                <select class="form-select" id="artistIC">
                                    <option selected>Select IC number</option>
                                    <option value="IC1">980101-14-5678</option>
                                    <option value="IC2">980202-15-6789</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="artistName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="artistName" placeholder="Artist Name">
                            </div>
                            <div class="mb-3">
                                <label for="artistPhone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="artistPhone" placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <label for="artistEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="artistEmail" placeholder="Email Address">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register Artist</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Modal for New Artist -->
        <div class="modal fade" id="newArtistModal" tabindex="-1" aria-labelledby="newArtistModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newArtistModalLabel">Register New Artist</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="font-family: 'Poppins', sans-serif;">
                        <form>
                            <div class="mb-3">
                                <label for="newArtistName" class="form-label">Artist Name</label>
                                <input type="text" class="form-control" id="newArtistName" placeholder="Enter artist name">
                            </div>
                            <div class="mb-3">
                                <label for="newArtistIC" class="form-label">IC Number</label>
                                <input type="text" class="form-control" id="newArtistIC" placeholder="Enter IC number">
                            </div>
                            <div class="mb-3">
                                <label for="newArtistGender" class="form-label">Gender</label>
                                <select class="form-select" id="newArtistGender">
                                    <option selected>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="newArtistPhone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="newArtistPhone" placeholder="Enter phone number">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Register Artist</button>
                        </form>
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