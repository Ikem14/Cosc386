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
  $dealer = $_POST["dealership_t"];
  $make = $_POST["make_t"];
  $condition = $_POST["condition_t"];
  $model = $_POST["model_t"];
  $year = $_POST["year_t"];
  $body=$_POST['body_type'];
  $color=$_POST['color_t'];
  $priceF = $_POST["price_from"];
  $priceT = $_POST["price_to"];
  $minM = $_POST["min_mile"];
  $maxM = $_POST["max_mile"];
  $sql = "SELECT make, model, body, color, year, dealerAt FROM Vehicles where body like '%$body%' and color like '%$color%'
  and make like '%$make%' and dealerAt like '%$dealer%' and model like '%$model%'and year like '%$year%'";

  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Make</th><th>Model</th><th>Year</th><th>Body Type</th><th>Color</th><th>Dealership</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["make"]. "</td><td>" . $row["model"]."</td><td>" . $row["year"]."</td><td>" . $row["body"]. "</td><td>" . $row["color"]. "</td><td>" . $row["dealerAt"]. "</td></tr>";
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
