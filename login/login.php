<?php
    include("connection.php")



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<form action="login.php" method="post">
    <input style="max-width: 50%;" id="email" type="email" name="email" placeholder="Enter email"><br><br>
    <input style="max-width: 50%;" id="text" type="password" name="password" placeholder="Enter password here"><br><br>
  <button id="button"type="submit" value="submit">Login</button>
  <a href="signup.html">click to Sign Up!</a><br><br>
</form> 
</body>
</html>