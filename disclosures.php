<?php include 'header-inside.php' ?>

<!-- MENU -->
<div id="navbar-top">
<?php include 'nav.php' ?>
</div>
<!-- /MENU -->


<!-- HEADER -->
<div id="photoheader2">
<div class="container">
	<h1 style="padding-top:100px; font-size:66px; color:#fff;" class="text-right thin">Disclosures</h1></div>
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
            <h3 style="margin-top:0px;">Search Disclosures</h3>
            <!--            <p style="margin-top:0px;">&nbsp;</p>-->
            <!--<h3>Search Documents</h3>-->
            <!-- ROW-->
            <form id="form1" name="form1" method="post">
              <div class="row">
                <!--<label for="select">Select:</label>-->
                <div class="col-sm-8" style="margin-bottom:12px;">
                  <select name="select" id="select" class="form-control" placeholder="Select Category">
                    <option>SEC Filings - Form 17-A (Annual Report)</option>
                    <option>SEC Filings - Form 17-Q (Quarterly Report)</option>
                    <option>SEC Filings - Form 17-C (Current Report)</option>
                    <option>SEC Filings - Form 20-IS (Information Statement)</option>
                    <option>SEC Filings - Form 23-A/B <br>
                      (Statement of Beneficial Ownership)</option>
                    <option>Notice of Annual or Special Stockholder's Meetings</option>
                    <option>Minutes of All General or <br>
                      Special Stockholder's Meetings</option>
                    <option>Other Disclosures - SEC Disclosures</option>
                    <option>Other Disclosures - PSE Disclosures</option>
                    <option>Other Disclosures - Other Pertinent Agencies</option>
                  </select>
                </div>
                <div class="col-sm-4">
                  <!--<label for="select">Select:</label>-->
                  <select name="select" id="select" class="form-control" placeholder="Select Year">
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                  </select>
                </div>
              </div>
              <!-- /ROW-->
              <div class="row">
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Type keyword">
                </div>
                <div class="col-sm-3">
                  <button class="btn btn-info"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
                </div>
                <div class="col-sm-1"></div>
              </div>
              <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <!--<label for="select">Select:</label>-->
                  &nbsp; </div>
              </div>
            </form>
            <p style="margin-top:0px;">&nbsp;</p>
            <h3 style="margin-top:0px;">Recent Uploads</h3>
            <table class="table table-striped">
              <tbody>
                <tr class="info">
                  <th width="50%">Title</th>
                  <th width="40%">Category</th>
                  <th width="10%">Year</th>
                </tr>
                <tr>
                  <td><a href="#">PSE Document March 201500</a></td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2015</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2015</td>
                </tr>
                <tr>
                  <td>SEC Document March 2015</td>
                  <td>Other Disclosures - SEC Disclosures</td>
                  <td>2014</td>
                </tr>
                <tr>
                  <td>Annual Report 2015</td>
                  <td>Other Disclosures - SEC Disclosures</td>
                  <td>2015</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2014</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2014</td>
                </tr>
                <tr>
                  <td>Annual Report 2015</td>
                  <td>Sec Filings - Form 17-A (Annual Report)</td>
                  <td>2015</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2014</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2014</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2014</td>
                </tr>
                <tr>
                  <td>Annual Report 2015</td>
                  <td>Sec Filings - Form 17-A (Annual Report)</td>
                  <td>2015</td>
                </tr>
                <tr>
                  <td>PSE Document March 2015</td>
                  <td>Other Disclosures - PSE Disclosures</td>
                  <td>2014</td>
                </tr>
              </tbody>
            </table>
            <p></p>
            <h2 style="margin-top:0px;"><br>
            </h2>
			<p>&nbsp;</p>       
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