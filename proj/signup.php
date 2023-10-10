<?php
    session_start();

    include('db.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $cnum = $_POST['number'];
        $address = $_POST['add'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into form (fname,lname,gender,cnum,address,email,pass) values (' $firstname','$lastname','$Gender','$cnum','$address','$gmail','$password') ";
        
            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register') </script>";

        }
        else
        {
            echo "<script type='text/javascript'> alert('Enter some valid information') </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in and registraion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="signup" >
            <h1>Sign Up</h1>
            <h4>it's free and only takes a minutes</h4>
            <form method="POST">
                <label>First Name</label>
                <input type="text" name="fname" required>
                <label>Last Name</label>
                <input type="text" name="lname" required>
                <label>Gender</label>
                <input type="text" name="gender" required>
                <label>Contact Number</label>
                <input type="tel" name="number" required>
                <label>Address</label>
                <input type="text" name="add" required>
                <label>Email</label>
                <input type="email" name="mail" required>
                <label>Password</label>
                <input type="password" name="pass" required>
                <input type="submit" name="" value="submit" > 
            </form>

            <p>already have an account? <a href="login.php">Log In</a> </p>
            <a href="home.html">home</a>
    </div>


</body>
</html>