
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

    <form class="white" action="<?php echo $_SERVER['PHP_SELF']?>" method= "POST" name="form">
    <h1>Welcome, Kindly fill in your details</h1>
    <p><label>Firstname:</label> <input type="text" name="first_name"></p>
    <p><label>Lastname:</label> <input type="text" name="last_name"></p>
    <p><label>Username:</label> <input type="text" name="username"></p>
    <p><label>Email:</label> <input type="text" name="email" placeholder="joe@domain.com"></p>
    <p><label>Password:</label> <input type="password" name="password"></p>
    <p><label>Phone number:</label> <input type="tel" name="phone_number" placeholder="123-4567-8910" minlength="11" maxlength="11"></p>
    <p><label>Age:</label> <input type="number" name="age" min="15" step="1" max="100" size="100"></p>
    <p><label>Gender: </label>
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male 
    </p>
    <br>
    <input type="submit" name="submit" value="Register">
    </form>

<br></br>

<?php

//session to verify if inputs have been filled
if (isset($_POST['submit'])){
    session_start();
    
    //verify first_name input
    if (empty($_POST['first_name'])){
        echo "First name required";
    }
    echo "<br>";
    //verify last_name input
    if (empty($_POST['last_name'])){
        echo "Last name required";
    }
    echo "<br>";
    //verify username input
    $_SESSION ['username']= $_POST['username'];
    if (empty($_POST['username'])){
        echo "Username required";
    }
    
    echo "<br>";

    // verify email
    if (empty($_POST['email'])){
        echo "Email required";
    }
    else {
        $email=$_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email must be valid";
        }
    }
    echo "<br>";

    // verify password
    
    if (empty($_POST['password'])){
        echo "Password required";
    }
    
    
    echo "<br>";
    // verify phone_number
    if (empty($_POST['phone_number'])){
        echo "Mobile number required";
    }
    echo "<br>";

    //verify age input
    if (empty ($_POST['age'])){
        echo "Age required";
    }
    echo "<br>"; 

    //verify gender input
    if (empty ($_POST['gender'])){
        echo "Gender required";
    }
    
    // I had to put this message down here so that it would not pop up after 
    // just filling up to username leaving other inputs out
    else {
        echo "<h4>You have succesfully registered. Log in with this username:  </h4>" . $_POST['username'];
       
    }

    
}

?>

</body>
</html>