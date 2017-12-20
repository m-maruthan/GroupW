<?php
   include('header.php');

    $eventid= $_GET['id'];
 $sqleventdetail ="SELECT * FROM `event` WHERE event_id=$eventid";
 //print_r($_SESSION);
?>

<style>

.fa {
    display: inline-block;
    font: normal normal normal 25px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    color: #ecec32;
    -moz-osx-font-smoothing: grayscale;
    font-size: 23px;
    float: left;
}
</style>


<section class="sub-banner newsection">
	    <div class="container">
	        <h2 class="title"> Event Details</h2><ul class="breadcrumb" itemprop="breadcrumb"><li><a href="#">Home</a> </li><li><span class="current" >Event Details</span></li></ul></div>
	</section>

	<section class="events  newsection">
 
		<div class="container">

			<div class="row">
                       <div class="wpb_row pix-row1 vc_row-fluid vc_custom_1423404021251 light normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class=" callout border-cover  show_event_search_form"><h2 class="title"><span>So What are You Waiting For</span></h2> <div class="background-content clearfix"><p> Greatest Events Across The UK!. </p> <div class="eventform-con clearfix">
	       		<form method="post" action="#">

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
							<select name="loc"   style="height: 25px;"  ><option value="0">Select Venue</option><option value="Grand Hotel">Grand Hotel</option><option value="Blankenberge Belgian">Blankenberge Belgian</option><option value="Auckland Bay City">Auckland Bay City</option><option value="Liona Hotel">Liona Hotel</option><option value="Riboca Lodge">Riboca Lodge</option><option value="Barry's Point">Barry's Point</option></select>
						</div>
						</div>

						
				<button name="event_search" value="1" type="submit" class="btn btn-md btn-pri"><i class="fa fa-search"></i></button>
					
				</form>

	        </div>
              

              <!--<a href="#" id="flip">Advanced Search</a>

              <div id="panel">
              	<form action="" method="">
                    <div class="eventform-con clearfix">
 	                    <div class="form-input">
	                    	
							<input name="text" placeholder="Comedian" class="">
							
						</div>
 					<div class="form-input">
						
						<div class="styled-select1">
							<select name="Age"   style="height: 25px;"  ><option value="0">Select Age</option><option value="Grand Hotel">1</option><option value="Blankenberge Belgian">2</option><option value="Auckland Bay City">3</option><option value="Liona Hotel">4</option><option value="Riboca Lodge">5</option><option value="Barry's Point">6</option></select>
						</div>
					</div>

                       <button name="event_search" value="1" type="submit" class="btn btn-md btn-pri"><i class="fa fa-search"></i></button>
              
                    </div>
                 </form>
              </div>-->
	    </div></div>
		</div> 
	</div> 

	</div></div></div></div>
	<br>


	
				
								

				
			</div>



             <section class="events  newsection">
 
	    <div class="container">

			<div class="row">

                                       
				<div id="main" class="blog col-md-12" role="main" >
					 <?php
		                       $result= mysqli_query($conn,"$sqleventdetail");
		                        $rows= mysqli_fetch_assoc($result);

                                 // $row=mysqli_fetch_assoc($result);


				 	       ?>
					
				<div id="post-615"  role="article" style="border: 4px solid black;">

				    <div class="event clearfix bg">

				        <div class="eventsimg" style="padding: 20px;"><img src="images/<?php echo $rows['event_image'];?>"  alt=""></div>
				        <div class="entry-content cf event-content">
				           <h2 class="title"><a href="#" title="Professionally build market positioning materials"><?php echo $rows['event_title'];?><br>
				                </a></h2>

				           <ul class="meta clearfix">
								<li>
									<i class="icon fa fa-clock-o"></i><?php echo $rows['event_start_date'];?> @ <?php echo $rows['event_start_time'];?>
								</li>
						       <!--  <li>
						     	    <i class="icon fa fa-ticket"></i>Number of Tickets remaining:60
						        </li> -->
					       </ul>
				            <p class="author">
				                  <span class="job">Address:</span>
				            	<!-- Wembley Stadium -->
				                 <p><?php echo $rows['location'];?></p>
							</p>
								
                                <?php 
									if(isset($_SESSION['user_id']))
									{
								//echo $rows['ticket_release_date'];
									if((strtotime(date('Y-m-d'))<=strtotime($rows['ticket_last_date'])) && (strtotime(date('Y-m-d'))>=strtotime($rows['ticket_release_date'])))
									{
								?> 
				            <a href="bookticket.php?id=<?php echo $rows ['event_id']; ?>" class="btn btn-solid btn-blue btn-md" style="float: right;">Buy Ticket</a>
                            <?php } else { ?>
                            
                            <a href="" class="btn btn-solid btn-blue btn-md" style="float: right;">Teckets Available between  <?php echo $rows['ticket_release_date'];?> and <?php echo $rows['ticket_last_date'];?></a>
                            <?php } } else {?>
                            <a href="index.php" class="btn btn-solid btn-blue btn-md" style="float: right;">Please Login First</a>
                            <?php }?>        
                          </div>


				    </div> 
				</div>
<div class="wpb_wrapper" style="border: 1px solid black; height: 550px;">
			 <div class="col-md-12">
			 	<br>
			 	<div class="container-fluid">
			     <div class="col-md-4" >
			 	    <h3>Awards</h3>
			 	</div>
			 	<div class="col-md-8" style="border: 1px solid black; ">
			 		<h3>List of awards won by the act.</h3>
			 	</div>
			 	</div>
               <br>
			 	<div class="container-fluid">
			     <div class="col-md-4">
			 		<h3>Ratings</h3>
			 	</div>
			 	<div class="col-md-8">
			 		
			 			 <div class="col-md-3" style="border: 1px solid black; ">
			 		        <h3>IMBD Rating</h3>
                                     
			 	         </div>
			 	         <div class="col-md-1"></div>
			 	         <div class="col-md-4" style="border: 1px solid black; ">
			 		         <h3>Rotten Tomatoes Rating</h3>
			 	         </div>
			 	         <div class="col-md-1"></div>
			 	         <div class="col-md-3" style="border: 1px solid black; ">
			 		      <h3>Customer Rating</h3>
			 	         </div>
			 		
			 	</div>
			 	</div>
                <br>
			 	<div class="container-fluid">
			     <div class="col-md-4">
			 		<h3>Synopsis</h3>
			 	</div>
			 	<div class="col-md-8" style="border: 1px solid black; height: 100px;">
			 		<h3><?php echo $rows['event_description']; ?></h3>
			 	</div>
			 	</div>
			 	<br>
               <div class="container-fluid">
               	<div class="col-md-4">
               		<h3>Details</h3>
               	</div>
               	<div class="col-md-3">
               		<h3>Ticket End
                     Date</h3>
                     <p><?php echo $rows['ticket_last_date']; ?></p>
               	</div>
               	<div class="col-md-2">
               		<h3>Language
                       Sporken</h3>
               	</div>
               	<div class="col-md-2">
               		
               	</div>
               	<div class="col-md-2">
               		<h3>Runtime</h3>
               	</div>
               </div>
               <div class="container-fluid">
               <h1 style="text-align:left;">Feedback</h1>
               	<?php 
				//echo "select * from `feedback` where eventID='".$eventid."'";
					$qry = mysqli_query($conn,"select * from `feedback` where eventID='".$eventid."'");
					while($resFeedArray=mysqli_fetch_array($qry))
					{
						
						
				?>
                
                 
                 
                <div class="container" style="margin-top:20px;">
                	<div class="col-md-12">
                    
                    <p style="text-align:left"><?php print($resFeedArray['Description']);?></p>
                       <?php for($i=1; $i<=$resFeedArray['Rating'];$i++)
					   {?> 
                       <i class="fa fa-star" aria-hidden="true"></i> 
                       <?php }?>
                    </div>
                </div>
                 
                <?php } ?>
                </div>
               <div
			 </div>
		</div> 
					
			
						
					
						
					
						
					

				</div>

				
			</div>

		</div>
    </section>


		</div>
	
	</section>

	

			
<?php
          include('footer.php');
		?>