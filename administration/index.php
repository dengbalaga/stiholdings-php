<?php include 'connection.php';?>

<?php 
	 
		if(isset($_POST["cmdSubmit"]))
		{		
				session_start();
				$strusername = $_POST['txtusername'];
				$strpassword = $_POST['txtpassword'];
				$sql = "SELECT * from tbl_user where username='".$strusername."' and password='".$strpassword."'";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
						 while($row = $result->fetch_assoc())
						 		{
       						 		$struserid = $row["userid"];
									$_SESSION["userid"] = $struserid;
									
									
   							 }
					
						header('Location:manage_news.php');
					 	
				} else {
					echo "Incorrect Username / Password";
				}
				
				$conn->close(); 
						
		}
?>




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

 	 <!-- Custom CSS
    <link href="../css/scrolling-nav.css" rel="stylesheet">
 	 -->
     <link href="css/style.css" rel="stylesheet">
 	
    
	
</head> 
		
<body style="background-color:#737b92;">
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


	
    <div class="container">
    	<br /><br /><br /> 
    	<div class="row">
        	<div class="col-sm-4"></div> 
            <div class="col-sm-4">
                 	<div class="well" style="background-color:#dae1e3;padding:35px;padding-top:0px; border-radius:10px;">
                    	<img class="img-responsive"   src="img/logo.png" >    
                        <H4 style="text-align:center">Content Management System</H3>  
                        <hr>
                        <input type="text" class="form-control" id="txtusername" name="txtusername" placeholder="Username" required>
                        <br>
                        <input type="password"  class="form-control" id="txtpassword" name="txtpassword" placeholder="Password" required>
                         <br>
                        <input type="Submit" name="cmdSubmit" class="form-control btn btn-primary" value="Login" >
                        
                    </div>
            </div>     
            <div class="col-sm-4"></div>
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