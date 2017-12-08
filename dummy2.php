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
  <div class="topnav"style="height: 180px;">
  <h1>I.T.C.H Corperation</h1>
  <h3>The Leading International Car Dealership</h3>
  <p style="text-align: center;">
  <a href="Page1.php">&nbsp; &nbsp; &nbsp; &nbsp;Home&nbsp; &nbsp; &nbsp; &nbsp;</a>
 <a href="Dealerships.php">&nbsp; &nbsp; &nbsp; &nbsp;Dealerships&nbsp; &nbsp; &nbsp; &nbsp;</a>
 <a href="about.html">&nbsp; &nbsp; &nbsp; &nbsp;About us&nbsp; &nbsp; &nbsp; &nbsp;</a>
 <a href="Login.html">&nbsp; &nbsp; &nbsp; &nbsp;Admin Login&nbsp; &nbsp; &nbsp; &nbsp;</a><br></br>
</p>
</div>
  <h3>Results</h3>
</head>
<style>
button {
    background-color: #003F87;
    font-size: 15px;
    color: white;
    cursor: pointer;
}
th{
  border: 1px solid black;
  text-align: center;
  background: #003F87;
  color: white;
}
table, th, td{
  border: 1px solid black;
  text-align: center;
}
input[type=text], select{
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit]:hover {
    background-color: #003F87;
}
h4{
  text-align: left;
  width: 40%;
}
</style>
<body>
<?php
$dealer = $_POST["dealership_t"];
$make = $_POST["make_t"];
$condition = $_POST["condition_t"];
$model = $_POST["model_t"];
$year = $_POST["year_t"];
$body=$_POST['body_t'];
$color=$_POST['color_t'];
$price = $_POST["price_t"];
$manufacturer = $_POST["manufacturer_t"];
$mileage = $_POST["mileage_t"];
$vin = $_POST["VIN_t"];

$sql = "INSERT INTO Vehicles (VIN, body, color, year, price, model, make, manfac, dealerAt, miles)
VALUES ('$vin', '$body', '$color', $year, $price, '$model', '$make', '$manufacturer', '$dealer', $mileage)";

if ($conn->query($sql) === TRUE) {
    echo "New vehicle inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>
