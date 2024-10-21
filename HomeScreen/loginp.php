<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Additional styling for centering content */
        .main-content {
            height: 80vh; /* Adjusts main section height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logoname.png" alt="Logo" width="200" height="50" class="d-inline-block align-text-top">
                
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-content">
        <div class="text-center">
            <!-- Centered Image -->
            <img src="loginp.jpg"  class="img-fluid mb-4" style="max-width: 200px;">

            <!-- Login Form -->
            <div class="form-container">
                <h3 class="text-center mb-4">Login</h3>
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control" id="email" name= "addmission" placeholder="Enter your Addmisson number">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    session_start();
include '../Database/db_conn.php';
    $email = htmlspecialchars($_POST['addmission']);
    $pass = $_POST['password'];
    
    $checkEmailQuery = "SELECT * FROM parent WHERE admission_no = '$email' AND password = '$pass'";

    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
  

    if ((mysqli_num_rows($checkEmailResult) > 0)  ) 
    {
        echo "hii<br>";

        while ($row = $checkEmailResult->fetch_assoc()) 
        {

          
            $_SESSION['mail']=$row['mesid'];
            $_SESSION['admission']=$row['admission_no'];
            // $_SESSION['percent']=$row['Percent'];
    
            $_SESSION['pass']=$row['password'];

          
        
    
         
    }       $db_pass =  $_SESSION['pass'];

        
            
            if ($db_pass === $pass) 
            {
                
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>SUCCESS!</strong> Your Personal Details are Right, Thank you
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

                $_SESSION['loggedin']=true;
       

      


                
                 
                    echo "?><script>window.location.href = 'http://localhost/Attendance/Parent/HomeScreen.php'</script><?php";
                
            
            
    
            }
            else
            {
              
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>SUCCESS!</strong> Password Does Not Match , Thank you
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            // Email already exists
        

            // Session Will Start

        
        
        }
        
        // $_SESSION['Name']=$name;
        else 
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong> Envalid UserId or Password
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            // echo "$email";
            // echo "$pass";
        }
        
    } 
   

   
?>