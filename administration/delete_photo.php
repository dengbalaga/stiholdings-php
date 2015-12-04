 
<?php include 'connection.php';?>

<?php 
	  
				$strPhotoid = $_GET['photoid'];
				 
				$sql = "Delete from tbl_photos where photoid='".$strPhotoid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:archive.php');
 
?>
 