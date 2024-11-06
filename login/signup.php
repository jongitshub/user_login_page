<?php
    include("connection.php");
    
    $email = $_POST['email'];
    $phone = $_POST['password'];
    $encript_password = password_hash($password, PASSWORD_DEFAULT);

    $select_query = "SELECT * FROM `login` WHERE `email` = '$email'";
    $res_query = mysqli_query($conn, $select_query);
    $check_result = mysqli_fetch_row($res_query);

    if(empty($check_result))
    {
        $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";
        $result = mysqli_query($conn, $sql);

        if($result == true)
        {
            $msg = "Account Created Successfully";
        }

        mysqli_close($conn);

        header("Location: login.html?msg=".$msg);
        die();

    }else{
        $msg = "User Email Already Exists";
        header('Location: index.php?msg='.$msg);
    }

?>