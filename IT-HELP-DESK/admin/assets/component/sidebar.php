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
    <link rel="stylesheet" href="/admin/assets/css/component.css">
</head>
<body>
    <!-- MAIN CONTAINER -->
    <div class="main-container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link d-flex align-items-center <?php echo $current_page == 'dashboard.php' ? 'active' : ''; ?>">
                        <img class="icon me-2" src="/admin/assets/img/pie_chart.png" alt="Ticket Icon">
                        Overview
                    </a>
                </li>
                <li>
                    <a href="Admin_Control.php" class="nav-link d-flex align-items-center <?php echo $current_page == 'Admin_Control.php' ? 'active' : ''; ?>">
                        <img class="icon me-2" src="/assets/img/user.png" alt="User Icon">
                        Admin Control
                    </a>
                </li>
                <li>
                    <a href="Tickets.php" class="nav-link d-flex align-items-center <?php echo $current_page == 'Tickets.php' ? 'active' : ''; ?>">
                        <img class="icon me-2" src="/assets/img/ticket.png" alt="Document Icon">
                        All Tickets
                    </a>
                </li>
            </ul>
            <hr>
        </div>
    </div>
</body>
</html>