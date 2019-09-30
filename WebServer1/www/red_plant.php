<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<?php
// Start the session
session_start();
// set session variables
$_SESSION["id"] = 4;
$id = $_SESSION["id"]; 
?>
<title>Red Plant</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Connect page to the database
$db_host   = 'localhost';
$db_name   = 'threecor_assignment1';
$db_user   = 'threecor';
$db_passwd = 'uaj478u5';
$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
?>

<h1>Stained Glass Windows</h1>

<h2>Red Plant</h2>

<p>This the order page for the Red Plant Stained Glass Windows.</p>

<img src='https://stainedglasswindow.s3.amazonaws.com/red_plant.jpg' Width='200' Height='400' alt='Red Plant'></figure>

<br>
<p>Below is a table of available sizes, the price for each size and the current stock available.</p> 

<!-- Table for Available Sizes Gothic Windows-->
<table border="1">
<tr><th>Window code</th><th>Window Size code</th><th>Size Name</th><th>Price</th><th>Stock Available</th></tr>

<?php
$q = $pdo->query("SELECT * FROM typeavailable");

while($row = $q->fetch()){
	if($row["product_id"]==4){	
		echo "<tr><td>".$row["product_id"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>\n";
	}
}
?>
</table>

<br>
<!-- Select Size Options Box -->
<p>Select a Size</p>

<form action="quantity.php" method="post">
<select name="size">
<?php
$q = $pdo->query("SELECT * FROM typeavailable");

while($row = $q->fetch()){
	if($row["product_id"]==4){	
		 echo "<option value = ".$row["id"].">".$row["name"]."</option>\n";
	}
}

?>
</select>
<input type="submit" name="submit" value="Select a Size"/>
</form>

</body>
</html>
