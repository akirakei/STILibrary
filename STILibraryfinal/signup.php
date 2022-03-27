<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Here</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <header>
        <a href="login.html"><img src="sti_1.png" alt="" width="60%"></a>
        <h4>STI Library</h4>
    </header>


    <form class="form-container" method="POST">
        <h2>Sign Up</h2>
        <input type="name" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password (Contains more than 8 characters)">
        <input type="password" name="password2" placeholder="Re-Type Password">
        <input type="submit" value="Sign Up" name="btn_signup">
    </form>
    

    <footer>
        <h5>Got questions? Reach us <a href="#">Here</a></h5>
    </footer>
</body>
</html>

<?php 
include("connection.php");

if(isset($_POST['btn_signup'])) {
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $pass2=$_POST['password2'];

    $sql="select * from infos where Username='".$uname."'"; 
    $res=$con->query($sql);
    if($res->num_rows>0) {
        Print '<SCRIPT>alert("Username Already Taken") </SCRIPT>';
    }
    if($pass == $pass2) {
        if(strlen($pass)>8) {
            $sql = "INSERT INTO infos (Username, Password) VALUES ('$uname','$pass')";
            $con->query($sql);
            Print '<SCRIPT>alert("You Succesfully Created Your Account")</SCRIPT>';
            header("Location: login.php");
            exit;
        } else {
            Print '<SCRIPT>alert("Your Password Must Be more then 8 Characters Long")</SCRIPT>';
        }
    } else {
        Print '<SCRIPT>alert("The Password You Entered Is Different.")</SCRIPT>';
    }
}





?>