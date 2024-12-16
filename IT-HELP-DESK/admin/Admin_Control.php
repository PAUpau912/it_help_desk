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
    <title>Admin Control</title>
    <link rel="stylesheet" href="/admin/assets/css/admin_control.css">

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


    <div class="main-container">
        <div class ="content-container">
            <!-- DASHBOARD HEADER -->
            <h3>Admin Control Panel</h3>

            <!-- STATISTICS ROW -->
            <div class="row mt-5">
                <!-- System Statistics -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="stats-card">
                        <h6>System Statistics</h6>
                        <span><strong>Total Staffs:</strong> 2</span><br>
                        <span><strong>Total Active Tickets:</strong> 10</span>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="stats-card">
                        <h6>Quick Actions</h6>
                        <div class="form-floating mb-4 d-flex flex-column align-items-center">
                            <button class="btn btn-dark mb-2 btn-create-user">Create New User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Updated Table Section -->
    <div id="table-container" style="display: none;">
    <h4>Users List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>user1</td>
                <td>user1@example.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-sm btn-warning edit-btn" data-username="user1" data-email="user1@example.com" data-role="Admin">Edit</button>
                    <button class="btn btn-sm btn-danger remove-btn" data-username="user1">Remove</button>
                </td>
            </tr>
            <tr>
                <td>user2</td>
                <td>user2@example.com</td>
                <td>Staff</td>
                <td>
                    <button class="btn btn-sm btn-warning edit-btn" data-username="user2" data-email="user2@example.com" data-role="Staff">Edit</button>
                    <button class="btn btn-sm btn-danger remove-btn" data-username="user2">Remove</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal for Edit User -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit-user-form">
                    <div class="mb-3">
                        <label for="edit-username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="edit-username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit-email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-role" class="form-label">Role</label>
                        <select class="form-select" id="edit-role" name="role">
                            <option value="Admin">Admin</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Remove User -->
<div class="modal fade" id="removeUserModal" tabindex="-1" aria-labelledby="removeUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="removeUserModalLabel">Remove User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to remove <strong id="remove-username-display"></strong>?</p>
                <form id="remove-user-form">
                    <input type="hidden" id="remove-username" name="username">
                    <button type="submit" class="btn btn-danger">Yes, Remove</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>




    <!-- Add this to the bottom of the body to load Bootstrap JS and Modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="/admin/assets/js/loadComponents.js"></script>
<script src= "/admin/assets/js/admin.js"></script>
</body>
</html>
