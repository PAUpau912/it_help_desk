function loadComponent(id, file) {
    fetch(file)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Failed to load ${file}: ${response.statusText}`);
            }
            return response.text();
        })
        .then(data => {
            document.getElementById(id).innerHTML = data;

            // Highlight the active link dynamically if needed
            if (id === "sidebar-placeholder") {
                const currentPage = window.location.pathname.split("/").pop();
                const links = document.querySelectorAll(".sidebar a");
                links.forEach(link => {
                    if (link.getAttribute("href") === currentPage) {
                        link.classList.add("active");
                    }
                });
            }
        })
        .catch(error => console.error(error));
}

// Load the header and sidebar dynamically
document.addEventListener("DOMContentLoaded", () => {
    loadComponent("header-placeholder", "/admin/assets/component/header.php");
    loadComponent("sidebar-placeholder", "/admin/assets/component/sidebar.php");
});
