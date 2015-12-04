<?php 
	  include 'connection.php';
		if(isset($_POST["cmdSave"]))
		{
			
				$pdfidx = $_GET["pdfid"];
				$strtitle = htmlspecialchars(addslashes($_POST['txttitle']));
				$stryear = $_POST['txtyear'];
				$strcategory = $_POST['txtcategory']; 
				
				$sql = "update tbl_pdf set title='".$strtitle ."',category='".$strcategory ."',year='".$stryear."' where pdfid='".$pdfidx."'";
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_documents.php');
		}
?>


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
<form ction="<?php echo $_SERVER['PHP_SELF']; ?>"     method="POST">
	

    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Edit PDF</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            			 
                       	<?php
									 include 'connection.php';
										$pdfid = $_GET["pdfid"];
										$sql = "SELECT * FROM tbl_pdf where pdfid='".$pdfid."'";
										$result = $conn->query($sql);
										
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc())
											{
													$strcatid = $row["category"];
													 
													echo '		 <div class="row">';
													echo '			<div class="col-sm-2"><h4>Title</h4></div>';
													echo '			<div class="col-sm-10"><input type="text" class="form-control" name="txttitle" value="'.$row["title"].'" required /></div>';
													echo '		  </div>';
													  
													  
													echo '		 <div class="row">';
													echo '			<div class="col-sm-2"><h4>PDF</h4></div>';
													echo '			<div class="col-sm-10"><label class="input" >'.$row["filename"].'</label></div>';
													echo '		  </div>';
													  
														   
													echo '	  <div class="row">';
													echo '		<div class="col-sm-2"><h4>Year</h4></div>';
													echo '		<div class="col-sm-10">';
															
													echo '		<select name="txtyear" class="form-control" required>';
																  
															 	
																 
																 
																
													 			for($i=2015;$i>=2011;$i--)
													 			{
													 			 
																				if($row["year"] ==  $i)
																				{ 
																					 echo '<option selected value="'.$i.'">'.$i.'</option>';
													 				}
																				 else
																				 {
																					 
																					 echo '<option value="'.$i.'">'.$i.'</option>';
													 			
																			  }
																
																
																
																
																
																
																
																}
																
													echo '	</select> ';
													echo '		</div>';
													echo '	  </div>';
														
														
													echo '	 <div class="row">';
													echo '		<div class="col-sm-2"><h4>Category</h4></div>';
													echo '		<div class="col-sm-10">';
															 
													echo '		<select name="txtcategory" class="form-control" required>';
												 						  
																		  
																		  include 'connection.php';
								
																	
																		$sql = "SELECT * FROM tbl_pdf_category";
																		$result = $conn->query($sql);
																		//$num_rows = mysql_num_rows($result);
																		
																		
																		if ($result-> num_rows > 0) 
																		{
																			// output data of each row 
																		 
																			while($row = $result->fetch_assoc()) 
																			
																			{
																				 
																				 
																				if($row["categoryid"] ==  $strcatid)
																				{ 
																					echo '<option   value='.$row["categoryid"].' selected>'.$row["categoryname"].'</option>';
																				}
																				 else
																				 {
																					 
																					 echo '<option  value='.$row["categoryid"].'>'.$row["categoryname"].'</option>';
																				
																					 }
																					
																			}
																			
																		} 
																		
														echo '	</select> ';
														echo '	</div>';
														echo '  </div>';
                        
												
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
                            	<a href="manage_documents.php" class="btn btn-danger form-control">Cancel</a> 
                            </div>
                            
                        </div>
                    </div>
            </div> 
        </div>
    </div>
</form>

	
   
    <!-- Bootstrap Core JavaScript -->
 
 <script src="js/bootstrap.min.js"></script>
  	<!-- //Bootstrap Core JavaScript -->	
  
  
</body>

</html>