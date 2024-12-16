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

let selectedTicket;

// FUNCTION TO SHOW DETAILS SECTION
function showDetails(element) {
    const row = element.closest('tr');
    const ticketId = row.dataset.ticketId;
    const status = row.dataset.status;
    const priority = row.dataset.priority;
    const created = row.dataset.created;
    const assigned = row.dataset.assigned;
    const description = row.dataset.description;
    const escalation = row.dataset.escalation;

    document.getElementById('details-id').innerText = ticketId;
    document.getElementById('details-status').innerText = status;
    document.getElementById('details-priority').innerText = priority;
    document.getElementById('details-created').innerText = created;
    document.getElementById('details-assigned').innerText = assigned;
    document.getElementById('details-description').innerText = description;

    document.getElementById('ticket-details').style.display = 'block';

    if (escalation === 'Escalated') {
        document.getElementById('escalation-details').style.display = 'block';
        document.getElementById('escalated-to').innerText = row.dataset.escalatedTo;
        document.getElementById('escalated-reason').innerText = row.dataset.escalatedReason;
        document.getElementById('escalate-button').style.display = 'none';
    } else {
        document.getElementById('escalation-details').style.display = 'none';
        document.getElementById('escalate-button').style.display = 'block';
    }

    selectedTicket = row;
}

// FUNCTION TO OPEN ESCALATE MODAL
function openEscalateModal() {
    const escalateModal = new bootstrap.Modal(document.getElementById('escalateModal'));
    escalateModal.show();
}

// FUNCTION TO ESCALATE THE TICKET
function escalateTicket() {
    const escalateTo = document.getElementById('escalate-to').value;
    const escalateReason = document.getElementById('escalate-reason').value;

    if (escalateReason.trim() === '') {
        alert('Please provide a reason for escalation.');
        return;
    }

    // Update the ticket details
    selectedTicket.dataset.escalation = 'Escalated';
    selectedTicket.dataset.escalatedTo = escalateTo;
    selectedTicket.dataset.escalatedReason = escalateReason;

    // Show the updated details
    showDetails(selectedTicket);

    // Close the modal
    const escalateModal = bootstrap.Modal.getInstance(document.getElementById('escalateModal'));
    escalateModal.hide();
}