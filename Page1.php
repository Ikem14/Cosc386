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
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript"></script>

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
		Dealership
		<select name="dealership_t">
		 <option selected value> All Dealerships </option>
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
   <select name="make_t">
    <option selected value>  All Makes </option>
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
		<select name="condition_t">
		 <option selected value>New and Used Vehicles</option>
			<option>New Vehicles</option>
			<option>Used Vehicles</option>
		</select>
	</h4>

	<h4>
		Model
		<select name="model_t">
		 <option selected value> All Models </option>
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
    document.writeln ("Year<SELECT name='year_t'><OPTION selected value=\"\">All Years");
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
		 <option selected value> All Body types </option>
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
		<select name="color_t">
		 <option selected value>All Colors</option>
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
		Price  Range From $
		<select name="price_from">
     <option selected value> 0 </option>
     <option> 10000 </option>
     <option> 20000 </option>
     <option> 30000 </option>
     <option> 40000 </option>
     <option> 50000 </option>
		</select>
		 To $
		<select name="price_to">
       <option> 10000 </option>
       <option> 20000 </option>
       <option> 30000 </option>
       <option> 40000 </option>
       <option> 50000 </option>
       <option > 100000 </option>
       <option selected value> 1000000 </option>
       <option >  over 1000000 </option>
		</select>
	</h4>

	<h4>
		Mileage Minimum (miles)
		<select name="min_mile">
		 <option selected value> 0 </option>
     <option> 10000 </option>
     <option> 20000 </option>
     <option> 30000 </option>
     <option> 40000 </option>
     <option> 50000 </option>
     <option> 100000 </option>
     <option> over 100000 </option>

		</select>
		 Maximum (miles)
		<select name="max_mile">
      <option> 10000 </option>
      <option> 20000 </option>
      <option> 30000 </option>
      <option> 40000 </option>
      <option>  50000 </option>
      <option > 100000</option>
      <option selected value> 1000000</option>
      <option> over 1000000</option>
		</select>
    <br></br>
    <button type="submit">Search</button>

</h4>
</form>

</body>
</html>
