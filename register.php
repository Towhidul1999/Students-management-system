<?php
    require_once 'dbcon.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $photo = $_FILES['photo']['name'];
    $photo = explode('.',$_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $name.'.'.$photo;

    if (!$name == "") {
        if(!$email == ""){
            if (!$password == "") {
                if (!$c_password == "") {
                    if(strlen($password) > 7 ){
                        if($password == $c_password){

                           $query = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email'");

                            if(mysqli_num_rows($query) == 0){

                                $result = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`, `photo`) VALUES ('$name','$email','$password','$photo_name')");

                                if($result){
                                    $succes = 'Data insert succesfully';
                                    move_uploaded_file($_FILES['photo']['tmp_name'],'images/users/'.$photo_name);
                                }else{
                                    $failed = 'Data insert failed';
                                }

                            }else{

                                $email_exist = 'This email already axist';

                            }

                        }else{
                            $pass_match = 'Password does not match';
                        }
                    }else{
                        $pass_length = 'Password must be 8 characters';
                    }
                }else{
                    $c_pass_error = 'Confirm Password field is required';
                }
            }else{
                $pass_error = 'Password field is required';
            }
        }else{
            $email_error = 'Email field is required';
        }
    }else{
        $name_error = 'Name field id required';
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <title>Henry Science & Technonology College</title>
</head>
<body class="jumbotron">
    <div class="container">
        <a href="login.php" class="btn btn-primary pull-right">Login</a>
        <a href="index.php" class="btn btn-primary">Home</a>
        <br>
        <br>
        <div class="row">
            <div>
                <?php if(isset($succes)){echo '<p class="alert alert-success col-sm-4 col-sm-offset-4">'.$succes.'</p>';} ?>
            </div>

            <div>
                <?php if(isset($failed)){echo '<p class="alert alert-danger col-sm-4 col-sm-offset-4">'.$failed.'</p>';} ?>
            </div>
            
        </div>
        <h2 class="text-center">User Registration Form</h2>

        <div class="row">
            <div class="col-sm-12 col-md-offset-3" style="margin-left:400px">
                <form action="" enctype="multipart/form-data" method="POST" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Name" class="form-control" name="name">
                            <span class="error"><?php if(isset($name_error)){echo $name_error;} ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" placeholder="Email" class="form-control" name="email">
                            <span class="error"><?php if(isset($email_error)){echo $email_error;} ?></span>
                            <span class="error"><?php if(isset($email_exist)){echo $email_exist;} ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Password</label>
                        <div class="col-sm-4">
                            <input type="password" placeholder="Password" class="form-control" name="password">
                            <span class="error"><?php if(isset($pass_error)){echo $pass_error;} ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Confirm Password</label>
                        <div class="col-sm-4">
                            <input type="password" placeholder="Confirm Password" class="form-control" name="c_password">
                            <span class="error"><?php if(isset($c_pass_error)){echo $c_pass_error;} ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Upload Photo</label>
                        <div class="col-sm-4">
                            <input type="file" name="photo">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4">
                            <input type="submit" value="Register" class="btn btn-primary pull-right" name="register">
                        </div>
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
    <!-- <script href="js/bootstrap.min.js"><script/> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>