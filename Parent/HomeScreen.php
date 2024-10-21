<?php
include "Navbarp.php";
include '../Database/db_conn.php';

session_start();

// Fetch attendance percentage from the database
$checkEmailResult = mysqli_query($conn, "SELECT DISTINCT Percent FROM `student` WHERE Admission_no = '" . $_SESSION['admission'] . "'");

// Initialize attendance percentage variable
$attendancePercentage = 0;

// Check if the query was successful
if ($checkEmailResult) {
    // Check if any rows were returned
    if (mysqli_num_rows($checkEmailResult) > 0) {
        // Fetch the percentage
        $row = mysqli_fetch_assoc($checkEmailResult);
        $attendancePercentage = $row['Percent'];
    } else {
        echo "No attendance record found for this admission number.";
    }
} else {
    // Handle query error
    echo "Error executing query: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Dashboard</title>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background-color: #F0F8FF;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #7CB9E8;
        }

        .navbar-brand img {
            height: 50px;
        }

        .main-content {
            height: auto;
            padding: 40px 0;
        }

        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-container {
            position: relative;
            height: 300px;
            width: 300px;
            margin: 0 auto;
        }

        /* Center the percentage inside the chart */
        #attendanceChartContainer {
            position: relative;
        }

        #attendancePercentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>

<body>

    <!-- Main Content -->
    <div class="container main-content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Attendance Overview</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Your attendance percentage out of 100 is displayed below:</p>
                        <div id="attendanceChartContainer">
                            <canvas id="attendanceChart"></canvas>
                            <div id="attendancePercentage"><?php echo $attendancePercentage; ?>%</div> <!-- Dynamic attendance percentage -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Use the PHP variable directly in JavaScript
        const attendancePercentage = <?php echo $attendancePercentage; ?>;

        // Update the inner text to show the percentage
        document.getElementById('attendancePercentage').innerText = attendancePercentage + '%';

        // Create the circular chart using Chart.js
        const ctx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [attendancePercentage, 100 - attendancePercentage],
                    backgroundColor: [
                        attendancePercentage < 75 ? 'red' : 'green',
                        '#e0e0e0'
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                cutout: '70%', // Make it circular with a hollow center
                plugins: {
                    tooltip: { enabled: false },
                    legend: { display: false },
                },
                animation: {
                    animateRotate: true,
                    animateScale: true
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>

</body>

</html>
