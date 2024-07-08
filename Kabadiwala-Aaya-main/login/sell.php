

<?php
$servername="localhost";
$username="root";
$password="";
$database_name="sell_your_scrap";


//Try connecting to the Database
$conn = mysqli_connect($servername, $username, $password, $database_name);

//Check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}

if(isset($_POST['sell']))
{
   $full_name = $_POST['fullname'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $scraptype = $_POST['scraptype'];
   $weight = $_POST['weight'];
//For inserting the values to mysql database 
   $sql_query = "INSERT INTO details (full_name,email_id,address,city,state,zip,scrap_type,weight)
VALUES ('$fullname','$email','$address','$city','$state','$zip','$scraptype','$weight')";


if (mysqli_query($conn, $sql_query))
{
   header("location: \Kabadiwala-Aaya-main\home.html");
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
    <title>Sell Your Scrap Now</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand "  href="home.html" style="color: rgb(95, 138, 31);  animation-duration: 1s; animation-name: slideInLeft"><img src="img/logo.png" alt="" > Kabadiwala Aaya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" style="padding-right: 5%;">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item profile">
              <a class="nav-link " href="\Kabadiwala-Aaya-main\login\signup.php">Profile <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rate.html">Rate List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item sell">
              <button><a class="nav-link " href="\Kabadiwala-Aaya-main\login\sell.php"  style="color: white;">
                Sell Now
              </a></button>
            </li>
          </ul>
        </div>
      </nav>



    <section class="container">
          <div class="row">
            <div class="col-md-6 col-12" >
                <div class=" container wow slideInUp" data-wow-duration="2s" style="animation-duration: 2s;  animation-name: slideInLeft; margin-top: 40%; box-shadow: 5px 5px 30px 20px green; border-radius: 15px;" >
                    <h1><i style=" font-weight: bold;"> “Sell Your Scrap</i> <i style=" font-weight: bold;"><span style="color: white;"> Anytime </span> With Us ” </i></h1>
                    
                    <h4 style="color: white;">Trusted Services For Scrap <br> Pickup In Your City. <br></h4> <br>
                  <h5 style="color: white;">Sell Your Scrap Online Now </h5>
                  <h3 style=" color: black;"><b><i> Sell Now </i></b></h3>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="col-75">
                    <div class="container" style="color: brown; background-color: white;">
                      <form action="" method="post">
                      
                        <div class="row container">
                          <div class="col-50">
                            <h1>Sell Your Scrap</h1> <hr>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="Full Name" style="background-color: rgb(241, 240, 240);">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com" style="border-radius: 4px; border: 1px solid rgb(196, 193, 193);">
                            <label for="adr"><i class="fa fa-address-card"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="Address" style="background-color: rgb(241, 240, 240);">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="City" style="background-color: rgb(241, 240, 240);">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="State" style="background-color: rgb(241, 240, 240);">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="Zip" style="background-color: rgb(241, 240, 240);">
                            <label for="type">Scrap Type</label>
                            <input type="text" id="scraptype" name="scraptype" placeholder="scraptype" style="background-color: rgb(241, 240, 240);">
                            <label for="weight">Weight</label>
                            <input type="text" id="weight" name="weight" placeholder="weight" style="background-color: rgb(241, 240, 240);">
                             
                          

                            
                            <!-- <select id="type" name="scraptype">
                                <option value="type">Select Scrap Type</option>
                                <option value="Plastic">Plastic</option>
                                <option value="Metal">Metal</option>
                                <option value="Glass">Glass</option>
                                <option value="Paper">Paper</option>
                                <option value="Tyre">Tyre</option>
                                <option value="Battery">Battery</option>
                                <option value="E-waste">E-waste</option>
                                <option value="E-waste">Other</option>
                              </select>

                              <select id="type" name="weight">
                                <option value="type">Select Estemated Weight</option>
                                <option value="Plastic">Under 5 Kg</option>
                                <option value="Metal">Under 10 Kg</option>
                                <option value="Glass">Under 20 Kg</option>
                                <option value="Paper">Under 40 Kg</option>
                                <option value="Tyre">Under 80 Kg</option>
                                <option value="Battery">Under 1 Ton</option>
                                <option value="E-waste">More Than 1 Ton</option>
                              </select>
                          </div> -->
                
                         
                          
                        </div>
                        <div class="form-button">
                          <button type ='submit'name="sell" class="btn">Continue to Sell</button>
                        </div>
                        
                      </form>
                    </div>
                  </div>
            </div>


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
          <!-- <p><a href="login.html"> Login </a></p> -->
          <p><a href="signup.html"> Sign Up </a></p>
        
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
        <p style="padding-top: 1%; text-align: center;">Copyright © 2023 KabadiwalaAaya. Designed and Developed by Nikhil Tirkey and Team</p>
      
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