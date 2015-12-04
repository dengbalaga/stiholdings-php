 
<?php include 'connection.php';?>

<?php 
	  
				$struserid = $_GET['categoryid'];
				 
				$sql = "update tbl_pdf_category set arc='1' where categoryid='".$struserid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_pdf_category.php');
 
?>
 