<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Attendance Tracking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #F0F8FF;
            color: #000000;
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .signup-container {
            max-width: 600px;
            background-color: #89CFF0;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #002244;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #00BFFF;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logoname.png" alt="Logo" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>

    <div class="container main-content">
        <div class="signup-container">
            <h3>Parent Signup</h3>
            <p>Fill out the form below to create your account.</p>

            <form method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="admission_number" class="form-label">Admission Number</label>
                    <input type="text" class="form-control" id="admission_number" name="admission_number" placeholder="Enter your admission number" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $admission_no = $_POST['admission_number'];
    $pass = $_POST['password'];

    include '../Database/db_conn.php';

    $checkEmailQuery = "SELECT * FROM parent WHERE mesid = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo '<div class="alert alert-danger">The provided email is already registered.</div>';
    } else {
        if (!empty($email) && !empty($admission_no) && !empty($pass) ) {
            $sql = "INSERT INTO parent (admission_no, mesid, password ) VALUES ( '$admission_no', '$email', '$pass')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success">Your Personal Details are Successfully Registered, Thank you.</div>';
                echo "<script>window.location.href = 'http://localhost/Attendance/HomeScreen/loginp.php';</script>";
            } else {
                echo '<div class="alert alert-danger">Failed to register your details: ' . mysqli_error($conn) . '</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Missing required fields, please check your input.</div>';
        }
    }
}
?>
