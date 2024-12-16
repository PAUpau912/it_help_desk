<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistechx IT solutions</title>
    <link rel="icon" href="/assets/img/Assistechx.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <!-- LOGIN FORM -->
        <div id="loginForm" class="login-container">
            <img src="/assets/img/Assistechx.jpg" alt="Logo">
            <h3 class="mb-4">Login to Your Account</h3>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com">
                <label for="loginEmail">Email address</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                <label for="loginPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 mb-3">Login</button>
            <span>Don't have an account? <a href="#" id="showRegister">Register here</a></span>
        </div>

        <!-- REGISTER FORM -->
        <div id="registerForm" class="register-container hidden">
            <img src="/assets/img/Assistechx.jpg" alt="Logo">
            <h3 class="mb-4">Create an Account</h3>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="registerName" placeholder="Full Name">
                <label for="registerName">Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="registerEmail" placeholder="name@example.com">
                <label for="registerEmail">Email address</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                <label for="registerPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 mb-3">Register</button>
            <span>Already have an account? <a href="#" id="showLogin">Login here</a></span>
        </div>
    </div>

    <script src="/assets/js/login.js"></script>
</body>
</html>
