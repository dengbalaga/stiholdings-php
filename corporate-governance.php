<?php include 'header-inside.php' ?>

<!-- MENU -->
<div id="navbar-top">
<?php include 'nav.php' ?>
</div>
<!-- /MENU -->


<!-- HEADER -->
<div id="photoheader2">
<div class="container">
	<h1 style="padding-top:100px; font-size:66px; color:#fff;" class="text-right thin">Corporate Governance</h1></div>
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


<?php
include 'connection.php';
	$query_total="SELECT * FROM tbl_static_pages WHERE pageid=18";	
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

           echo $row["content"];
		
		}
	}
?>

            
            <!-- left body -->
<!--            <h2 style="margin-top:0px;">Manual on Corporate Governance</h2>
            <div style="margin-left:24px; margin-top:24px;"> <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 10 September 2012</a><br>
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 31 January 2012</a><br>
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 30 May 2006</a><br>
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 22 February 1999</a><br>
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 4 September 1997</a><br>
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 28 March 1980</a><br>
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 10 July 1946</a><br>
            </div>
            <a name="boardcommittees"></a>
            <hr>
            <h2 style="margin-top:0px;">Board Committees</h2>
            <div style="margin-left:24px; margin-top:24px;">
              <p>&nbsp;</p>
              <p></p>
            </div>
            <h2 style="margin-top:0px; margin-bottom:24px;"><br>
            </h2>
			<p>&nbsp;</p>       -->
 			<!-- /left body -->  

		<p>&nbsp;</p>
            
    </div>
	<!-- /LEFT CONTENT -->

	<!-- SIDEBAR -->
    <div class="col-md-4">
		<?php include 'sidebar.php' ?>
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