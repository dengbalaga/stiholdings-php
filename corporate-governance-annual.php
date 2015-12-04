<?php include 'header-inside.php' ?>

<!-- MENU -->
<div id="navbar-top">
<?php include 'nav.php' ?>
</div>
<!-- /MENU -->


<!-- HEADER -->
<div id="photoheader2">
<div class="container">
	<h1 style="padding-top:100px; font-size:66px; color:#fff;" class="text-right thin">Corporate Governance</h1>
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
 
 
 <?php
include 'connection.php';
	$query_total="SELECT * FROM tbl_static_pages WHERE pageid=20";	
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
 
<!--            <h2 style="margin-top:0px;">Annual Corporate Governance Report</h2>
            
            <hr>
            
            <div style="margin:24px 0px 24px 24px;">
              <p><strong>UPDATES &amp; CHANGES FOR 2013</strong></p>
              <p><a href="#">By-Laws – 10 September 2012</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 31 January 2012</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 30 May 2006</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 22 February 1999</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 4 September 1997</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 28 March 1980</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 10 July 1946</a><br>
              </p>
            </div>
            
            <hr>

            <div style="margin:24px 0px 24px 24px;">
              <p><strong>UPDATES &amp; CHANGES FOR 2013</strong></p>
              <p><a href="#">By-Laws – 10 September 2012</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 31 January 2012</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 30 May 2006</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 22 February 1999</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 4 September 1997</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 28 March 1980</a><br>
                <span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">By-Laws – 10 July 1946</a><br>
              </p>
            </div>

			<p>&nbsp;</p>   -->    
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