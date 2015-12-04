 
<?php include 'connection.php';?>

<?php 
	  
				$struserid = $_GET['pageid'];
				 
				$sql = "Delete from tbl_static_pages where pageid='".$struserid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:archive.php');
 
?>