 
<?php include 'connection.php';?>

<?php 
	  
				$struserid = $_GET['userid'];
				 
				$sql = "update tbl_user set arc=1 where userid='".$struserid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_user.php');
 
?>
 