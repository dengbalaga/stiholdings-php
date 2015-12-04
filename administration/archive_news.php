<?Php 
 					 	
						
						include 'connection.php';

	 	 
					 
						$strnewsid = $_GET['newsid'];
						 
						$sql = "update tbl_news set arc='1' where newsid='".$strnewsid."'";
						if ($conn->query($sql) === TRUE) {
								 header('Location:manage_news.php');
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
						$conn->close(); 
		
		 
 
?>

 
 
	 	