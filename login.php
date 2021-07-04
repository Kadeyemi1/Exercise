<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
<p><label for="">Username <input type="text" name='username'></label></p>
<p><label for="">Password <input type="password" name='password'></label></p>
<p><input type="submit" name="submit" value='Log in'></p>
</form>

<?php
//to check if submit button is clicked

if (isset($_POST['submit'])) {
   session_start();
   $name = $_SESSION['username'];
   
   // to verify and match username entry
    if (empty($_POST['username'])) {
        echo "Enter a valid username";
    }
    else { echo "Welcome " . $name;
    }
    echo "<br>";
    // to verify password entry
    if (empty($_POST['password'])) {
        echo "Enter a password";
   }
   
}  
?>
</body>
</html>