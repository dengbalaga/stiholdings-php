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
        	<span class="glyphicon glyphicon-home" aria-hidden="true"></span> <a href="index.php">Home</a> > <a href="#">Corporate Governance</a>
            <!-- /breadcrumbs -->
            
            <p>&nbsp;</p>
            
            <!-- left body -->
            <h3 style="margin-top:0px;">Latest News</h3>

<?php
//Include the PS_Pagination class
include('ps_pagination.php');

include 'connection.php';

	$sql = "SELECT * FROM tbl_news ORDER BY newsid DESC";

	$pager = new PS_Pagination($conn, $sql, 5, 5, "param1=valu1&param2=value2");

	/*
	 * Enable debugging if you want o view query errors
	*/
	$pager->setDebug(true);

	/*
	 * The paginate() function returns a mysql result set
	 * or false if no rows are returned by the query
	*/

	$rs = $pager->paginate();

	if(!$rs) die(mysql_error());

	$query_total="SELECT * FROM tbl_news";	
	$result=mysql_query($query_total) or die('Error,query Failed.'.mysql_error());
	$num_rows = mysql_num_rows($result);

	while($row = mysql_fetch_assoc($rs)) {
?>

            <hr>
            <div class="row text-left">
              <div class="col-sm-4"><img src="administration/<?php echo $row["photo"]; ?>" class="img-responsive" alt=""/></div>
              <div class="col-sm-8">
                <h4 style="margin-top:0px; padding-top:0px; line-height:22px;"><a href="#"><?php echo $row["title"]; ?></a></h4>
                <?php echo $row["content_preview"]; ?>
                <p>&nbsp;</p>
                <a class="btn btn-xs btn-info" href="news-view.php?id=<?php echo $row["newsid"]; ?>">Read More</a></div>
            </div>


            <p>&nbsp;</p>
            

<?php
	}
	echo "<ul class='pager'>";	
	//Display the full navigation in one go
	echo $pager->renderFullNav();
echo "</ul>";
	echo "</p>";
?>
<!--            <p>&nbsp;</p>
            <ul class="pager">
              <li class="next pull-left"><a style="text-decoration:none" href="#" class="rightlinks style45">← Previous</a></li>
              <li class="next pull-right"><a style="text-decoration:none" href="#" class="rightlinks style45">Next →</a></li>
              <p>&nbsp;</p>
            </ul>
            <p>&nbsp;</p>-->


<br><br>
<!-- /TEST -->


            
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