<?Php   
session_start(); 
 
 include 'connection.php'; 	 
	
  
				$strtitle = htmlspecialchars(addslashes($_POST['txttitle']));
				
				  $strpagecontent = $conn->real_escape_string($_POST['txtpagecontent']);
				 
				 
				 
				 
			 	$struserlevel=   addslashes($_SESSION["userid"]);
				date_default_timezone_set("Asia/Manila");
						 
				$sql = "INSERT INTO tbl_static_pages(title,content,upload_by)
				VALUES('".$strtitle."','".$strpagecontent."','".$struserlevel."' )";
				
				if ($conn->query($sql) === TRUE) {
					 header('Location:manage_static_pages.php');
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();   
  
?>

 
 
	 	