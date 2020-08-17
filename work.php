<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/style/main.css" rel="stylesheet">
    <title>Work</title>
</head>
<body>
<!--Header-->
<nav class="navbar bg-dark navbar-dark" id="navbar">
    <div>
        <h1><a class="navbar-brand amar" href="index.php" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3 " id="navbarNav">
        <h3 class=""><a class="nav-link" href="index.php">Home</a></h3>
        <h3 class="menu"><a class="nav-link" href="work.php">Work</a></h3>
        <h3 class=""><a class="nav-link" href="about.php">About</a></h3>
        <h3 class=""><a class="nav-link" href="contact.php">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->
<div class="container  my-5">
    <div class="row my-5">
        <div class="col-12">
            <h3 class="text-center">MY WORK</h3>
        </div>
    </div>
    <div class="row my-5 centered">
        <div class="col-lg-4 text-center">
            <a class="zoom green" href="components/javascript.html"><img class="img-responsive img-thumbnail" src="assets/img/javascript/weather-1.png" alt="" /></a>
            <h3><a href="components/javascript.html" style="color: black" >JavaScript</a></h3>
        </div>
        <div class="col-lg-4 text-center">
            <a class="zoom green" href="components/reactjs.html"><img class="img-responsive img-thumbnail" src="assets/img/reactjs/react-1.jpg" alt="" /></a>
            <h3><a href="components/reactjs.html" style="color: black" >ReactJs</a></h3>
        </div>
        <div class="col-lg-4 text-center">
            <a class="zoom green" href="components/phpmysql.html"><img class="img-responsive img-thumbnail" src="assets/img/php_mysql/php1.png" alt="" /></a>
            <h3><a href="components/phpmysql.html" style="color: black">PHP/MySQL</a></h3>
        </div>
    </div><!-- /row -->
    <div class="row mt centered">
        <div class="col-lg-4 text-center">
            <a class="zoom green" href="components/nodejs.html"><img class="img-responsive img-thumbnail" src="assets/img/nodejs/nodejs-1.png" alt="" /></a>
            <h3>
                <a href="components/nodejs.html" style="color:#000;">NodeJs</a>
            </h3>
        </div>
        <div class="col-lg-4 text-center">
            <a class="zoom green" href="components/wordpress.html"><img class="img-responsive img-thumbnail" src="assets/img/wordpress/wordpress.png" alt="" /></a>
           <h3>
               <a href="components/wordpress.html" style="color: black">Wordpress</a>
           </h3>
        </div>
        <div class="col-lg-4 text-center">
            <a class="zoom green" href="components/react-2.html"><img class="img-responsive img-thumbnail" src="assets/img/reactjs/react01.png" alt="" /></a>
            <h3><a href="components/react-2.html" style="color: black" >ReactJs</a></h3>
        </div>
    </div><!-- /row -->
</div><!-- /container -->
<!--end Body-->
<!--Footer-->
<?php
include_once ('includes/footer.php')

?>
