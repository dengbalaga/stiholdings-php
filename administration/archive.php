<?php  session_start(); ?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STI Holdings - CMS</title>
 	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 
    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet"> 
    
    
    <link href="css/font-awesome.min.css" rel="stylesheet">
 
     <link href="css/style.css" rel="stylesheet"> 
	 
	  <link href="dist/plugin/lightbox/dist/css/lightbox.css" rel="stylesheet"  />
   
     <style> 
		
.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
  </style> 
  
  
</head> 
		
<body>

<?php include 'navbar.php';?>


<form method="get"> 
    <div class="container" id="MainContainer">
    	<div class="row">
        	<div class="col-sm-12">
            		<h1 style="color:#336699;">Archive Data</h1>
                    <div style="height:2px; width:100%; background-color:#859BB1;"> </div>
                    <br /> 
            		 
                    <div class="row">
                    	<div class="col-sm-6">  </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3"> 
                        		<div class="form-group">
                                        <div class="icon-addon addon-md">
                                            <input type="text" placeholder="Search" class="form-control" id="search">
                                            <label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
                                        </div>
                                    </div>
                        
                        </div>
                    </div>
                    
 <div class="row">
    	<div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                        
                         
                            <li class="active"><a href="tabstaticpage" data-toggle="tab">Static Pages</a></li>
                            <li><a href="#tabnews" data-toggle="tab">News</a></li>
                            <li><a href="#tabPhotos" data-toggle="tab">Photos</a></li>
                             <li><a href="#tabPDF" data-toggle="tab">PDF</a></li>
                              <li><a href="#tabCategory" data-toggle="tab">PDF Category</a></li>
                                <li><a href="#tabUser" data-toggle="tab">User</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                    
                      <div class="tab-pane fade in active" id="tabstaticpage">
                        
                               <div class="table-responsive">
                     	<?php include 'connection.php';?>

<?php 

$sql = "SELECT pageid,title,

(select Concat(lastname,',',firstname) as Fullname from tbl_user where userid=upload_by) as  'Upload By' FROM `tbl_static_pages` where arc=1";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData1' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>";  
   echo "<th>Title</th>";  
   echo "<th align='center'>Preview</th>"; 
   echo "<th align='center'>Restore</th>";
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
        	 		 echo "<a href='restore_static_pages.php?pageid=$row[pageid]' class='btn btn-success'><i class='fa fa-refresh'></i></a>";  
				echo "</td >"; 
				
				echo "<td align='center'>"; 
        	 		 echo "<a href='delete_static_pages.php?pageid=$row[pageid]' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					 
				echo "</td>";
				
   			echo "</tr>";  
    }
	echo "</tbody>";
	echo "</table>";
	
	
} else {
   echo "";
}


$conn->close(); 


?> 
</div>
                    
                        </div>
                        
                        
                        <div class="tab-pane fade in " id="tabnews">
                        	
                            
                              <div class="table-responsive">
                     	<?php include 'connection.php';?>

<?php 

$sql = "SELECT newsid,title,photo,content,date_publish,time_publish,

(select Concat(lastname,',',firstname) as Fullname from tbl_user where userid=upload_by) as  'Upload By' FROM `tbl_news` where arc=1";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData2' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>"; 
   echo "<th>Thumbnail Photo</th>"; 
   echo "<th>Title</th>";  
   echo "<th align='center'>Preview</th>"; 
   echo "<th align='center'>Restore</th>";
   echo "<th align='center'>Delete</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
	while($row = $result->fetch_assoc()) 
	
	{
		   
 		 	echo "<tr>";  
			   	echo "<td colspan='1'>"; 
						echo '	 <a href="'.$row["photo"].'" data-lightbox="image-1"   data-title="'.$row["title"].'">';
						echo  "<img src=".$row["photo"]." class='img-responsive img-rounded' style='width:120px;height:70px;'>";
						echo '</a>';
        	 	 
				echo "</td>"; 
			 
			    echo "<td>"; 
        	 		  echo $row["title"];
				echo "</td>"; 
			    
				 echo "<td align='center'>"; 
        	 	 echo "<a href='preview_news.php?newsid=$row[newsid]' style='margin-top:auto;margin-bottom:auto;' class='btn btn-primary'><i class='fa fa-eye'></i></a>";  
				echo "</td>"; 
				
			 
				echo "<td align='center'>"; 
        	 		 echo "<a href='restore_news.php?newsid=$row[newsid]' class='btn btn-success'  title='restore'><i class='fa fa-refresh'></i></a>";  
				echo "</td >"; 
				
				echo "<td align='center'>"; 
        	 		 echo "<a href='delete_news.php?newsid=$row[newsid]' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					 
				echo "</td>";
				
   			echo "</tr>";  
    }
	echo "</tbody>";
	echo "</table>";
	
	
} else {
   echo "";
}


$conn->close(); 


?> 





 

                    </div>
                          
      </div>
                        
                        <div class="tab-pane fade in " id="tabPhotos">
                        
                          <div class="table-responsive">
                     	<?php include 'connection.php';?>
<?php 

$sql = "SELECT photoid,title,filename,path,directpath,extension,(select Concat(lastname,',',firstname) as Fullname from tbl_user where userid=upload_by) as  'Upload By' FROM `tbl_photos` where arc=1";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData3' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>"; 
   echo "<th>Thumbnail Photo</th>"; 
   echo "<th>Title</th>";   
   echo "<th>File Name</th>"; 
   echo "<th>Path</th>";  
   echo "<th>File Extention</th>";
   echo "<th>Upload By</th>"; 
   echo "<th align='center'> </th>";   echo "<th align='center'> </th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
	while($row = $result->fetch_assoc())  
	{ 
 		 	echo "<tr>";  
			   	echo "<td colspan='1'>"; 
        	 	 	  echo '	 <a href="'.$row["path"].'" data-lightbox="image-1"   data-title="'.$row["title"].'">';
						echo  "<img src=".$row["path"]." class='img-responsive img-rounded' style='width:120px;height:70px;'  >";
						echo '</a>';
						
				echo "</td>"; 
			 
			    echo "<td>"; 
        	 		  echo $row["title"];
				echo "</td>";  
				  echo "<td>"; 
        	 		  echo $row["filename"];
				echo "</td>";  
				 echo "<td>"; 
        	 		   echo '<input type="text" class="form-control" value="'.$row["directpath"].'" readonly="readonly">';  
					 
				echo "</td>"; 
	 			echo "<td>"; 
        	 		  echo $row["extension"];
				echo "</td>"; 
				
				 echo "</td>"; 
	 echo "<td>"; 
        	 		  echo $row["Upload By"];
				echo "</td>"; 
				
			 	echo "<td align='center'>"; 
        	 		 echo "<a href='restore_photo.php?photoid=$row[photoid]' class='btn btn-success' ><i class='fa fa-refresh'></i> &nbsp; Restore</a>";  
					 
				echo "</td>";
	 
				
				echo "<td align='center'>"; 
        	 		 echo "<a href='delete_photo.php?photoid=$row[photoid]' class='btn btn-danger' ><i class='fa fa-trash-o'></i> &nbsp; Delete</a>";  
					 
				echo "</td>";
				
   			echo "</tr>";  
    }
	echo "</tbody>";
	echo "</table>";
	
	
} else {
   echo "";
}


$conn->close(); 


?> 
                    </div>
                        </div>
                        
                         
                          <div class="tab-pane fade in  " id="tabPDF">
                        
                        
                        <div class="table-responsive">
                     	<?php include 'connection.php';?>
		
<?php 

$sql = "SELECT pdfid,title,filename,path,directpath,year,(select categoryname from tbl_pdf_category where categoryid=category) as  'category',(select Concat(lastname,',',firstname) as Fullname from tbl_user where userid=upload_by) as  'Upload By' FROM `tbl_pdf` where arc=1";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData4' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>"; 
   echo "<th></th>"; 
   echo "<th>Title</th>";   
   echo "<th>File Name</th>"; 
   echo "<th>Path</th>";  
   echo "<th>Year</th>";
   echo "<th>Category</th>";
   echo "<th>Upload By</th>"; 
    echo "<th align='center'>Restore</th>";
   echo "<th align='center'>Delete</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
	while($row = $result->fetch_assoc()) 
	
	{
		   
 		 	echo "<tr>";  
			   	echo "<td colspan='1'>"; 
        	 		  echo "<img src='img/pdf.png' class='img-responsive'>";
				echo "</td>"; 
			 
			    echo "<td>"; 
					  echo "<a href='".$row["path"]."' target='_blank'  >".$row["title"]."</a>";  
        	 		  
				echo "</td>";  
				  echo "<td>"; 
        	 		  echo $row["filename"];
				echo "</td>";  
				 echo "<td>"; 
        	 		  echo $row["directpath"];
				echo "</td>"; 
	 echo "<td>"; 
        	 		  echo $row["year"];
				echo "</td>"; 
					 echo "<td>"; 
        	 		  echo $row["category"];
				echo "</td>"; 
				 echo "</td>"; 
	 echo "<td>"; 
        	 		  echo $row["Upload By"];
				echo "</td>"; 
				
			 
				 echo "<td align='center'>"; 
        	 		 echo "<a href='restore_pdf.php?pdfid=$row[pdfid]' class='btn btn-success' ><i class='fa fa-refresh'></i></a>";  
					 
				echo "</td>";
				 
				 
				echo "<td align='center'>"; 
        	 		 echo "<a href='delete_pdf.php?pdfid=$row[pdfid]' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					 
				echo "</td>";
				
   			echo "</tr>";  
    }
	echo "</tbody>";
	echo "</table>";
	
	
} else {
   echo "";
}


$conn->close(); 


?> 
                    </div>
               	       </div>
                        
                         
                          <div class="tab-pane fadein " id="tabCategory">
                        
                           <div class="table-responsive">
                     	<?php include 'connection.php';?>
		
<?php 

$sql = "SELECT categoryid,categoryname FROM `tbl_pdf_category` where arc=1";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData5' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>"; 
   echo "<th>Category ID</th>"; 
   echo "<th>Category  Name</th>";  
   
   echo "<th>Restore</th>"; 
   echo "<th>Delete</th>";    
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
	while($row = $result->fetch_assoc()) 
	
	{
		   
 		 	echo "<tr>";   
        	 		 
				echo "<td>"; 
				 			echo $row["categoryid"];
				 echo "</td>"; 
				 echo "<td>"; 
        	 		  echo $row["categoryname"];
				echo "</td>"; 
				 
				
	 			echo "<td align='center'>"; 
        	    echo "<a href='restore_pdf_category.php?categoryid=$row[categoryid]' title='restore' class='btn btn-success'><i class='fa fa-refresh'></i></a>";  
				echo "</td>"; 
				
				
				$strcatid = $row["categoryid"]; 
				 
				$sql1 = "SELECT category  FROM tbl_pdf where category='".$row["categoryid"]."'";
				$result1 = $conn->query($sql1);
				//$num_rows = mysql_num_rows($result);
				
				 
				if ($result1-> num_rows > 0) 
				{
					  
					    
					  	  echo "<td align='center'>"; 
					 	echo "<a href='#' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					 		echo "</td>";
						 				echo "</tr>";  
						 				  
				}
				 else
				 {	 
				 		
						 
				 
				 
						 echo "<td align='center'>"; 
 						echo "<a href='delete_pdf_category.php?categoryid=".$row["categoryid"]."' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
 						echo "</td>";
 						echo "</tr>";  
				 }
			
			
				
    }
	echo "</tbody>";
	echo "</table>";
	
	
} else {
   echo "";
}


$conn->close(); 


?> 
                    </div>
                        </div>
                        
                         
                       
                        
                          <div class="tab-pane fade" id="tabUser"> 
                          
                             <div class="table-responsive">
                     	<?php include 'connection.php';?>

<?php  
$sql = "SELECT * FROM tbl_user where arc=1";
$result = $conn->query($sql);
//$num_rows = mysql_num_rows($result);


if ($result-> num_rows > 0) {
    // output data of each row
 	
  echo "<table id='tblData6' class='table table-hover table-bordered'>";
   echo "<thead>";
   echo "<tr>"; 
   echo "<th>Last Name</th>";
   echo "<th>First Name</th>";
   echo "<th>Middle Name</th>";
   echo "<th>Username</th>";
   echo "<th>Password</th>";
   echo "<th>Userlevel</th>"; 
   echo "<th>Restore</th>";
   echo "<th>Delete</th>"; 
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
	while($row = $result->fetch_assoc()) 
	
	{
		   
 		 	echo "<tr>"; 
			 
			   
			   	echo "<td>"; 
        	 		 echo $row["lastname"]; 
				echo "</td>"; 
			 
			    echo "<td>"; 
        	 		 echo $row["firstname"]; 
				echo "</td>"; 
			  
			  	echo "<td>"; 
        	 		 echo $row["middlename"]; 
				echo "</td>"; 
				
				echo "<td>";
					 echo $row["username"];
				echo "</td>";
				
				echo "<td>";
					 echo $row["password"];
				echo "</td>";
								
				echo "<td>";
					 echo $row["userlevel"];
				echo "</td>";
				
				echo "<td align='center'>"; 
				
					 
					 $strsessionuserid =  $_SESSION["userid"]; 
					 if($strsessionuserid ==  $row["userid"])
					 {
						echo "<a href='#' class='btn btn-warning'><i class='fa fa-pencil'></i></a>"; 
						echo "<td align='center'>"; 
        	 			echo "<a href='#' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					 	echo "</td>";
					 }
					 else
        	 		 {
						 echo "<a href='restore_user.php?userid=$row[userid]' class='btn btn-success'><i class='fa fa-refresh'></i></a>";  
						 echo "</td>"; 
				 		 echo "<td align='center'>"; 
        	 			 echo "<a href='delete_user.php?userid=$row[userid]' class='btn btn-danger' ><i class='fa fa-trash-o'></i></a>";  
					     echo "</td>";
				 	 }
				
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
  
     <script src="js/jquery.js"></script>
	<!-- //jQuery -->
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
	var table = $('#tblData1,#tblData2,#tblData3,#tblData4,#tblData5,#tblData6,#tblData7');
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
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  	<!-- //Bootstrap Core JavaScript -->	
   <script src="dist/plugin/lightbox/dist/js/lightbox.js"></script>
 	
    
	<script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
</body>
</html> 
   
   
 
  