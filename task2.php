
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--form to collect input from user-->

    <form class="white" action="<?php echo $_SERVER['PHP_SELF']?>" method= "POST">
    <h1>Welcome, Kindly fill in your details</h1>
    <p><label>Firstname:</label> <input type="text" name="first_name" required></p>
    <p><label>Lastname:</label> <input type="text" name="last_name" required></p>
    <p><label>Email:</label> <input type="text" name="email" placeholder="joe@domain.com" required></p>
    <p><label>Password:</label> <input type="password" name="password" required></p>
    <p><label>Phone number:</label> <input type="tel" name="phone_number" placeholder="123-4567-8910" minlength="11" maxlength="11" required></p>
    <p><label>Age:</label> <input type="number" name="age" min="15" step="1" max="100" size="100" required></p>
    <p><label>Gender: </label>
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male 
    </p>
    <br>
    <input type="submit" name="submit">
    </form>

<br></br>

<?php

//session to verify if inputs have been filled
if (isset($_POST['submit'])){
    session_start();
    //verify first_name input
    if (empty($_POST['first_name'])){
        echo "First name empty";
    }
    else {
       echo "First name:" .htmlspecialchars ($_POST['first_name']);
    }
    echo "<br><br>";

    //verify last_name input
    if (empty($_POST['last_name'])){
        echo "Last name empty";
    }
    else {
       echo "Last name:" .htmlspecialchars ($_POST['last_name']);
    }
    echo "<br><br>";

    // verify email
    if (empty($_POST['email'])){
        echo "Email required";
    }
    else {
       echo "Email:" .htmlspecialchars ($_POST['email']);
    }
    echo "<br><br>";
    
    // verify phone_number
    if (empty($_POST['phone_number'])){
        echo "Mobile number required";
    }
    else {
       echo "Phone number:" .htmlspecialchars ($_POST['phone_number']);
    }
    echo "<br><br>";

    //verify age input
    if (empty ($_POST['age'])){
        echo "Age should not be empty";
    }
    else {
        echo "Age:" .htmlspecialchars ($_POST['age']);
    }
    echo "<br><br>";
    
    //verify gender input
    if (empty ($_POST['gender'])){
        echo "Select your gender";
    }
    else {
        echo "Gender selected:" .htmlspecialchars ($_POST['gender']);
    }

}

?>
</body>
</html>