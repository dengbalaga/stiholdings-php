

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
<form action="uploader_add_static_pages.php"  enctype="multipart/form-data"   method="POST">
	

    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Add Static Pages</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            			 
                        <div class="row">
                        	<div class="col-sm-2"><h4>Title</h4></div>
                            <div class="col-sm-10"><input type="text" class="form-control" name="txttitle" required /></div>
                          </div>
                     
                        
                        
                           <div class="row">
                        	<div class="col-sm-2"><h4>Page Content</h4></div>
                            <div class="col-sm-10">
                            	<textarea id="summernote" class="form-control" rows="5" cols="5" name="txtpagecontent" required></textarea>
                              </div>
                            
                        </div>
                        
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