<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">

    <style>
        nav a.nav-link {
            color: #fff !important;
        }
        body{
            background-image: url("images/home.jpg");
            background-repeat: no-repeat;
            background-size:  cover;
        }
        .row {
            background-color: black;
        }
        .table{
            background-color: lightsteelblue;
            color: black;
        }
        @keyframes hi{
            0%{
                color:yellow;
            }
            10%{
                color:blue;
            }
            20%{
                color:chocolate;
            }
            30%{
                color:chartreuse;
            }
            40%{
                color:crimson;
            }
            50%{
                color:aqua;
            }
            60%{
                color:blueviolet;
            }
            70%{
                color:green;
            }
            80%{
                color:darkorange;
            }
            90%{
                color:darkred;
            }
            100%{
                color:white;
            }
        }
    
    </style>

    <title>Home Services</title>
</head>

<body>
    <nav class="nav bg-dark">
        <?php if (!isset($_SESSION['user'])): ?>
        <a class="nav-link active" href="index.php">Find Service Provider</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="register.php">Register Service Provider</a>
        <a class="nav-link" href="about.php">About</a>

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="nav-link" href="managehall.php">Manage Providers</a>
        <a class="nav-link" href="admin.php">Manage Booking</a>
        <a class="nav-link" href="logout.php">Log Out</a>

        <?php else: ?>
        <a class="nav-link" href="logout.php">Log Out</a>
        <?php endif; ?>

    </nav>