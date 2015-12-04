

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
			
				  
			 
			
				
				$strlastname = addslashes($_POST['txtlastname']);
				$strlastname = htmlspecialchars($strlastname);
				
				$strfirstname = addslashes($_POST['txtfirstname']);
				$strfirstname = htmlspecialchars($strfirstname);
				 
				$strmiddlename = addslashes($_POST['txtmiddlename']);
				$strmiddlename = htmlspecialchars($strmiddlename);
				
				
				
				
				$strusername = htmlspecialchars(addslashes($_POST['txtusername']));
				$strpassword = htmlspecialchars(addslashes($_POST['txtpassword']));
				$struserlevel = htmlspecialchars(addslashes($_POST['txtuserlevel'])); 
				
				$sql = "INSERT INTO tbl_user(lastname,firstname,middlename,username,password,userlevel)
				VALUES('".$strlastname."','".$strfirstname."','".$strmiddlename."','".$strusername."','".$strpassword."','".$struserlevel ."')";
				
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close(); 
				
				header('Location:manage_user.php');
		}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	

    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Add New User</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            			
                    <div class="table-responsive"> 
 						<table class='table table-hover table-bordered'> 
   						<thead>
                        	<tr>
                            	<th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Userlevel</th>
                                <th></th><th></th> 
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td><input type="text" name="txtlastname" id="txtlastname" class="form-control" /></td>
                                <td><input type="text" name="txtfirstname" id="txtfirstname" class="form-control" /></td>
                                <td><input type="text" name="txtmiddlename" id="txtmiddlename" class="form-control" /></td>
                                <td><input type="text" name="txtusername" id="txtusername" class="form-control" /></td>
                                <td><input type="text" name="txtpassword" id="txtpassword" class="form-control" /></td>
                                <td><input type="text" name="txtuserlevel" id="txtuserlevel" class="form-control" /></td>
                                <td><input type="submit" name="cmdSave" id="cmdSave" value="Save" class="btn btn-success" /></td>
                                <td><a href="manage_user.php" class="btn btn-danger">Cancel</a></td>
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