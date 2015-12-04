 
<?php include 'connection.php';?>

<?php 
	  
				$struserid = $_GET['categoryid'];
				 
				$sql = "Delete from tbl_pdf_category where categoryid='".$struserid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:archive.php');
 
?>
 