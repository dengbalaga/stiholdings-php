 
<?php include 'connection.php';?>

<?php 
	 
	 		  
				$strpageid	= $_GET["pageid"];  
				$sql = "update tbl_static_pages set arc= 0  where pageid=".$strpageid."";
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
		 header('Location:archive.php');
	 
?>
 