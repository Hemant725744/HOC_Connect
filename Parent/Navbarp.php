<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:white;">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 fs-4 fw-bold text-light" src="Homepage.php">
            <img src="logoname.png" alt="Logo" width="200" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 me-3 navbar-nav-scroll" style="--bs-scroll-height: 500px;">

                    <!-- Home Screen -->
                    <li class="nav-item">
                        <a class="nav-link me-5 fs-5" style="color:#012c3d;" href="Homepage.php">HOME SCREEN</a>
                    </li>

                    <!-- Calendar -->
                    <li class="nav-item">
                        <a class="nav-link me-5 fs-5" style="color:#012c3d;" href="calender.php">CALENDAR</a>
                    </li>

                    <!-- Announcements -->
                    <li class="nav-item">
                        <a class="nav-link me-5 fs-5" style="color:#012c3d;" href="announcements.php">ANNOUNCEMENTS</a>
                    </li>

                    <!-- Sign Out -->
                    <li class="nav-item">
                        <a class="nav-link fs-5" style="color:#012c3d;" href="logoutp.php">LOG OUT</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
