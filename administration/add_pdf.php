

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
<form action="uploader_add_pdf.php"  enctype="multipart/form-data" method="POST">
	

    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Add PDF</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            			 
                       <div class="row">
                        	<div class="col-sm-2"><h4>Title</h4></div>
                            <div class="col-sm-10"><input type="text" class="form-control" name="txttitle" required /></div>
                          </div>
                      
                          
                
                          <div class="row">
                        	<div class="col-sm-2"><h4>PDF File</h4></div>
                            <div class="col-sm-10"> 
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
								Choose a file to upload: <input  required class="btn btn-primary" id="imgInp" name="uploadedfile" type="file" accept=".pdf"  required />
                               	<br />  
                        	</div>   
                        </div>
                        
                        
                        
                        
                          <div class="row">
                        	<div class="col-sm-2"><h4>Year</h4></div>
                            <div class="col-sm-10">
                            
                            <select name="txtyear" class="form-control" required>
                            	  
                                <?Php    
                                
								for($i=2015;$i>=2011;$i--)
								{
									 echo '<option value='.$i.'>'.$i.'</option>';
								}
								
								?>
                            </select> 
                            </div>
                          </div>
                        
                        
                         <div class="row">
                        	<div class="col-sm-2"><h4>Category</h4></div>
                            <div class="col-sm-10">
                            
                            <select name="txtcategory" class="form-control" required>
                            	  	<?php include 'connection.php';?>

										<?php  
                                        $sql = "SELECT * FROM tbl_pdf_category";
                                        $result = $conn->query($sql);
                                        //$num_rows = mysql_num_rows($result);
                                        
                                        
                                        if ($result-> num_rows > 0) 
										{
                                            // output data of each row 
                                         
                                            while($row = $result->fetch_assoc()) 
                                            
                                            {
                                               	echo '<option  value='.$row["categoryid"].'>'.$row["categoryname"].'</option>';
                                                   
											}
                                            
                                        }
											 else {
                                             echo "0 results";
                                        } 
                                        $conn->close();  
                                        ?> 
                                         
                            </select> 
                            </div>
                          </div>
                        
                        
                        
                          <div class="row">
                        	<div class="col-sm-6">
                            	<input type="submit" name="cmdSave" id="cmdSave" value="Save" class="btn btn-success form-control" />
                            </div>
                            <div class="col-sm-6">
                            	<a href="manage_documents.php" class="btn btn-danger form-control">Cancel</a> 
                            </div>
                            
                        </div>
                    </div>
            </div> 
        </div>
    </div>
</form>

	
  	<!-- jQuery -->
    
	<!-- //jQuery -->
    
    <!-- Bootstrap Core JavaScript -->
 
 <script src="js/bootstrap.min.js"></script>
  	<!-- //Bootstrap Core JavaScript -->	
  
  
</body>

</html>