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
else{
  echo "Connected successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>I.T.C.H Corperation</title>
  <link rel="stylesheet" type="text/css" href="page.css">
  <h1>I.T.C.H Corperation</h1>
  <h3>Results</h3>
</head>
<style>
button {
    background-color: #003F87;
    font-size: 15px;
    color: white;
    cursor: pointer;
}
</style>
<body>
  <a href="Page1.php"><button>HOME</button></a>
  <?php
  if(isset($_POST["dealership"])) { $dealer = $_POST["dealership"];}
  if(isset($_POST["make"])) { $make = $_POST["make"];}
  if(isset($_POST["condition"])) { $condition = $_POST["condition"];}
  if(isset($_POST["model"])) { $model = $_POST["model"];}
  if(isset($_POST["year"])) { $year = $_POST["year"];}
  $body=$_POST["body_type"];
  if(isset($_POST["color"])) { $color = $_POST["color"];}
  if(isset($_POST["price_from"])) { $priceF = $_POST["price_from"];}
  if(isset($_POST["price_to"])) { $priceT = $_POST["price_to"];}
  if(isset($_POST["min_mile"])) { $minM = $_POST["min_mile"];}
  if(isset($_POST["max_mile"])) { $maxM = $_POST["max_mile"];}
  $sql = "SELECT make, model, body, color, dealerAt FROM Vehicles where body like '%". mysql_real_escape_string($body) ."%";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Make</th><th>Model</th><th>Body Type</th><th>Color</th><th>Dealership</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //if($color == 'Red'){
        echo "<tr><td>" . $row["make"]. "</td><td>" . $row["model"]."</td><td>" . $row["body"]. "</td><td>" . $row["color"]. "</td><td>" . $row["dealerAt"]. "</td></tr>";
      //}
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

    <bottom style="position: absolute; bottom:20px; right:50px; ">
      <!--<a style="color:black; margin: 15px;" href="../Cosc386bd/careers.html">Careers</a> !>
      <a style="color:black; margin: 15px;" href="../Cosc386bd/contact.html">Contact us</a>-->
      <a style="color:black; margin: 15px;" href="../Cosc386bd/Login.html">Admin Login</a>
    </bottom>
</body>
</html>
