<?php
   include('header.php');
?>


<div class="wpb_row pix-row vc_row-fluid vc_custom_1417500238804 dark normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<section class="eventform newsection">

			
			<div class="event-title">
				<small>Find what you want</small>
				<h2 class="title">event </h2>
			</div>

		<div class="eventform-con">
			<form method="get" action="search.php">

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
						<select name="loc" style="margin-top: 0px;"><option value="0">Select Venue</option><option value="Grand Hotel">Grand Hotel</option><option value="Blankenberge Belgian">Blankenberge Belgian</option><option value="Auckland Bay City">Auckland Bay City</option><option value="Liona Hotel">Liona Hotel</option><option value="Riboca Lodge">Riboca Lodge</option><option value="Barry's Point">Barry's Point</option></select>
						</div>
					</div>

					
					<button name="event_search" value="1" type="submit" class="btn btn-md btn-pri">f覺nd event</button>
					
				</form>
			</div>
	
	
</section>
		</div> 
	</div> 

	</div></div></div></div>



<div class="wpb_row pix-row vc_row-fluid dark normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="tabs event-tab upcoming-popular-tab">
				<ul class="clearfix">
					<li>
						<a href="#tabs180215469">Popular Events</a>
						
					</li>
					<li>
						<a href="#tabs1062277384">Upcoming Events</a>
					</li>
				</ul>
				<div id="tabs1062277384">
	                <div class="event-container">
	                    <div class="row"><div>No Events Found.</div></div>
	                </div>
	            </div><div id="tabs180215469">
	                <div class="event-container">
	                    <div class="row">
                           <?php
		                       $result= mysqli_query($conn,"$sqlevent");
		                       // $rows= mysqli_fetch_array($result);

                                  While($row=mysqli_fetch_assoc($result))
                                    {

				 	       ?>
	                    	<div class="col-md-3">
                        		<div class="event bg">
                            		<div class='eventsimg'>
                            			<img src='images/<?php echo $row['event_image'];?>' alt='' style="height: 200px;">
                            		</div>
                            		<div class="event-content">
                                	<h3 class="title"><?php echo $row['event_title'];?>
                                		<p>
                                		<?php echo $row['event_description'];?>
                                	</p>

                                    <?php
                                    
                                   if(!$id)
                                   {

                                   }else{
                                    ?>
                                	<a href="bookticket.php?id=<?php echo $row['event_id']; ?>" class="btn btn-solid btn-blue btn-md">Buy Ticket</a>

                                 <?php
                                      }
                                 ?>


                                </div>
                                <div class="links three clearfix">
					                   <!--  <ul>
					                    	<li><a class="st_sharethis_large" displayText="ShareThis"><i class="icon fa fa-share"></i> share</a></li>
					                    	<li><a href="#void" class="portfolio-icon pix-like-me " data-id="122"><i class="icon fa fa-heart"></i><span class="like-count">83</span></a></li>
					                    	<li><i class="icon fa fa-comment"></i>0</li> 
					                    </ul> --> 
					               	 </div></div></div>

					               	 <?php

                                      }
					               	 ?>

					               	 

					               	</div>
	                </div>
	            </div><a href="searchevent.php" target="_self" class="clear btn btn-border btn-md btn-color">View All Event</a></div>
		</div> 
	</div> 

	</div></div></div></div>

























	<?php
          include('footer.php');
		?>