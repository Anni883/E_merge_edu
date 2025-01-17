<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<title>E-MERGE EDUCATION</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">E-MERGE EDUCATION</a>
    <span class="nabar-text">Learn and Implement </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">

<li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
<li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
<?php
session_start();  

if (isset($_SESSION['is_login'])){
  echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
} else {
  echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';
}

?>


<li class="nav-item custom-nav-item"><a href="#" class="nav-link">FeedBack</a></li>
<li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
</ul>
</div>
</nav>