<?php
include("connection.php");

if (isset($_POST['btn_login'])) {
    $uname=$_POST['username'];
    $pword=$_POST['password'];

    $sql="select * from infos where Username='".$uname."' AND Password='".$pword."' limit 1"; 
    $res=$con->query($sql);
    if($res->num_rows>0){ 
        //Print '<SCRIPT>alert("Login Succeed!")</SCRIPT>';
        Print '<SCRIPT>window.location.assign("maincontent.php")</SCRIPT>'; 
    } else {
        Print '<SCRIPT>alert("Account Invalid!")</SCRIPT>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your Account</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <header>
        <a href="login.php"><img src="sti_1.png" alt="" width="60%"></a>
        <h4>STI Library</h4>
    </header>

    <div class="container">
        <div class="left-container">
            <form class="form-container" method="POST">
                <h2>Login</h2>
                <input type="name" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login" name="btn_login">  <!--OK NA PALA-->
                <h6>Don't have an account? Sign Up <a href="signup.php">Here</a></h6>
            </form>
        </div>

        <div class="right-container">
            <h1><span id="highlight">Login </span> or <span id="highlight">Sign Up</span> to your account</h1>
            <h3>Carefully crafted research papers for the students of <span id="subtitle-highlight">STI College of San Jose Del Monte.</span></h3>
        </div>
    </div>  

    <footer>
        <h5>Got questions? Reach us <a href="#">Here</a></h5>
    </footer>
    
</body>
</html>