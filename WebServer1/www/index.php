<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<title>Stained Glass Windows</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$db_host   = 'ec2-3-221-160-177.compute-1.amazonaws.com';
$db_name   = 'stainedglass';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';
$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
?>

<h1>Stained Glass Windows</h1>

<p>We offer the following stained glass windows:</p>

<table border="1">
<tr><th>Window Code</th><th>Window Name</th></tr>
<?php
$q = $pdo->query("SELECT * FROM stainedwindows");

while($row = $q->fetch()){
  echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>\n";
}

?>
</table>


<h2>Select A Stained Glass Window from one of the links below.</h2>

<p><a href='astrological.php'>Astrological</a></p>
    
<p><a href='coloured_tree.php'>Coloured Tree</a></p>
    
<p><a href='gothic.php'>Gothic</a></p>
    
<p><a href='red_plant.php'>Red Plant</a></p>
    
<p><a href='religious.php'>Religious</a></p>    

<h2>This is the link to the Admin Page if you are logged in as Admin</p>



</body>
</html>

