<?php
$servername="localhost";
$username="root";
$password="";
$database_name="kabadiwala_aaya";


//Try connecting to the Database
$conn = mysqli_connect($servername, $username, $password, $database_name);

//Check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}

if(isset($_POST['save']))
{
   $username = $_POST['username'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];
//For inserting the values to mysql database 
   $sql_query = "INSERT INTO kabadiwala (username,email_id,phone,password)
VALUES ('$username','$email','$phone','$password')";


if (mysqli_query($conn, $sql_query))
{
   header("location: \Kabadiwala-Aaya-main\home.html");
}

}


?>
