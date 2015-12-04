		<div style="padding:0px; margin:0px;">
        <form action="google_search_results.asp" id="cse-search-box" target="_parent"  role="search">
            <input type="hidden" name="cx" value="005825080231843934273:hhmt1ugzqji" />
            <input type="hidden" name="cof" value="FORID:11" />
            <input type="hidden" name="ie" value="UTF-8" />
            <div class="row" style="padding:0px; margin:0px;">
            	<div class="col-xs-10" style="margin:0px; padding:0px 20px 0px 0px;"><input type="text" name="q" class="form-control" style="width:100%;"/></div>
           		<div class="col-xs-2" style="margin:0px; padding:0px;"><input type="submit" name="sa" value="Search" class="btn btn-danger" style="margin-top:0px; height:34px;"/></div>
        	</div>
        </form>
        <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=en"></script> 
		</div>


        <h3>Recent Uploads</h3>
<table class="table table-striped">
          <tbody>



<?php
include 'connection.php';



	$query_total="SELECT tbl_pdf.title, tbl_pdf.path, tbl_pdf.year, tbl_pdf_category.categoryname FROM tbl_pdf LEFT JOIN tbl_pdf_category ON tbl_pdf.category=tbl_pdf_category.categoryid LIMIT 7";	
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

            <tr>
              <td width="85%"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="administration/<?php echo $row["path"]; ?>" target="_blank"><?php echo $row["title"]; ?></a><br><p style="font-size:11px;"><?php echo $row["categoryname"]; ?></p></td>
   
              <td width="15%"><?php echo $row["year"]; ?></td>
            </tr>
	
<?php		
		}
	}
?>

<!--            <tr>
              <td width="60%"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">PSE Document March 201500</a></td>
              <td width="30%">PSE</td>
              <td width="20%">2015</td>
            </tr>
            <tr>
              <td><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">PSE Document March 2015</a></td>
              <td>PSE</td>
              <td>2015</td>
            </tr>
            <tr>
              <td><span class="glyphicon glyphicon-file" aria-hidden="true"></span> <a href="#">PSE Document March 2015</a></td>
              <td>SEC</td>
              <td>2014</td>
            </tr>
            <tr>
              <td><a href="#">Annual Report 2015</a></td>
              <td>SEC</td>
              <td>2015</td>
            </tr>
            <tr>
              <td><a href="#">PSE Document March 2015</a></td>
              <td>PSE</td>
              <td>2014</td>
            </tr>
            <tr>
              <td><a href="#">PSE Document March 2015</a></td>
              <td>SEC</td>
              <td>2014</td>
            </tr>
            <tr>
              <td><a href="#">Annual Report 2015</a></td>
              <td>SEC</td>
              <td>2015</td>
            </tr>
            <tr>
              <td><a href="#">PSE Document March 2015</a></td>
              <td>PSE</td>
              <td>2014</td>
            </tr>-->
            
          </tbody>
        </table>