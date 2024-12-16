<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistechx IT solutions</title>
    <link rel="icon" href="/assets/img/Assistechx.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: "Poppins",sans-serif;
            overflow-x: hidden;

            background-image: url("/admin/assets/img/bg.jpg");
            background-repeat: no-repeat;
            background-size: cover; /* Ensures the image covers the entire screen */
            background-position: center; /* Centers the image */
        }
        #loginForm {
            background-color: #f8f9fa; /* Light gray background */
            border: 1px solid #ced4da; /* Border color */
            border-radius: 10px; /* Rounded corners */
            padding: 30px; /* Inner padding */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            width: 100%;
            max-width: 400px; /* Limit form width */
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <!-- LOGIN FORM -->
        <div id="loginForm" class="login-container">
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
        </div>
    </div>

    <script src="/assets/js/login.js"></script>
</body>
</html>
