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


        <h3>Latest News</h3>        

<?php
include 'connection.php';
	$query_total="SELECT * FROM tbl_news LIMIT 5";	
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


    	<div class="row" style="border-top:1px solid #dedede; padding-top:12px;margin-top:12px;">
        	<div class="col-md-4">
            	<img src="administration/<?php echo $row["photo"]; ?>" style="width:100%; height:auto;">
            </div>
        	<div class="col-md-8" style="padding-left:0px;">
            	<p class="sidebar-news-title"><a href="#"><?php echo $row["title"]; ?></a></p>
                <p class="sidebar-news-subtitle"><?php echo $row["date_publish"]; ?></p>
            </div>
        </div>		
		
		
<?php		
		}
	}
?>


 <!--   	<div class="row" style="border-top:1px solid #dedede; padding-top:12px;margin-top:12px;">
        	<div class="col-md-4">
            	<img src="assets/img/article/front_306x191.jpg" style="width:100%; height:auto;">
            </div>
        	<div class="col-md-8" style="padding-left:0px;">
            	<p class="sidebar-news-title"><a href="#">Here We Are, STI!</a></p>
                <p class="sidebar-news-subtitle">March 1, 2015</p>
            </div>
        </div>
    	<div class="row" style="border-top:1px solid #dedede; padding-top:12px;margin-top:12px;">
        	<div class="col-md-4" >
            	<img src="assets/img/article/front_306x1912.jpg" style="width:100%; height:auto;">
            </div>
        	<div class="col-md-8" style="padding-left:0px;">
            	<p class="sidebar-news-title">Hats Off to STI's Most Outstanding Thesis</p>
                <p class="sidebar-news-subtitle">March 1, 2015</p>
            </div>
        </div>    
    	<div class="row" style="border-top:1px solid #dedede; padding-top:12px;margin-top:12px;">
        	<div class="col-md-4" >
            	<img src="assets/img/article/fbpost_britishcouncil.png" style="width:100%; height:auto;">
            </div>
        	<div class="col-md-8" style="padding-left:0px;">
            	<p class="sidebar-news-title">STI Partners with Telus for Continuing Education</p>
                <p class="sidebar-news-subtitle">March 1, 2015</p>
            </div>
        </div>
    	<div class="row" style="border-top:1px solid #dedede; padding-top:12px;margin-top:12px;">
        	<div class="col-md-4" >
            	<img src="assets/img/article/front_306x1912.jpg" style="width:100%; height:auto;">
            </div>
        	<div class="col-md-8" style="padding-left:0px;">
            	<p class="sidebar-news-title">British Council Partners with STI towards Innovative Learning</p>
                <p class="sidebar-news-subtitle">March 8, 2015</p>
            </div>
        </div>-->