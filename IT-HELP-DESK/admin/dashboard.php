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
    <link rel="stylesheet" href="/admin/assets/css/dashboard.css">
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
        <div class="content-container">
            <!-- Dashboard Title -->
            <h3>Dashboard</h3>

            <!-- Statistics Cards -->
            <div class="stats-row">
                <div class="stats-card">
                    <h6>Open Tickets</h6>
                    <span>42</span>
                </div>
                <div class="stats-card">
                    <h6>Resolved Today</h6>
                    <span>12</span>
                </div>
                <div class="stats-card">
                    <h6>Average Response Time</h6>
                    <span>2hrs 34mins</span>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    
    <!-- Add this to the bottom of the body to load Bootstrap JS and Modal functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="/admin/assets/js/loadComponents.js"></script>

    <script>
        // Chart Data
        const xValues = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        const yValues = [80, 50, 60, 90, 20, 15, 100];
        const barColors = ["blue", "blue", "blue", "blue", "blue", "blue", "blue"];

        // Chart Initialization
        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Ticket Volume'
                    },
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
