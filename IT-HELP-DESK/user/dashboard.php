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
            <!-- FILTERS -->
            <h2>Your Ticket</h2>
            <div class="filters d-flex justify-content-between">
                <!-- Filter by Status -->
                <div class="filter-status">
                    <label for="filter-status" class="form-label">Filter by Status</label>
                    <select id="filter-status" class="form-select">
                        <option value="">All</option>
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>

                <!-- Filter by Date -->
                <div class="filter-date">
                    <label for="filter-date" class="form-label">Filter by Date</label>
                    <input type="date" id="filter-date" class="form-control">
                </div>
            </div>

            <!-- TABLE -->
            <table class="table" id="ticket-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ticket ID</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Status</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Action</th>
                        <th scope="col">Created Date</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr data-ticket-id="12345" data-status="open" data-date="2024-12-12" data-email="john.doe@example.com" data-solution="Rebooted the system" data-feedback="The issue was resolved after restarting the router.">
                        <th scope="row">1</th>
                        <td class="ticket-id">#12345</td>
                        <td class="ticket-subject">Issue with the Network</td>
                        <td class="ticket-status">Open</td>
                        <td class="ticket-priority">Urgent</td>
                        <td><a href="javascript:void(0);" onclick="openModal(12345)">View Details</a></td>
                        <td class="ticket-created-date">2024-12-12</td>
                    </tr>
                    <tr data-ticket-id="1240" data-status="closed" data-date="2024-12-10" data-email="jane.doe@example.com" data-solution="Updated software" data-feedback="Resolved after installing the latest software update.">
                        <th scope="row">2</th>
                        <td class="ticket-id">#1240</td>
                        <td class="ticket-subject">Issue with Computer</td>
                        <td class="ticket-status">Closed</td>
                        <td class="ticket-priority">Normal</td>
                        <td><a href="javascript:void(0);" onclick="openModal(1240)">View Details</a></td>
                        <td class="ticket-created-date">2024-12-10</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ticketModalLabel">Ticket Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Ticket details will be dynamically inserted here -->
                        <div id="ticket-details">
                            <p><strong>Ticket ID:</strong> <span id="ticket-id"></span></p>
                            <p><strong>Subject:</strong> <span id="ticket-subject"></span></p>
                            <p><strong>Status:</strong> <span id="ticket-status"></span></p>
                            <p><strong>Priority:</strong> <span id="ticket-priority"></span></p>
                            <p><strong>Created Date:</strong> <span id="ticket-created-date"></span></p>
                            
                              <!-- Additional Fields -->
                            <p><strong>Email Address:</strong> <span id="ticket-email"></span></p>
                            <p><strong>Solution:</strong> <span id="ticket-solution"></span></p>
                            <p><strong>Feedback:</strong> <span id="ticket-feedback"></span></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add this to the bottom of the body to load Bootstrap JS and Modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/dashboard.js"></script>
</body>
</html>
