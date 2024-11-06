<?php
    include("connection.php");
    
    $email = $_POST['email'];
    $phone = $_POST['password'];

    $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header("Location: login.html");
    die();

?>