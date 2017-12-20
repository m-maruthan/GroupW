<?php
   include('header.php');
//print_r($_POST);
//Array ( [post_type] => pix_event [keyword] => saas [date] => 19/12/2017 [loc] => Blankenberge Belgian [event_search] => 1 ) 
if (isset($_POST['event_search']))
{
$keyword= $_REQUEST['keyword'];
$date=$_REQUEST['date'];
$loc=$_REQUEST['loc'];

$qry = "select * from event where ";
if($_POST['keyword']!='')
{
	 $sp=$_POST['keyword'];
	 $qry .= " event_title LIKE '%$sp%' OR";
 	 
}
if($_POST['date']!='')
{
	$dt = explode('/', trim($_POST['date']));
	$actDt = $dt[2].'-'.$dt[1].'-'.$dt[0];
	$qry .= " event_start_date ='".$actDt."' OR";
} 

if($_POST['loc']!='')
{
	$sp1=$_POST['loc'];
	 $qry .= " location LIKE '%$sp1%' OR";
} 
$qry = preg_replace('/OR$/is','',$qry);
//echo $qry;

//$event="select * from event where event_title like '%$keyword%' or event_start_date ='".$date."' or location like  '$loc%'";
$showsearch = mysqli_query($conn,$qry);


?>
<div class="container">
<div class="row">
<div class="wpb_row pix-row1 vc_row-fluid vc_custom_1423404021251 light normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper"><br />
			<div class=" callout border-cover  show_event_search_form"><h2 class="title"><span>So What are You Waiting For</span></h2> <div class="background-content clearfix"><p> Greatest Events Across The UK!. </p> <div class="eventform-con clearfix">
	       		<form method="post" action="searchevent.php">

					<input name="post_type" type="hidden" value="pix_event">
					<div class="form-input search-location">
						<input name="keyword" type="text" value="" placeholder="Search Keyword">
						<i class="icon fa fa-search"></i>
					</div>

					<div class="form-input">
						<input name="date" placeholder="mm/dd/yy" class="date_timepicker_start">
						<i class="open icon fa fa-calendar"></i>
					</div>

					<div class="form-input">
						<div class="styled-select">
							<select name="loc"   style="height: 25px;"  >
                                <option value="">Select Venue</option>
                                <option value="Grand Hotel">Grand Hotel</option>
                                <option value="Blankenberge Belgian">Blankenberge Belgian</option>
                                <option value="Auckland Bay City">Auckland Bay City</option>
                                <option value="Liona Hotel">Liona Hotel</option>
                                <option value="Riboca Lodge">Riboca Lodge</option>
                                <option value="Barry's Point">Barry's Point</option>
                            </select>
						</div>
						</div>

						
				<button name="event_search" value="1" type="submit" class="btn btn-md btn-pri"><i class="fa fa-search"></i></button>
					
				</form>

	        </div>
	    </div></div>
		</div> 
	</div> 

	</div></div></div></div>
								<div class="col-md-12">

					<div class="fielder-left eventform-con  clearfix">

                        <form id="sort_form">

                            <input name="page_id" type="hidden" value="44">

                            <div class="form-input">
                                <div class="styled-select1"><select name="sort_by" class="sortSubmit">
                                        <option value="0">Sort by: Default Sorting</option>
                                        <option value="event_title" >Event Title</option>
                                        <option value="event_date" >Event Date</option><option value="event_price" >Event Price</option></select>
                                </div>
                            </div>

                            <div class="form-input sort_method_con arrow-up-down">
                                <input name="sort_method" type="hidden" value="asc">
                                <a class="sort_method btn btn-solid btn-blue btn-md"><i class="fa fa-arrow-up"></i></a>
                            </div>

                            <div class="form-input">
                                <div class="styled-select1">
                                    <select name="no_of_events" class="sortSubmit">
                                        <option value="10" selected>Show: 10 items / page</option>
                                        <option value="15" >Show: 15 items / page</option>
                                        <option value="20" >Show: 20 items / page</option>
                                    </select>
                                </div>
                            </div>

                            <noscript>

                                <div class="form-input arrow-up-down" id="event_sort_con">
                                    <button name="event_sort" value="1" type="submit" class="btn btn-md btn-pri">Sort</button>
                                </div>

                            </noscript>

                            <!-- Event Filter -->
                            
                        </form>
                        
                    </div> 				
						

					<div class="grid-list event-container clearfix  itemgrid">
           				<div class="row">  
		           			
                    <?php
                      		if(mysqli_num_rows($showsearch)>0)
							{
                              while($showresult= mysqli_fetch_assoc($showsearch))
{
                     
                    ?>

<div id="post-9" class="col-md-4" role="article" style="border-bottom: 1px solid #e6e6e6;">


    <div class="event clearfix bg">

        <div class="eventsimg"><img src="images/<?php echo $showresult['event_image'];?>" style="height: 250px;"  alt=""></div>

        <div class="entry-content cf event-content">
           <h2 class="title"><a href="#" title = "Sysmatically Empower Inexpensive Infomation"><?php echo $showresult['event_title'];?></a></h2>

            <ul class="meta clearfix"><li class="date"><i class="icon fa fa-calendar"></i> 12 Mar 2016 to 26 Mar 2016</li><li><i class="icon fa fa-home"></i> Blankenberge Belgian</li><li><i class="icon fa fa-map-marker"></i> Penang / Malaysia</li></ul>
            <p><?php echo $showresult['event_description'];?>...</p>  
			<?php if(isset($_SESSION['user_id']))
			{
				?>					 
            <a href="eventdetail.php?id=<?php echo $showresult['event_id']; ?>" class="btn btn-solid btn-blue btn-md">Buy Ticket</a><br>
            <a href="eventdetail.php?id=<?php echo $showresult['event_id']; ?>" class="btn btn-border btn-grey btn-md">Read More</a>
			<?php }?>
        </div>

        <div class="three links clearfix">
                  <!--   <ul><li><a class="st_sharethis_large" displayText="ShareThis"><i class="icon fa fa-share"></i> Share</a></li><li><a href="#void" class="portfolio-icon pix-like-me " data-id="9"><i class="icon fa fa-heart"></i><span class="like-count">37</span></a></li><li><i class="icon fa fa-comment"></i>0</li></ul>  -->
                </div>

    </div> 
</div>

<?php
} } else {
	
echo "<h2 style='padding-left:50px;'>Result(s) not found. Search again. </h2>"	;
}
?>
<!-- 
<div id="post-9" class="col-md-4" role="article" style="border-bottom: 1px solid #e6e6e6;">


    <div class="event clearfix bg">

        <div class="eventsimg" ><img src="image/ev2.jpg"  style="height: 250px;" alt=""></div>

        <div class="entry-content cf event-content">
           <h2 class="title"><a href="#" title = "Sysmatically Empower Inexpensive Infomation">Sysmatically Empower Inexpensive Infomation</a></h2>

            <ul class="meta clearfix"><li class="date"><i class="icon fa fa-calendar"></i> 12 Mar 2016 to 26 Mar 2016</li><li><i class="icon fa fa-home"></i> Blankenberge Belgian</li><li><i class="icon fa fa-map-marker"></i> Penang / Malaysia</li></ul>
            <p>Professionally create one-to-one methodologies and reliable testing procedures. Holisticly e-enable clicks-and-mortar paradigms before innovative scenarios. Professionally engineer emerging process...</p>  
             <a href="#" class="btn disabled btn-solid btn-grey btn-md">Sold Out</a>
            
            <a href="eventdetail.php" class="btn btn-border btn-grey btn-md">Read More</a>
        </div>

        <div class="three links clearfix">
                  
                </div>

    </div> 
</div>
					
 -->



</div>

											</div>


   				</div>

    
</div>
</div>

































<?php  } else { ?>


<style>
.event-content{

 height:300px;
}

</style>




<section class="sub-banner newsection">
	    <div class="container">
	        <h2 class="title">Search Events</h2><ul class="breadcrumb" itemprop="breadcrumb"><li><a href="#">Home</a> </li><li><span class="current" >Search Events</span></li></div></div>
	</section>

	<section class="events  newsection">
 
		<div class="container">

			<div class="row">
                       <div class="wpb_row pix-row1 vc_row-fluid vc_custom_1423404021251 light normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class=" callout border-cover  show_event_search_form"><h2 class="title"><span>So What are You Waiting For</span></h2> <div class="background-content clearfix"><p> Greatest Events Across The UK!. </p> <div class="eventform-con clearfix">
	       		<form method="post" action="searchevent.php">

					<input name="post_type" type="hidden" value="pix_event">
					<div class="form-input search-location">
						<input name="keyword" type="text" value="" placeholder="Search Keyword">
						<i class="icon fa fa-search"></i>
					</div>

					<div class="form-input">
						<input name="date" placeholder="mm/dd/yy" class="date_timepicker_start">
						<i class="open icon fa fa-calendar"></i>
					</div>

					<div class="form-input">
						<div class="styled-select">
							<select name="loc"   style="height: 25px;"  >
                                <option value="">Select Venue</option>
                                <option value="Grand Hotel">Grand Hotel</option>
                                <option value="Blankenberge Belgian">Blankenberge Belgian</option>
                                <option value="Auckland Bay City">Auckland Bay City</option>
                                <option value="Liona Hotel">Liona Hotel</option>
                                <option value="Riboca Lodge">Riboca Lodge</option>
                                <option value="Barry's Point">Barry's Point</option>
                            </select>
						</div>
						</div>

						
				<button name="event_search" value="1" type="submit" class="btn btn-md btn-pri"><i class="fa fa-search"></i></button>
					
				</form>

	        </div>
	    </div></div>
		</div> 
	</div> 

	</div></div></div></div>
	<br>


	
				
								<div class="col-md-9">

					<div class="fielder-left eventform-con  clearfix">

                        <form id="sort_form">

                            <input name="page_id" type="hidden" value="44">

                            <div class="form-input">
                                <div class="styled-select1"><select name="sort_by" class="sortSubmit">
                                        <option value="0">Sort by: Default Sorting</option>
                                        <option value="event_title" >Event Title</option>
                                        <option value="event_date" >Event Date</option><option value="event_price" >Event Price</option></select>
                                </div>
                            </div>

                            <div class="form-input sort_method_con arrow-up-down">
                                <input name="sort_method" type="hidden" value="asc">
                                <a class="sort_method btn btn-solid btn-blue btn-md"><i class="fa fa-arrow-up"></i></a>
                            </div>

                            <div class="form-input">
                                <div class="styled-select1">
                                    <select name="no_of_events" class="sortSubmit">
                                        <option value="10" selected>Show: 10 items / page</option>
                                        <option value="15" >Show: 15 items / page</option>
                                        <option value="20" >Show: 20 items / page</option>
                                    </select>
                                </div>
                            </div>

                            <noscript>

                                <div class="form-input arrow-up-down" id="event_sort_con">
                                    <button name="event_sort" value="1" type="submit" class="btn btn-md btn-pri">Sort</button>
                                </div>

                            </noscript>

                            <!-- Event Filter -->
                            
                        </form>
                        
                    </div> 				
						

					<div class="grid-list event-container clearfix  itemgrid">
           				<div class="row">  
		           			
                    <?php
                      
                               $result= mysqli_query($conn,"$sqlevent");
                               // $rows= mysqli_fetch_array($result);

                                  While($row=mysqli_fetch_assoc($result))
                                    {
                     
                    ?>

<div id="post-9" class="col-md-4" role="article" style="border-bottom: 1px solid #e6e6e6;">


    <div class="event clearfix bg">

        <div class="eventsimg"><img src="images/<?php echo $row['event_image'];?>" style="height: 250px;"  alt=""></div>

        <div class="entry-content cf event-content">
           <h2 class="title"><a href="#" title = "Sysmatically Empower Inexpensive Infomation"><?php echo $row['event_title'];?></a></h2>

            <ul class="meta clearfix"><li class="date"><i class="icon fa fa-calendar"></i> 12 Mar 2016 to 26 Mar 2016</li><li><i class="icon fa fa-home"></i> Blankenberge Belgian</li><li><i class="icon fa fa-map-marker"></i> Penang / Malaysia</li></ul>
            <p><?php echo $row['event_description'];?>...</p>  
<?php if(isset($_SESSION['user_id']))
			{
				//bookticket.php?>
            <a href="eventdetail.php?id=<?php echo $row['event_id']; ?>" class="btn btn-solid btn-blue btn-md">Buy Ticket</a><br>
            <a href="eventdetail.php?id=<?php echo $row['event_id']; ?>" class="btn btn-border btn-grey btn-md">Read More</a>
        
        <?php }?></div>

        <div class="three links clearfix">
                  <!--   <ul><li><a class="st_sharethis_large" displayText="ShareThis"><i class="icon fa fa-share"></i> Share</a></li><li><a href="#void" class="portfolio-icon pix-like-me " data-id="9"><i class="icon fa fa-heart"></i><span class="like-count">37</span></a></li><li><i class="icon fa fa-comment"></i>0</li></ul>  -->
                </div>

    </div> 
</div>

<?php
}
?>
<!-- 
<div id="post-9" class="col-md-4" role="article" style="border-bottom: 1px solid #e6e6e6;">


    <div class="event clearfix bg">

        <div class="eventsimg" ><img src="image/ev2.jpg"  style="height: 250px;" alt=""></div>

        <div class="entry-content cf event-content">
           <h2 class="title"><a href="#" title = "Sysmatically Empower Inexpensive Infomation">Sysmatically Empower Inexpensive Infomation</a></h2>

            <ul class="meta clearfix"><li class="date"><i class="icon fa fa-calendar"></i> 12 Mar 2016 to 26 Mar 2016</li><li><i class="icon fa fa-home"></i> Blankenberge Belgian</li><li><i class="icon fa fa-map-marker"></i> Penang / Malaysia</li></ul>
            <p>Professionally create one-to-one methodologies and reliable testing procedures. Holisticly e-enable clicks-and-mortar paradigms before innovative scenarios. Professionally engineer emerging process...</p>  
             <a href="#" class="btn disabled btn-solid btn-grey btn-md">Sold Out</a>
            
            <a href="eventdetail.php" class="btn btn-border btn-grey btn-md">Read More</a>
        </div>

        <div class="three links clearfix">
                  
                </div>

    </div> 
</div>
					
 -->



</div>

											</div>


   				</div>

               <div class="col-md-3">
                

               </div>

				
			</div>



		</div>
	
	</section>

	

			
	<?php
	}
          include('footer.php');
		?>