// Get buttons and divs
const createUserButton = document.querySelector(".btn-create-user");
const tableContainer = document.getElementById("table-container");

// Show Table and Create User form when the "Create New User" button is clicked
createUserButton.addEventListener("click", function () {
    tableContainer.style.display = tableContainer.style.display === "none" ? "block" : "none"; // Toggle table visibility
});

    // Handle the Edit button click
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function () {
            // Get user data from the button's data attributes
            const username = this.dataset.username;
            const email = this.dataset.email;
            const role = this.dataset.role;

            // Populate the modal's form fields
            document.getElementById('edit-username').value = username;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-role').value = role;

            // Show the Edit User modal
            const editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'));
            editUserModal.show();
        });
    });

    // Handle the Remove button click
    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', function () {
            // Get the username to remove
            const username = this.dataset.username;

            // Populate the modal with the username
            document.getElementById('remove-username').value = username;
            document.getElementById('remove-username-display').innerText = username;

            // Show the Remove User modal
            const removeUserModal = new bootstrap.Modal(document.getElementById('removeUserModal'));
            removeUserModal.show();
        });
    });

