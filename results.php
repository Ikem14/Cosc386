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
  $body=$_POST['body_type'];
  $color=$_POST['color_t'];
  $priceF = $_POST["price_from"];
  $priceT = $_POST["price_to"];
  $minM = $_POST["min_mile"];
  $maxM = $_POST["max_mile"];
  //$test = "100000";
  //$sql = "SELECT make, model, body, color, year, miles, dealerAt, VIN FROM Vehicles where body like '%$body%' and color like '%$color%'
  //and make like '%$make%' and dealerAt like '%$dealer%' and model like '%$model%'and year like '%$year%'";

  //New queries
  if($condition == "New Vehicles")
  {
	if ($priceT == "over 1000000")
	{
		 $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN
FROM Vehicles WHERE body LIKE '%$body%' AND color LIKE '%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
  AND price >= '$priceF' AND miles = 0";
	}
	else
	{
		 $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
  AND price >= '$priceF' AND price <= '$priceT' AND miles = 0";
	}
}
else if ($condition == "Used Vehicles") {
  if($priceT == "over 1000000")
  {
    if($maxM == "over 1000000")
    {
      $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND miles >= '$minM'AND miles <> 0";
  }
    else
    {
     $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND miles <= '$maxM' AND miles >= '$minM' AND miles <> 0";
  }
  }
  else
  {
    if($maxM == "over 1000000")
    {
     $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND price <= '$priceT' AND miles >= '$minM' AND miles <> 0";
  }
  else
  {
     $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND price <= '$priceT' AND miles <= '$maxM' AND miles >= '$minM' AND miles <> 0";
  }
  }
}
else
{
	if($priceT == "over 1000000")
	{
		if($maxM == "over 1000000")
		{
			$sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND
  year LIKE '%$year%' AND price >= '$priceF' AND miles >= '$minM'";
	}
		else
		{
		 $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND miles <= '$maxM' AND miles >= '$minM'";
	}
	}
	else
	{
		if($maxM == "over 1000000")
		{
		 $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND price <= '$priceT' AND miles >= '$minM'";
	}
	else
	{
		 $sql = "SELECT make, model, body, color, year, miles, price, dealerAt, VIN FROM Vehicles WHERE body LIKE'%$body%' AND color LIKE'%$color%'
  AND make LIKE '%$make%' AND dealerAt LIKE '%$dealer%' AND model LIKE '%$model%' AND year LIKE '%$year%'
   AND price >= '$priceF' AND price <= '$priceT' AND miles <= '$maxM' AND miles >= '$minM'";
	}
	}
}


  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Make</th><th>Model</th><th>Year</th><th>Body Type</th><th>Color</th><th>Mileage</th><th>Price</th><th>Dealership</th><th>VIN</th</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["make"]. "</td><td>" . $row["model"]."</td><td>" . $row["year"]."</td><td>" . $row["body"]. "</td><td>" . $row["color"]. "</td>
         <td>" . $row["miles"]. "</td><td>" . $row["price"]. "</td><td>" . $row["dealerAt"]. "</td><td>" . $row["VIN"]. "</td></tr>";

      //}
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
<br></br><br></br><br></br>
<h3>Contact Form</h3>

<div2 class="container">
  <form action="InfoR.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name.."><br></br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name.."><br></br>

    <label for="cnumber">Contact Number</label>
    <input type="text" id="cnumber" name="ContactNumber" placeholder="Contact Number"><br></br>


    <label for="email">Email</label>
    <input type="text" id="email" name="Email_t" placeholder="I.T.C.Hcorperation@coperation.com"><br></br>

    <h4>
     VIN (Check list above for specific VIN number)
     <select name="VIN_t">
      <option disabled selected value>--select an option--</option>
      <?php
         $select=$conn->query("SELECT VIN FROM Vehicles");
         while($row=$select->fetch_array())
         {
           echo "<option>".$row['VIN']."</option>";
         }
         $conn->close();
         ?>
     </select><br></br>
   </h4>

    <label for="comment">Comment (120 character)</label>
    <textarea id="comment" name="Comment_t" placeholder="Write comment..." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div2>

    <bottom style="position: absolute; bottom:20px; right:50px; ">
    </bottom>
</body>
</html>
