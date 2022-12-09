<?php
session_start();

require_once 'dbcon.php';

if (isset($_SESSION['login_id'])) {
    header('location: admin');
}

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_check = mysqli_query($conn,"SELECT * FROM `users` WHERE `email`= '$email' ");

    if (mysqli_num_rows($email_check) > 0) {
        $row = mysqli_fetch_assoc($email_check);
        if($row['password'] == $password){
            $_SESSION['login_id'] = $row['id'];
            header('location: admin');
        }else{
            $password_error = 'Wrong Password';
    }
    }else{
        $email_error = 'Wrong Email Address';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <title>Henry Science & Technonology College</title>
</head>
<body class="jumbotron">
    <div class="container">
        <a href="register.php" class="btn btn-primary pull-right">Register</a>
        <a href="index.php" class="btn btn-primary">Home</a>
        <br>
        <br>
        <h2 class="text-center">User Login Form</h2>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4" style="margin-left:400px">
                <form action="" method="POST">
                    <div>
                        <input type="email" placeholder="Email" class="form-control" name="email" required>
                        <span class="error"><?php if(isset($email_error)){echo $email_error;}?></span>
                    </div>
                    <br>
                    <div>
                        <input type="password" placeholder="Password" class="form-control" name="password" required>
                        <span class="error"><?php if(isset($password_error)){echo $password_error;}?></span>
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" value="Login" class="btn btn-primary" name="login">
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer>
            <p class="text-center">All Right Reserved. &copy; 2012-<?php echo date("Y");?> Henry Science & Technonology College</p>
        </footer>
    </div>
    <script href="js/bootstrap.min.js"><script/>
</body>
</html>