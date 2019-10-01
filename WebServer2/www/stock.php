<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>

<title>Admin - Stock</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Connect page to the database
$db_host   = 'ec2-3-221-160-177.compute-1.amazonaws.com';
$db_name   = 'stainedglass';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';
$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
?>

<h1>Admin - Stock</h1>

<h2>Coloured Tree</h2>

<p>This the Admin Stock page for Stained Glass Windows.<p>

<p>Below are the tables of available sizes, the price for each size and the current stock available.</p>

<!-- Table for Available Sizes Astrological Windows-->
<h3>Astrological</h3>

<figure class='images'><img src='https://stainedglasswindow.s3.amazonaws.com/astrological.jpg' Width= '200' Height='400' alt='Astrological Window'></figure>

<table border="1">
<tr><th>Window code</th><th>Window Size code</th><th>Size Name</th><th>Price</th><th>Stock Available</th></tr>

<?php
$q = $pdo->query("SELECT * FROM typeavailable");

while($row = $q->fetch()){
	if($row["product_id"]==1){	
		echo "<tr><td>".$row["product_id"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>\n";
	}
}
?>
</table>

<br>
<h3>Coloured Tree</h3>

<figure class='images'><img src='https://stainedglasswindow.s3.amazonaws.com/coloured_tree.jpg' Width= '200' Height='400' alt='Coloured Tree Window'></figure>

<!-- Table for Available Sizes Coloured Tree Windows-->
<table border="1">
<tr><th>Window code</th><th>Window Size code</th><th>Size Name</th><th>Price</th><th>Stock Available</th></tr>

<?php
$q = $pdo->query("SELECT * FROM typeavailable");

while($row = $q->fetch()){
	if($row["product_id"]==2){	
		echo "<tr><td>".$row["product_id"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>\n";
	}
}
?>
</table>

<br>
<h3>Gothic</h3>

<figure class='images'><img src='https://stainedglasswindow.s3.amazonaws.com/gothic.jpg' Width= '200' Height='400' alt='Gothic Window'></figure>

<!-- Table for Available Sizes Gothic Windows-->
<table border="1">
<tr><th>Window code</th><th>Window Size code</th><th>Size Name</th><th>Price</th><th>Stock Available</th></tr>

<?php
$q = $pdo->query("SELECT * FROM typeavailable");

while($row = $q->fetch()){
	if($row["product_id"]==3){	
		echo "<tr><td>".$row["product_id"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>\n";
	}
}
?>
</table>

<br>
<h3>Red Plant</h3>

<figure><img src='https://stainedglasswindow.s3.amazonaws.com/red_plant.jpg' Width='200' Height='400' alt='Red Plant'></figure>

<!-- Table for Available Sizes Red Plant Windows-->
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
<h3>Religious</h3>

<figure class='images'><img src='https://stainedglasswindow.s3.amazonaws.com/religious.jpg' Width='200' Height='400' alt='Religious Window'></figure>

<!-- Table for Available Sizes Religious Windows-->
<table border="1">
<tr><th>Window code</th><th>Window Size code</th><th>Size Name</th><th>Price</th><th>Stock Available</th></tr>

<?php
$q = $pdo->query("SELECT * FROM typeavailable");

while($row = $q->fetch()){
	if($row["product_id"]==5){	
		echo "<tr><td>".$row["product_id"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["stock"]."</td></tr>\n";
	}
}
?>
</table>

<br>

</body>
</html>
