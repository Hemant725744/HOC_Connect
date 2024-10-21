<?php
error_reporting (0);
session_start();
$_SESSION['loggedin']=false;

    session_unset();

    session_destroy();

    header("Location: ../HomeScreen/loginp.php");
?>