

<!DOCTYPE html>
<html lang="en">
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
<form action="uploader1.php"  enctype="multipart/form-data"  method="POST">
	

    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Edit News</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            			 
                         <?php include 'connection.php';?>
								<?php
										$newsid = $_GET["newsid"];
										$sql = "SELECT * FROM tbl_news where newsid='".$newsid."'";
										$result = $conn->query($sql);
										
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc())
											{
												echo  '<input type="hidden" name="txtoldphoto"/>';
											  	echo  '<input type="hidden" name="txtid" value="'.$newsid.'"/>';
												echo  ' <div class="row">';
												echo  ' <div class="col-sm-2"><h4>Title</h4></div>';
												echo  ' <div class="col-sm-10"><input type="text" class="form-control" value="'.$row['title'].'" name="txttitle" required /></div>';
												echo  ' </div>';


//												echo  '<div class="row">';
//												echo  '		<div class="col-sm-2"><h4>Image</h4></div>';
//												echo  '		<div class="col-sm-10"><img id="blah" src="'.$row['photo'].'" alt="" class="img-rounded" style="height:50px;width:auto;" /> <input id=photoid name=photoid type=submit value=Change Photo> </div>';
//												echo  '</div>';


												echo  '<div class="row">';
												echo  '		<div class="col-sm-2">&nbsp;</div>';
												echo  '		<div class="col-sm-10">&nbsp;</div>';
												echo  '</div>';

												
												echo  '<div class="row">';
												echo  '		<div class="col-sm-2"><h4>Thumbnail Photo</h4></div>';
												echo  '		<div class="col-sm-10"> ';
												
												echo  '				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />';
												echo  '				Choose a file to upload: <input src="/file.txt" class="btn btn-primary" id="imgInp"  name="uploadedfile" type="file" accept="image/x-png, image/gif, image/jpeg"     />';
												echo  '				<br />';
												echo  '				<div id="hideimg"> ';
												echo  '					 <img id="blah" src="'.$row['photo'].'" alt="" class="img-rounded" style="height:90px;width:160px;" />';
												echo  '					<br /><br />';
												echo  '				</div> ';
												echo  '			</div>';
														
												echo  '</div>';
                         
												echo  '	   <div class="row">';
												echo  '		<div class="col-sm-2"><h4>Page Content</h4></div>';
												echo  '		<div class="col-sm-10">';
												echo  '			<textarea id="summernote"  class="form-control" rows="5" cols="5" name="txtpagecontent"  required ">'.$row['content'].'</textarea>';
														
												echo  '		</div>';
													
												echo  '	</div>';
												
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
                            	<a href="manage_news.php" class="btn btn-danger form-control">Cancel</a> 
                            </div>
                            
                        </div>
                    </div>
            </div> 
        </div>
    </div>
</form>

	
  	<!-- jQuery -->
    
	<!-- //jQuery -->
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
  	<!-- //Bootstrap Core JavaScript -->	
  
  
</body>

</html>