<?php
    //Request database connection data from config file
    require_once 'database_config.php';
    //Get user input from front page
    $username = $_POST['username'];
    $password = $_POST['password'];
    //This site is for staff so it will be a set variable
    $is_staff = 1;
    //SQL Process
    $sql = "INSERT INTO user (username, password, is_staff) VALUES ('$username', '$password', '$is_staff')";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if (mysqli_query($conn, $sql)) {
        header('Location: landing.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>