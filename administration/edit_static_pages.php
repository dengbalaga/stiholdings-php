

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STI Holdings - CMS</title>
 	
  <script src="dist/jquery-1.9.1.min.js"></script> 
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<script src="js/bootstrap.min.js"></script>  

 <link href="css/style.css" rel="stylesheet">
 <link href="css/font-awesome.min.css" rel="stylesheet"> 
<link href="dist/summernote.css" rel="stylesheet">
<link href="dist/summernote-bs3.css" rel="stylesheet">
<script src="dist/summernote.min.js"></script>
  
 <style>
.panel-default>.panel-heading {
    color: #333;
    background-color: #337AB7;
    border-color: #fff;
}
</style> 
</head> 
		
<body>
 
<?php include 'navbar.php';?>
<?php include 'connection.php';?>

<?php 
	 
		if(isset($_POST["cmdSave"]))
		{
				$strtitle = htmlspecialchars(addslashes($_POST['txttitle']));  
				$content= $conn->real_escape_string($_POST['txtpagecontent']);
				
				
				
				$strpageid	= $_POST['txtid']; 
				
				$sql = "update tbl_static_pages set title='".$strtitle."',content='".$content."' where pageid='".$strpageid."'";
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_static_pages.php');
		}
?>


   
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	  <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Edit Static Pages</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 

                      			<?php include 'connection.php';?>
								<?php
										$pageid= $_GET["pageid"];
										$sql = "SELECT title,content FROM tbl_static_pages where pageid='".$pageid."'";
										$result = $conn->query($sql);
										
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc())
											{
											 	echo  '<input type="hidden" name="txtid" value="'.$pageid.'"/>';
												echo  '<div class="row">';
												echo  '<div class="col-sm-2"><h4>Title</h4></div>';
												echo  '<div class="col-sm-10"><input type="text" class="form-control" name="txttitle" required value="'.$row["title"].'" /></div></div>';
											
											
												echo  '<div class="row"><div class="col-sm-2"><h4>Page Content</h4></div>';
												echo  '<div class="col-sm-10">';
												echo  '<textarea id="summernote" class="form-control" rows="5" cols="5" name="txtpagecontent" required>'.$row["content"].'</textarea>';
												echo  '</div></div> ';
												
										   	}
										}
										 else 
										{
											echo "0 results";
										}
										 $conn->close();
								 ?> 
                   
            			  
                          <div class="row">
                        	<div class="col-sm-6">
                            	<input type="submit" name="cmdSave" id="cmdSave" value="Save" class="btn btn-success form-control" />
                            </div>
                            <div class="col-sm-6">
                            	<a href="manage_static_pages.php" class="btn btn-danger form-control">Cancel</a> 
                            </div>
                            
                        </div>
                    </div>
            </div> 
        </div>
    </div>
</form>
 

    <script>
	
	$(document).ready(function(){ 
			  $('#summernote').summernote({height: 300});
			 
		 
	$('#imgInp').change(function(){
	
			$('#hideimg').css("display","block");
	});
	
	 
	
	
	  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
	
}); 
  
    </script>
    <!-- Bootstrap Core JavaScript -->
 
 <script src="js/bootstrap.min.js"></script>
</body>

</html>