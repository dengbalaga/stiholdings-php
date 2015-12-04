 
<?php include 'connection.php';?>

<?php 
	  
				$pdfid = $_GET['pdfid'];
				 
				$sql = "update tbl_pdf set arc='1' where pdfid='".$pdfid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_documents.php');
 
?>
 