 
<?php include 'connection.php';?>

<?php 
	  
				$struserid = $_GET['userid'];
				 
				$sql = "Delete from tbl_user where userid='".$struserid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:archive.php');
 
?>
 