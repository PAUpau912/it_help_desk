document.getElementById('filter-status').addEventListener('change', filterTable);
document.getElementById('filter-date').addEventListener('input', filterTable);

function filterTable() {
    const status = document.getElementById('filter-status').value.toLowerCase();
    const date = document.getElementById('filter-date').value;

    const rows = document.querySelectorAll('#ticket-table tbody tr');

    rows.forEach(row => {
        const rowStatus = row.getAttribute('data-status').toLowerCase();
        const rowDate = row.getAttribute('data-date');

        // Determine if the row matches the filters
        const statusMatch = !status || rowStatus === status;
        const dateMatch = !date || rowDate === date;

        // Show or hide the row based on the filters
        if (statusMatch && dateMatch) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

function openModal(ticketId) {
    // Get the row of the ticket clicked (or you could use AJAX to get data from server)
    var row = document.querySelector(`#ticket-table tr[data-ticket-id='${ticketId}']`);
    
    // Populate modal with ticket details
    document.getElementById('ticket-id').innerText = row.querySelector('.ticket-id').innerText;
    document.getElementById('ticket-subject').innerText = row.querySelector('.ticket-subject').innerText;
    document.getElementById('ticket-status').innerText = row.querySelector('.ticket-status').innerText;
    document.getElementById('ticket-priority').innerText = row.querySelector('.ticket-priority').innerText;
    document.getElementById('ticket-created-date').innerText = row.querySelector('.ticket-created-date').innerText;
    
    // Add the new fields
    document.getElementById('ticket-email').innerText = row.getAttribute('data-email');
    document.getElementById('ticket-solution').innerText = row.getAttribute('data-solution');
    document.getElementById('ticket-feedback').innerText = row.getAttribute('data-feedback');
    
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('ticketModal'));
    myModal.show();
}




