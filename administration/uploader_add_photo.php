<?Php   
session_start();  
date_default_timezone_set("Asia/Manila");
// Your file name you are uploading 
$file_name =  $_FILES['uploadedfile']['name'];

$path_parts = pathinfo($_FILES['uploadedfile']['name']);
$extension =   $path_parts['extension']; //;
 
$random_digit=rand(0000,9999); 
$strdate = date("Ymd");
$new_file_name=  $strdate."_".$file_name;

 
$path= "uploads/photos/".$new_file_name;

  

$dpath= "http://www.stiholdings.com/cms/uploads/photos/".$new_file_name;

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
				$strpagecontent = $_POST['txtpagecontent'];
			 	$struserlevel= $_SESSION["userid"]; 
					 
				$sql = "INSERT INTO tbl_photos(title,filename,path,directpath,extension,upload_by)
				VALUES('".$strtitle."','".$new_file_name."','".$path."','".$dpath."','".$extension."','".$struserlevel."')";
				
				if ($conn->query($sql) === TRUE) {
					 header('Location:manage_photos.php');
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();   
	 
}  
 
}
  
 





 

?>

 
 
	 	