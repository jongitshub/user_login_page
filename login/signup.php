<?php
    include("connection.php");
    
    $email = $_POST['email'];
    $phone = $_POST['password'];

    $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo $row["email"] . "<br>";
    }

    mysqli_close($conn);
?>