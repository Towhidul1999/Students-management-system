<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <title>Henry Science & Technonology College</title>
</head>
<body class="jumbotron">
    <div class="container">
        <a href="register.php" class="btn btn-primary pull-right">Register</a>
        <a href="login.php" class="btn btn-primary pull-right">Login</a>
        <br>
        <br>
        <h2 class="text-center">Henry Science & Technonology College</h2>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4" style="margin-left:400px">
                <form action="" method="">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center"><label>Students Information Portal</label></td>
                        </tr>
                        <tr>
                            <td><label>Choose</label></td>
                            <td>
                                <select class="form-control" required>
                                    <option value="">Choose</option>
                                    <option value="">CSE 1st Year</option>
                                    <option value="">CSE 2nd Year</option>
                                    <option value="">CSE 3rd Year</option>
                                    <option value="">CSE 4th Year</option>
                                    <option value="">BBA 1st Year</option>
                                    <option value="">BBA 2nd Year</option>
                                    <option value="">BBA 3rd Year</option>
                                    <option value="">BBA 4th Year</option>
                                    <option value="">HSC 1st Year Science</option>
                                    <option value="">HSC 2nd Year Science</option>
                                    <option value="">HSC 1st Year Humanities</option>
                                    <option value="">HSC 2nd Year Humanities</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Roll No.</label>
                            </td>
                            <td><input type="text" class="form-control" placeholder="Class Roll" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <input type="submit" value="Show Info" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
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