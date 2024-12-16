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

        <!-- MAIN CONTENT -->
        <div class="content">
          <h4>Knowledge Base</h4>
           <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" class="form-control me-2" placeholder="Search for articles" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>

        <div class="knowledge-container text-center">
    <div class="row gx-4">
        <!-- Article 1 -->
        <div class="col-md-4">
            <div class="knowledge-item">
                <h5>How to Reset your Password</h5>
                <p>Category: Acoount</p>
                <button onclick="location.href='article1.php';">Read More</button>
            </div>
        </div>
        <!-- Article 2 -->
        <div class="col-md-4">
            <div class="knowledge-item">
                <h5>Troubleshooting Printer Issues</h5>
                <p>Category: Hardware</p>
                <button onclick="location.href='article2.php';">Read More</button>
            </div>
        </div>
        <!-- Article 3 -->
        <div class="col-md-4">
            <div class="knowledge-item">
                <h5>Reseting Software Installation</h5>
                <p>Category: Software</p>
                <button onclick="location.href='article3.php';">Read More</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
