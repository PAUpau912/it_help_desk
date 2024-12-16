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
    <link rel="stylesheet" href="/admin/assets/css/ticket.css">
</head>
<body>
   <!-- HEADER -->
   <div id="header-placeholder" class="header-container">
        Loading Header...
    </div>

    <!-- SIDEBAR -->
    <div id="sidebar-placeholder" class="sidebar">
        Loading Sidebar...
    </div>
    <div class="content">
        <!-- HEADER -->
        <h2>IT Help Desk Ticketing System</h2>

        <!-- FILTERS -->
        <div class="filters">
            <div>
                <label for="filter-status" class="form-label">Filter by Status:</label>
                <select id="filter-status" class="form-select">
                    <option value="">All</option>
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                    <option value="pending">Pending</option>
                </select>
            </div>

            <div>
                <label for="filter-date" class="form-label">Filter by Date:</label>
                <input type="date" id="filter-date" class="form-control">
            </div>
        </div>

        <!-- TABLE -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Escalation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr data-ticket-id="12345" 
                    data-status="Open" 
                    data-priority="Urgent" 
                    data-created="6/3/2023, 5:15 PM"
                    data-assigned="Alice@gmail.com"
                    data-description="The network is not working in the office"
                    data-escalation="Not Escalated">
                    <td>#12345</td>
                    <td>Issues with the network</td>
                    <td><span class="badge bg-success">Open</span></td>
                    <td><span class="badge bg-danger">Urgent</span></td>
                    <td>Not Escalated</td>
                    <td><a href="#" class="view-details" onclick="showDetails(this)">View Details</a></td>
                </tr>
                <!-- Row 2 -->
                <tr data-ticket-id="12346" 
                    data-status="In Progress" 
                    data-priority="Normal" 
                    data-created="6/5/2023, 10:00 AM"
                    data-assigned="Bob@gmail.com"
                    data-description="Printer not working in the main office"
                    data-escalation="Escalated">
                    <td>#12346</td>
                    <td>Printer not working</td>
                    <td><span class="badge bg-info text-white">In Progress</span></td>
                    <td><span class="badge bg-secondary">Normal</span></td>
                    <td><span class="badge bg-danger">Escalated</span></td>
                    <td><a href="#" class="view-details" onclick="showDetails(this)">View Details</a></td>
                </tr>
            </tbody>
        </table>

        <!-- TICKET DETAILS SECTION (HIDDEN INITIALLY) -->
        <div id="ticket-details" class="ticket-details" style="display: none;">
            <h4>Ticket Details</h4>
            <p><strong>Ticket ID:</strong> <span id="details-id"></span></p>
            <p><strong>Status:</strong> <span id="details-status"></span></p>
            <p><strong>Priority:</strong> <span id="details-priority"></span></p>
            <p><strong>Created At:</strong> <span id="details-created"></span></p>
            <p><strong>Assigned To:</strong> <span id="details-assigned"></span></p>
            <p><strong>Description:</strong> <span id="details-description"></span></p>

            <!-- Escalate Button (will be hidden or shown based on escalation status) -->
            <button id="escalate-button" class="btn btn-warning" style="display: none;" onclick="openEscalateModal()">Escalate</button>

            <!-- Escalated Reason -->
            <div id="escalation-details" style="display: none;">
                <p><strong>Escalated To:</strong> <span id="escalated-to"></span></p>
                <p><strong>Escalated Reason:</strong> <span id="escalated-reason"></span></p>
            </div>
        </div>
    </div>

    <!-- Escalate Modal -->
    <div class="modal fade" id="escalateModal" tabindex="-1" aria-labelledby="escalateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="escalateModalLabel">Escalate Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="escalate-to">Escalate Ticket to:</label>
                    <select id="escalate-to" class="form-select">
                        <option value="bob@example.com">Bob</option>
                        <option value="alice@example.com">Alice</option>
                        <option value="charlie@example.com">Charlie</option>
                    </select>

                    <label for="escalate-reason" class="mt-2">Reason:</label>
                    <textarea id="escalate-reason" class="form-control" rows="3" placeholder="Explain why this ticket needs to be escalated"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning" onclick="escalateTicket()">Escalate</button>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Add this to the bottom of the body to load Bootstrap JS and Modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/js/loadComponents.js"></script>
<script src="/admin/assets/js/ticket.js"></script>

</body>
</html>
