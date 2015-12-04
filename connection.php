<?php
$servername="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db="holdings_db"; // Database name



//include ("include/conn.php");

// Connect to server and select databse.
mysql_connect("$servername", "$username", "$password")or die("cannot connect");
mysql_select_db("$db")or die("cannot select DB");

$conn = mysql_connect($servername,$username,$password);
if(!$conn) die("Failed to connect to database!");
$status = mysql_select_db($db, $conn);
if(!$status) die("Failed to select database!");
?>