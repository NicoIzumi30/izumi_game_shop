<?php 

require "config/connect.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>
    <link href="<?=BASE_URL;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/shop-homepage.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand text-center font-weight-bold " href="<?=BASE_URL;?>"><img src="<?=BASE_URL;?>assets/img/icon.png" style="height: 35px;"> Izumi Game Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=BASE_URL;?>">Home
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentangKami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://bit.ly/3rRcJIf">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">