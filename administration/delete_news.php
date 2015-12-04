 
<?php include 'connection.php';?>

<?php 
	 
		 
				$strnewsid = $_GET['newsid'];
				 
				$sql = "Delete from tbl_news where newsid='".$strnewsid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:archive.php');
 
?>
 