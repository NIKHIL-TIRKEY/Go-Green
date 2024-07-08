<?php

include 'config.php';
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: \Kabadiwala-Aaya-main\home.html");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT username, password FROM kabadiwala_aaya WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location:\Kabadiwala-Aaya-main\home.html ");
                            
                        }
                    }

                }

    }
}    


}


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="\Kabadiwala-Aaya-main\css\style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand "  href="home.html" style=" color: rgb(95, 138, 31);  animation-duration: 1s; animation-name: slideInLeft"><img src="img/logo.png" alt="" > Kabadiwala Aaya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" style="padding-right: 5%;">
            <li class="nav-item ">
              <a class="nav-link" href="\Kabadiwala-Aaya-main\home.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="login\login.php">Profile <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\Kabadiwala-Aaya-main\about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\Kabadiwala-Aaya-main\rate.html">Rate List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="\Kabadiwala-Aaya-main\contact.html">Contact Us</a>
            </li>
            <li class="nav-item sell">
              <button><a class="nav-link " href="\Kabadiwala-Aaya-main\sell.html"  style="color: white;">
                Sell Now
              </a></button>
            </li>
          </ul>
        </div>
      </nav>


<section class="container justify-content-center">
     <div class="row">
        <div class="col-md-3 "></div>
    <div class="col-md-6 col-12">
      <div id="login-card" class="card">
        <div class="card-body">
          <h2 class="text-center">Login</h2>
          <br>
          <form action="\Kabadiwala-Aaya-main\login\welcome.php">
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="email" placeholder="Enter password" name="pswd">
            </div>
            <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Login</button>
             <br>
            <p style="margin-left: 40%;">Or <a href="\Kabadiwala-Aaya-main\login\signup.php"><b> Sign Up </b> </a></p>
          </form>
        </div>
    </div>
</div>
<div class="col-md-3 "></div>
</div>
</section>



    <footer>
        <div  class="footer container" style="text-decoration: none;">
          <div class="row">
        <div class="col-md-4 col-6">
          <h5> Quick Link </h5>
          <hr>
          <p><a href="home.html"> Home </a></p>
          <p><a href="about.html"> About Us </a></p>
          <p><a href="rate.html"> Rate List </a></p>
          <p><a href="contact.html"> Contact Us </a></p>
          <p><a href="\Kabadiwala-Aaya-main\login\login.php"> Login </a></p>
          <p><a href="\Kabadiwala-Aaya-main\login\signup.php"> Sign Up </a></p>
        
      </div>
      <div class="col-md-4 col-6">
        
          <h5> About Us </h5>
          <hr>
          <p>We are kabadiwalaAaya.com. We collect <br> door to door all kind of scrap like  plastic,  <br> metal, glass, paper, etc. Which should be <br> recycled. We provide smart collection, <br> transpiration, disposal. We also promote <br> and help to <b> “SWACH BHARAT MISSION”.. </b></p>
      </div>

      <div class="col-md-4 col-12">
        
          <h5> Stay Connected</h5>
          <hr>
          <div class="row">
        <div class="col-md-3 col-3">
          <p><a href="#"><i class="fa-brands fa-facebook" style="font-size: 25px;"></i></a></p>
        </div>
        <div class="col-md-3 col-3">
          <p><a href="#"><i class="fa-brands fa-twitter" style="font-size: 25px;"></i></a></p>
        </div>
        <div class="col-md-3 col-3">
          <p><a href="#"><i class="fa-brands fa-linkedin" style="font-size: 25px;"></i></a></p>
        </div>
        <div class="col-md-3 col-3">
          <p><a href="#"><i class="fa-brands fa-instagram" style="font-size: 25px;"></i></a></p>
        </div>
        <div class="col-md-12 col-12">
          <a href="tel:7979070132"><i class="fa-solid fa-phone"> </i> (+91)-7979070132 </a> <br>
        </div>
        <div class="col-md-12 col-12">
          <a href="mailto:nikhil.tirkey.18@gmail.com"><i class="fa-solid fa-envelope"></i> nikhil.tirkey.18@gmail.com</a>
        </div>
        </div>
        
      </div>
      </div>
      </div>
        <hr>
        <p style="padding-top: 1%; text-align: center;">Copyright © 2023 KabadiwalaAaya. Designed and Developed by Brightcode</p>
      
      </footer>






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
      <script src="owlcarousel/owl.carousel.min.js"></script>
      <script src="js/wow.min.js"></script>
      
      
      <script>
        new WOW().init();
     </script>
</body>
</html>