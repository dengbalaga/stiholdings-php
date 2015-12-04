<?php $gotid= $_GET['id']; ?>
<?php include 'header-inside.php' ?>

<!-- MENU -->
<div id="navbar-top">
<?php include 'nav.php' ?>
</div>
<!-- /MENU -->


<!-- HEADER -->
<div id="photoheader2">
<div class="container">
	<h1 style="padding-top:100px; font-size:66px; color:#fff;" class="text-right thin">Press Material / News</h1>
</div>
</div>
<!-- /HEADER -->


<!-- CONTENT -->
<div class="inside-page-top">
<div class="container">
<div class="row" style="padding-top:30px;">


	<!-- LEFT CONTENT -->
    <div class="col-md-8" style="padding-right:40px;">
    
			<!-- breadcrumbs -->    		
        	<span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="index.php">Home</a> > <a href="#">Press Materials / News</a>
            <!-- /breadcrumbs -->
            
            <p>&nbsp;</p>
            
            <!-- left body -->
  
  
  
  
          <div class="row">
<?php
include 'connection.php';
	$query_total="SELECT * FROM tbl_news WHERE newsid=$gotid";	
	$result=mysql_query($query_total) or die('Error,query Failed.'.mysql_error());
	//$num_rows = mysql_num_rows($result);
	if(mysql_num_rows($result)==0)
	{
		echo "There are no Current Post at this time";
	}
	else
	{
  		while ($row = mysql_fetch_array($result))
  		{ 
?>

	<div class="col-sm-12"><img src="administration/<?php echo $row["photo"]; ?>" class="img-responsive" alt=""/></div>
    <p>&nbsp;</p>
    <div class="col-sm-12">
    <h3 style="margin-top:0px; padding-top:0px; line-height:26px; width:90%;"><a href="#"><?php echo $row["title"]; ?></a></h3>
    <em><?php echo $row["date_publish"]; ?></em>
    <p>&nbsp;</p>
	<?php echo $row["content"]; ?>

	 </div>
<?php		
		}
	}
?>
			</div>


            <ul class="pager">
            <!--<li class="next pull-left"><a style="text-decoration:none" href="#" class="rightlinks style45">← Previous</a></li>-->
            <li class="next pull-right"><a style="text-decoration:none" href="javascript:history.back()" class="rightlinks style45">← Go Back</a></li>				
            <p>&nbsp;</p>
            </ul>
		  
			<p>&nbsp;</p>
            <p>&nbsp;</p>
            
			

            
    </div>
	<!-- /LEFT CONTENT -->

	<!-- SIDEBAR -->
    <div class="col-md-4">
		<?php include 'sidebar-news.php' ?>
		<p>&nbsp;</p>      
    </div>
    <!-- /SIDEBAR -->


</div>
</div><!-- /container -->
</div><!-- /inside page top -->
<!-- /CONTENT -->



<!-- LOGOS -->
<?php include 'logos.php' ?>
<!-- /LOGOS -->



<!-- FOOTER INSIDE -->
<?php include 'footer.php' ?>
<!-- /FOOTER INSIDE -->


  </body>
</html>