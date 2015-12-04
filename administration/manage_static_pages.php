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
 	 <link href="dist/plugin/lightbox/dist/css/lightbox.css" rel="stylesheet"  />
     
</head> 
		
<body>

<?php include 'navbar.php';?>


<form method="get">

	
	
    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Manage Static Pages</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            		
                    
                    
                    
                    
                       <div class="row">
                    	<div class="col-sm-6"><a href='add_static_pages.php' class='btn btn-success pull-left'><i class='fa fa-plus'></i>&nbsp; Add New Static Page</a></div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3 pull-right">
                        
                        		<div class="form-group">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="Search" class="form-control" id="search">
                                            <label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
                                        </div>
                                    </div> 
                        
                        </div>
                        
                    </div>
                    
                    
                    <div class="table-responsive">
                     	<?php include 'connection.php';?>

<?php 

$sql = "SELECT pageid,title,

(select Concat(lastname,',',firstname) as Fullname from tbl_user where userid=upload_by) as  'Upload By' FROM `tbl_static_pages` where arc=0";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>";  
   echo "<th>Title</th>";  
   echo "<th align='center'>Preview</th>"; 
   echo "<th align='center'>Edit</th>";
   echo "<th align='center'>Delete</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
	while($row = $result->fetch_assoc()) 
	
	{
		   
 		 	echo "<tr>";   
			    echo "<td>"; 
        	 		  echo $row["title"];
				echo "</td>"; 
			    
				 echo "<td align='center'>"; 
        	 	 echo "<a href='preview_static_page.php?pageid=$row[pageid]' style='margin-top:auto;margin-bottom:auto;' class='btn btn-primary'><i class='fa fa-eye'></i></a>";  
				echo "</td>"; 
				
			 
				
				echo "<td align='center'>"; 
        	 		 echo "<a href='edit_static_pages.php?pageid=$row[pageid]' class='btn btn-warning'><i class='fa fa-pencil'></i></a>";  
				echo "</td >"; 
				
				echo "<td align='center'>"; 
        	 		 echo "<a href='archive_static_pages.php?pageid=$row[pageid]' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					 
				echo "</td>";
				
   			echo "</tr>";  
    }
	echo "</tbody>";
	echo "</table>";
	
	
} else {
    echo "0 results";
}


$conn->close(); 


?> 





 

                    </div>
            </div> 
        </div>
    </div>
</form>
  	<!-- jQuery -->
   
    <script src="js/jquery.js"></script>
    
     <script>
   			$(document).ready(function()
{
	$('#search').keyup(function()
	{
		searchTable($(this).val());
	});
});

function searchTable(inputVal)
{
	var table = $('#tblData');
	table.find('tr').each(function(index, row)
	{
		var allCells = $(row).find('td');
		if(allCells.length > 0)
		{
			var found = false;
			allCells.each(function(index, td)
			{
				var regExp = new RegExp(inputVal, 'i');
				if(regExp.test($(td).text()))
				{
					found = true;
					return false;
				}
			});
			if(found == true)$(row).show();else $(row).hide();
		}
	});
}  
    </script>
    
    
    
    <script src="dist/plugin/lightbox/dist/js/lightbox.js"></script>
     
     
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