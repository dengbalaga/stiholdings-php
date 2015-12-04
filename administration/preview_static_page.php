

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
  
    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Preview Page</h1>
                    <div style="height:2px; width:100%; background-color:#EC7600;"> </div>
                    <br />  
                         <?php include 'connection.php';?>
								<?php
										$newsid = $_GET["pageid"];
										$sql = "SELECT * FROM tbl_static_pages where pageid='".$newsid."'";
										$result = $conn->query($sql);
										
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc())
											{ 
											echo $row['content'];  	
										 	}
										}
										
										else 
										{
											echo "0 results";
										}
										
										$conn->close();
								
								?> 
                          
                     
                        
                        
                            
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