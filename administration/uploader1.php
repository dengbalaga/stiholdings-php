<?Php 
session_start();  
if($_FILES['uploadedfile']['name'] == "")
{
	 					  include 'connection.php'; 

					 
						$strnewsid = $_POST['txtid'];
						$strtitle = htmlspecialchars(addslashes($_POST['txttitle']));
						$strpagecontent = $conn->real_escape_string($_POST['txtpagecontent']); 
								 
						$sql = "update tbl_news set title='".$strtitle."',content='".$strpagecontent."' where newsid='".$strnewsid."'";
						if ($conn->query($sql) === TRUE) {
							 header('Location:manage_news.php');
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
						$conn->close(); 
		
			 
}
else
{

		
		
		$file_name =  $_FILES['uploadedfile']['name'];
		$random_digit=rand(0000,9999);
		$new_file_name=$random_digit."_".$file_name;
		$path= "uploads/news/".$new_file_name;
		$path_parts = pathinfo($_FILES['uploadedfile']['name']);
		$extension =   $path_parts['extension']; //;

		if($extension != "png" && $extension != "PNG"  && $extension != "jpg" &&  $extension != "JPG" && $extension != "gif" && $extension != "GIF")
{
			  exit("Invalid File");  
		}
		elseif($_FILES['uploadedfile']['size'] == 0)
		{ 
			exit("File is too large");  
		}
		else
		{  
						if(copy($_FILES['uploadedfile']['tmp_name'], $path))
						{
						  
						 				 include './../connection.php'; 

									 
										$strnewsid = $_POST['txtid'];
										$strtitle = htmlspecialchars(addslashes($_POST['txttitle']));
										$strpagecontent = $conn->real_escape_string($_POST['txtpagecontent']); 
												 
										$sql = "update tbl_news set title='".$strtitle."',photo='".$path."',content='".$strpagecontent."' where newsid='".$strnewsid."'";
										if ($conn->query($sql) === TRUE) {
												header('Location:manage_news.php');
										} else {
											echo "Error: " . $sql . "<br>" . $conn->error;
										}
										
										$conn->close(); 
						
								 
						 }
		 
			}
}
?>

 
 
	 	