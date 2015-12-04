<?Php   
session_start(); 
// Your file name you are uploading 
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
								
								include 'connection.php'; 
								  
								$strtitle = htmlspecialchars(addslashes($_POST['txttitle']));
								$strpagecontent =  $conn->real_escape_string($_POST['txtpagecontent']);
								 
								$struserlevel= htmlspecialchars(addslashes($_SESSION["userid"]));
								date_default_timezone_set("Asia/Manila");
										 
								$sql = "INSERT INTO tbl_news(title,photo,content,time_publish,date_publish,upload_by)
								VALUES('".$strtitle."','".$path."','".$strpagecontent."','".date("h:i A")."','".date("m/d/Y")."','".$struserlevel."')";
								
								if ($conn->query($sql) === TRUE) {
									 header('Location:manage_news.php');
								} else {
									echo "Error: " . $sql . "<br>" . $conn->error;
								}
								
								$conn->close();  
							  
				 
				}
}
?>

 
 
	 	