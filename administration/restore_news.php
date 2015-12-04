<?Php 
 						 include 'connection.php'; 

	 
					 
						$strnewsid = $_GET['newsid'];
						 
						$sql = "update tbl_news set arc='0' where newsid='".$strnewsid."'";
						if ($conn->query($sql) === TRUE) {
					 header('Location:archive.php');
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
						$conn->close(); 
		
		 
 
?>

 
 
	 	