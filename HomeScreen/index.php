<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Tracking</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Whole background color */
        body {
            background-color: #F0F8FF;
            color: #000000;
            font-family: Arial, sans-serif;
        }

        /* Navbar background color */
        .navbar {
            background-color: #7CB9E8;
        }

        .navbar-brand img {
            height: 50px;
        }

        /* Additional styling for centering content */
        .main-content {
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .info-container {
            max-width: 600px;
            text-align: center;
            margin-top: 20px;
            background-color: #89CFF0;
            padding: 20px;
            border-radius: 8px;
        }

        .quote {
            font-style: italic;
            color: #333333;
            margin: 20px 0;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .btn-primary {
            background-color:#002244;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #00BFFF;
        }

        .btn-secondary {
            background-color:#002244;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #00BFFF;
        }

        /* Responsive image */
        img.img-fluid {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logoname.png" alt="Logo" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-content">
        <!-- Centered Image -->
        <img src="indeximg.png" alt="Centered Image" class="img-fluid mb-4">

        <!-- Information Section -->
        <div class="info-container">
            <h3>Attendance Tracking Made Easy</h3>
            <p class="quote">"Track attendance efficiently and effortlessly, ensuring every student is accounted for."</p>
            <p>
                Our attendance tracking system provides real-time updates for parents and class coordinators,
                ensuring effective communication and accountability. Join us in creating a better learning environment!
            </p>
        </div>

        <!-- Button Container -->
        <div class="btn-container">
            <a href="Phome.php" class="btn btn-primary">Parent Login</a>
            <a href="logint.php" class="btn btn-secondary">Class Coordinator Login</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
