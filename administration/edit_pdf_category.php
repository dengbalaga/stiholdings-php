

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STI Holdings - CMS</title>
 	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">

 	<!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

 	 <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
 
	   <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
 
</head> 
		
<body>
 
<?php include 'navbar.php';?>
<?php include 'connection.php';?>

<?php 
	 
		if(isset($_POST["cmdSave"]))
		{
				$strlastname = htmlspecialchars(addslashes($_POST['txtcategoryname'])); 
				$struserid = $_POST['txtid']; 
				
				$sql = "update tbl_pdf_category set categoryname='".$strlastname."' where categoryid='".$struserid."'";
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_pdf_category.php');
		}
?>


   
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	

    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Edit PDF Category</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            			
                    <div class="table-responsive"> 
 						<table class='table table-hover table-bordered'> 
   						<thead>
                        	<tr>
                            	<th>Category Name</th> 
                                <th></th><th></th> 
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<?php include 'connection.php';?>
								<?php
										$userid = $_GET["categoryid"];
										$sql = "SELECT categoryname FROM tbl_pdf_category where categoryid='".$userid."'";
										$result = $conn->query($sql);
										
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc())
											{
											
											  	echo  '<input type="hidden" name="txtid" value="'.$userid.'"/>';
												echo  '<td><input type="text" name="txtcategoryname" id="txtcategoryname" class="form-control" value="'.$row["categoryname"].'"/></td>';
										 	}
										}
										
										else 
										{
											echo "0 results";
										}
										
										$conn->close();
								
								?> 
                              
                                <td><input type="submit" name="cmdSave" id="cmdSave" value="Save" class="btn btn-success form-control" /></td>
                                <td><a href="manage_pdf_category.php" class="btn btn-danger form-control">Cancel</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
            </div> 
        </div>
    </div>
</form>


  	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	<!-- //jQuery -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  	<!-- //Bootstrap Core JavaScript -->	
    
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <!--//Scrolling Nav JavaScript -->
    
</body>

</html>