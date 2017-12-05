<!--connecting to server-->
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
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript"></script>

  <title>I.T.C.H Corperation</title>
  <link rel="stylesheet" type="text/css" href="page.css">
  <h1>I.T.C.H Corperation</h1>
  <h3>The Leading International Car Dealership</h3>

  <style>

  .dropdown-content a:hover {background-color: #f1f1f1}
  .dropdown:hover .dropdown-content {
      display: block;
  }
  .dropdown:hover .dropbtn {
      background-color: black;
  }
  bottom
  {
	  position:absolute;
	  bottom: 5%;
	  right: 2%;

  }

  </style>
  </head>
  <body>
    <form action="results.php" method="post">

    <h4>
    <div id="select_box">
		Dealership
		<select name="dealership">
		 <option disabled selected value> -- select an option -- </option>
     <?php
        $select=$conn->query("SELECT name FROM Dealership");
        while($row=$select->fetch_array())
        {
          echo "<option>".$row['name']."</option>";
        }
        ?>
		</select>
	</h4>
  <h4>
   Make
   <select name="make">
    <option disabled selected value>  select an option </option>
    <?php
       $select=$conn->query("SELECT sellsNew FROM Dealership");
       while($row=$select->fetch_array())
       {
         echo "<option>".$row['sellsNew']."</option>";
       }
       ?>
   </select>
 </h4>
	<h4>
		Condition
		<select name="condition">
		 <option selected value>New and Used Vehicles</option>
			<option>New Vehicles</option>
			<option>Used Vehicles</option>
      <option default></option>
		</select>
	</h4>

	<h4>
		Model
		<select name="model">
		 <option disabled selected value> -- select an option -- </option>
     <?php
        $select=$conn->query("SELECT distinct model FROM Vehicles");
        while($row=$select->fetch_array())
        {
          echo "<option>".$row['model']."</option>";
        }
        ?>
		</select>
	</h4>

	<h4>
    <SCRIPT LANGUAGE="JavaScript">

    var time = new Date();
    var year = time.getYear();
    if (year < 1900) {
    year = year + 1900;
    }
    var date = year+2; /*change the '101' to the number of years in the past you want to show */
    var past = year - 49; /*change the '100' to the number of years in the future you want to show */
    document.writeln ("Year<SELECT id='year'><OPTION disabled selected value=\"\">-- Select Year --");
    do {
    date--;
    document.write ("<OPTION value=\"" +date+"\">" +date+ "");
    }
    while (date > past)
    document.write ("</SELECT>");

  </SCRIPT>

</h4>

	<h4>
		Body Type
		<select name="body_type">
		 <option disabled selected value> -- select an option -- </option>
     <?php
        $select=$conn->query("SELECT distinct body FROM Vehicles");
        while($row=$select->fetch_array())
        {
          echo "<option>".$row['body']."</option>";
        }
        ?>
		</select>
	</h4>
	<h4>
		Color
		<select name="color">
		 <option disabled selected value> -- select an option -- </option>
     <?php
        $select=$conn->query("SELECT distinct color FROM Vehicles");
        while($row=$select->fetch_array())
        {
          echo "<option>".$row['color']."</option>";
        }
        ?>
		</select>
	</h4>

	<h4>
		Price  Range From
		<select name="price_from">
     <option selected value> $0 </option>
     <option> $10,000 </option>
     <option> $20,000 </option>
     <option> $30,000 </option>
     <option> $40,000 </option>
     <option> $50,000 </option>
		</select>
		 To
		<select name="price_to">
       <option selected value> $10,000 </option>
       <option> $20,000 </option>
       <option> $30,000 </option>
       <option> $40,000 </option>
       <option> $50,000 </option>
       <option> over $100,000 </option>
		</select>
	</h4>

	<h4>
		Mileage Minimum
		<select name="min_mile">
		 <option selected value> 0 miles </option>
     <option> 10,000 miles </option>
     <option> 20,000 miles </option>
     <option> 30,000 miles </option>
     <option> 40,000 miles </option>
     <option>  50,000 miles </option>
     <option>  100,000 miles </option>
		</select>
		 Maximum
		<select name="max_mile">
      <option selected value> 10,000 miles </option>
      <option> 20,000 miles </option>
      <option> 30,000 miles </option>
      <option> 40,000 miles </option>
      <option>  50,000 miles </option>
      <option>  over 100,000 miles </option>
		</select>
    </div>
    <br></br>
    <button type="submit">Search</button>

</h4>
</form>


  <bottom>
    <a style="position:relative; font-size: 25; color: black; padding-right: 15px; float: right; text-decoration: none; " href="about.html">About us</a>
    <a style="position:relative; font-size: 25; color: black; padding-right: 15px; float: right; text-decoration: none;" href="Login.html">Admin Login</a>
  </bottom>
</body>
</html>
