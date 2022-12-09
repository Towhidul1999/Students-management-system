<?php
session_start();
require_once '../dbcon.php';

if (!isset($_SESSION['login_id'])) {
    header('location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="../css/font-awesome.min.css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Henry Science & Technonology College</title>
</head>
<body class="">

        <nav class="navbar bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand">Navbar</a> -->
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><i class="fa fa-dashboard"></i>JHSTC</a>
            </div>
            <ul class="d-flex">
                <li class="m-3 breadcrumb"><a href=""><i class="fa fa-user"></i> Towhidul</a></li>
                <li class="m-3 breadcrumb"><a href="../register.php"><i class="fa fa-user-plus"></i> Add User</a></li>
                <li class="m-3 breadcrumb"><a href="logout.php"><i class="fa fa-power-off"></i> Exit</a></li>
            </ul>
        </div>
        </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="" class="list-group-item active"><i class="fa fa-dashboard"></i> Dashboard</a>
                    <a href="" class="list-group-item"><i class="fa fa-user-plus"></i> Add Student</a>
                    <a href="" class="list-group-item"><i class="fa fa-users"></i> All student</a>
                    <a href="allusers.php" class="list-group-item"><i class="fa fa-users"></i> All User</a>
                </div>
            </div>