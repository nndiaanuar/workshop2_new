<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="CSS/styles2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Login Form -->
    <div class="container my-5">
        <br><h1 class="text-center mb-4">Login</h1>
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">

                <div class="tab-content" id="authTabsContent">
                    <!-- Login Tab -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form method="POST" action="process_login.php">
                            <div class="mb-3">
                                <label for="username" class="form-label" style="font-family: 'Poppins', sans-serif;">Username</label>
                                <input type="text" name="username" class="form-control" id="username" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" style="font-family: 'Poppins', sans-serif;">Password</label>
                                <input type="password" name="password" class="form-control" id="password" style="font-family: 'Poppins', sans-serif;" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="font-family: 'Poppins', sans-serif;">Login</button>
                        </form>

                        <!-- Sign Up Hyperlink -->
                        <div class="text-center mt-3">
                            <p style="font-family: 'Poppins', sans-serif;">Don't have an account? 
                                <a href="register.html" class="text-primary" style="text-decoration: none; font-weight: 600;">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
