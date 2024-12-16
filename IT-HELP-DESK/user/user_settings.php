<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/Assistechx.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css">
</head>
<body>
    <!-- HEADER -->
    <header class="header-container">
        <a href="/" class="logo">
            <img src="/assets/img/Assistechx.jpg" alt="Assistechx Logo">
            <span>Assistechx</span>
        </a>

        <div class="header-buttons">
            <a href="ticket.php"><button>Create Ticket</button></a>
            <button>Logout</button>
        </div>
    </header>

    <!-- MAIN CONTAINER -->
    <div class="main-container">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link d-flex align-items-center <?php echo $current_page == 'dashboard.php' ? 'active' : ''; ?>">
                    <img class="icon me-2" src="/assets/img/ticket.png" alt="Ticket Icon">
                    My Ticket
                </a>
            </li>
            <li>
                <a href="user_settings.php" class="nav-link d-flex align-items-center <?php echo $current_page == 'user_settings.php' ? 'active' : ''; ?>">
                    <img class="icon me-2" src="/assets/img/user.png" alt="User Icon">
                    User Settings
                </a>
            </li>
            <li>
                <a href="knowledge_base.php" class="nav-link d-flex align-items-center <?php echo $current_page == 'knowledge_base.php' ? 'active' : ''; ?>">
                    <img class="icon me-2" src="/assets/img/document.png" alt="Document Icon">
                    Knowledge Base
                </a>
            </li>
        </ul>
        <hr>
    </div>
<!--USER SETINNGS-->
    <div class="user-content">
    <h4>Personal Information</h4>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" id="FirstName" placeholder="First Name">
        <label for="FirstName">First Name</label>
    </div>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" id="LastName" placeholder="Last Name">
        <label for="LastName">Last Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com">
        <label for="loginEmail">Email address</label>
    </div>
    <button class="btn btn-primary w-100 mb-3">Save</button>
</div>

<div class="user-content">
    <h4>Change Password</h4>
    <div class="form-floating mb-4">
        <input type="password" class="form-control" id="CurrentPassword" placeholder="Current Password">
        <label for="CurrentPassword">Current Password</label>
    </div>
    <div class="form-floating mb-4">
        <input type="password" class="form-control" id="NewPassword" placeholder="New Password">
        <label for="NewPassword">New Password</label>
    </div>
    <div class="form-floating mb-4">
        <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password">
        <label for="ConfirmPassword">Confirm Password</label>
    </div>
    <button class="btn btn-primary w-100 mb-3">Save</button>
</div>

</body>
</html>
