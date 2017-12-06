<?php
$servername = "localhost";
$username = "tlanzi1";
$password = "tlanzi1";
$database = "tlanzi1DB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn){
    echo("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>I.T.C.H Corperation</title>
  <link rel="stylesheet" type="text/css" href="page.css">
  <h1>I.T.C.H Corperation</h1>
</head>
<style>
button {
    background-color: #003F87;
    font-size: 15px;
    color: white;
    cursor: pointer;
}
p{
  text-align: center;
  font-size: 25px;
  font-weight: bold;
}
</style>
<body>
  <a href="Page1.php"><button>HOME</button></a><br></br><br></br><br></br>
  <?php
  $first = $_POST["firstname"];
  $last = $_POST["lastname"];
  $contact = $_POST["ContactNumber"];
  $email = $_POST["Email_t"];
  $vin = $_POST["VIN_t"];
  $comment = $_POST["Comment_t"];

  ?>
  <p>Thanks for choosing I.T.C.H</p><br></br>
  <p>We will contact you soon about the requested vehicle</p>
    <bottom style="position: absolute; bottom:20px; right:50px; ">
      <a style="position:relative; font-size: 25; color: black; padding-right: 15px; float: right; text-decoration: none;" href="about.html">About us</a>
    </bottom>
</body>
</html>
