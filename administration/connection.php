<?php
//$servername = "MYSQL5006.Smarterasp.net";
//$username = "9cae46_sh";
//$password = "sgnidlohits";
//$db = "db_9cae46_sh";

$servername = "localhost";
$username = "root";
$password = "root";
$db = "holdings_db";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}  
else
{
	 
}



//mysql_connect($servername, $username, $password) or die(mysql_error());
//mysql_select_db($db) or die(mysql_error());
?>