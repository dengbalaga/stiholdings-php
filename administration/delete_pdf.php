 
<?php include 'connection.php';?>

<?php 
	  
				$pdfid = $_GET['pdfid'];
				 
				$sql = "Delete from tbl_pdf where pdfid='".$pdfid."'";
				
				if ($conn->query($sql) === TRUE) {
					 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:archive.php');
 
?>
 