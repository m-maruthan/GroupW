<?php
   include('header.php');
?>

            <div class="wpb_row pix-row vc_row-fluid light normal"><div class="bg-pos-rel" style="background-color: lightblue;"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
                   <?php
                   $result= mysqli_query($conn,"$sql");
                      $rows= mysqli_fetch_array($result);

                      $sqluserevent ="SELECT * FROM `event` WHERE user_id=$id";

                   ?>


			<div class=" callout   normal"><h2 class="title"><span>Hi <?php  echo $rows['first_name'];?>!</span></h2> <div class="background-content clearfix">
			<!-- 	<p> Efficiently underwhelm standards compliant results and wireless solutions. Compellingly build top-line content whereas business e-commerce.  </p> -->
			</div></div><div class="wpb_row pix-row vc_row-fluid vc_custom_1423472797765 dark normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
			<div class="vc_col-sm-4 wpb_column vc_column_container ">
				
			</div> 
			<div class="vc_col-sm-4 wpb_column vc_column_container ">
               <div class="wpb_wrapper">
					<div class="pix_button button-center"><a href="myaccount.php" title="" class="clear btn btn-border  btn-lg active btn-color">Edit Profile</a></div>
				</div> 
			</div>
			<div class="vc_col-sm-4 wpb_column vc_column_container ">
				<!-- <div class="wpb_wrapper">
					<div class="pix_button "><a href="" title="" class="clear btn btn-border  btn-lg active btn-blue">View Features</a></div>
				</div>  -->
			</div> 

	</div>
</div></div></div>
		</div> 
	</div> 

	</div></div></div></div>


		<div class="container">
			 <section id="post-21" class="clearfix post-21 page type-page status-publish hentry" >
              <section class="speakers-tabs newsection show">
	                    <h2 class="title">My Profile</h2>
	                  <div id="speakers-tabs" style="display: block; width: 100%; margin: 0px;">
	                  	<div class="container">
	                  		<div class="col-sm-12">
	                  			<div class="col-sm-1">
	                  				
	                  			</div>
	                  			<div class="col-sm-10">
	                  				<div style="border: 1px solid blue;">
	                  					
	                  <ul class="speaker-ul resp-tabs-list clearfix" style="margin-left: 160px;">
	                  	<center>
	                  	<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">My Event</li>
	                  	<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">My Booking</li>
	                  	<li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Booked Event</li>
                        <li class="resp-tab-item" aria-controls="tab_item-3" role="tab">List of Participants</li>
	                  <!-- 	<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-3" role="tab">Day 4 (29 April)</li> -->
	                  </center>
	                  </ul>
                      
	                  <div class="resp-tabs-container"><!-- <h2 class="resp-accordion" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>My Event</h2> -->
	                  	<div class="resp-tab-content" aria-labelledby="tab_item-0">
	                  	<div class="speakers">
	                  		 <?php
		                       $result= mysqli_query($conn,"$sqluserevent");
		                       // $rows= mysqli_fetch_array($result);

                                  While($row=mysqli_fetch_assoc($result))
                                    {

				 	       ?>
	                  		<div class="speaker clearfix">
				                                <div class="speaker-img">
				                                	<center>
				                                	<img src="images/<?php echo $row['event_image'];?>" alt="">
				                                	</center>
				                                </div>
				                                <div class="speaker-content">
				                                    <p class="author"><?php echo $row['organizer_name'];?>
				                                    	<span class="job">(Organizer Name)</span></p>
				                                    <h3 class="title">
				                                    	<a href="#"><?php echo $row['event_title'];?></a>
				                                    </h3>
				                                    	<ul class="meta clearfix">
				                                    		<li><i class="icon fa fa-clock-o"></i><?php echo $row['event_start_date'];?> @ <?php echo $row['event_start_time'];?></li>


<?php $numberofTickets= $row['early_bird_seat']+$row['vip_seat']+$row['front_seat']+$row['middle_seat']+$row['back_seat'];?>
				                                    		<li><i class="icon fa fa-ticket"></i><strong style="color:#093; font-weight:bold;">Number of Tickets remaining</strong>:<span style="color:#093; font-weight:bold;"><?php echo $numberofTickets;?></span></li>



				                                    	</ul>
				                                    	<p><?php echo $row['event_description'];?>...[...] </p>
				                                    	<a href="eventdetail.php?id=<?php echo $row['event_id']; ?>" class="btn btn-border btn-grey btn-md">Read More</a>
				                                    	<a href="edit_createevent.php?id=<?php echo $row['event_id']; ?>" class="btn btn-border btn-grey btn-md">Edit Event</a>
				                                    </div>
				                            </div>
				                            <div class="bar"><p><i class="icon fa fa-glass"></i>LETS HAVE A BREAK, ENJOY IT</p></div>
				                            <?php
                                             }
				                        ?>
				                        </div>
				                        
				                        </div>
				                       <!--  <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>2Current Orders
				                        </h2> -->
				                        <div class="resp-tab-content" aria-labelledby="tab_item-1">
										<?php
										
										 $mybook= "select * from `payment_info` where user_id='".$id."'";
										$querymybook = mysqli_query($conn,$mybook);
										
										while($showmybook=mysqli_fetch_assoc($querymybook))
										{
										
										$total=$showmybook['qty1'] + $showmybook['qty2'] + $showmybook['qty3'] + $showmybook['qty4'] + $showmybook['qty5'] ;
										
												  $mybookevent="select * from event where event_id='".$showmybook['event_id']."'";
          										 $querybookevnt=mysqli_query($conn,$mybookevent);
          										 $showbookevent= mysqli_fetch_assoc($querybookevnt);
												 
												 
										?>
										
				                        	<div class="speakers">
				                        		<div class="speaker clearfix">
				                                <div class="speaker-img">
				                                	<img src="images/<?php echo $showbookevent['event_image'];?>" alt="">
				                                </div>
				                                <div class="speaker-content">
				                                    <p class="author"> <?php echo $showbookevent['organizer_name']; ?>
				                                    	<span class="job"></span></p>
				                                    <h3 class="title">
				                                    	<a href="#"><?php echo $showbookevent['event_title'];?></a>
				                                    </h3>
				                                    	<ul class="meta clearfix">
														<li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $showbookevent['location'];?></li>
				                                    		<li><i class="icon fa fa-clock-o"></i><?php echo $showbookevent['event_start_date'];?> - <?php echo $showbookevent['event_start_time'];?></li>
				                                    		<li><i class="icon fa fa-ticket"></i>Tickets: <?php echo $total; ?></li>
				                                    		<li><i class="icon fa fa-money"></i>Price: £<?php echo $showmybook['price']; ?></li>
				                                    	</ul>
				                                    	<p class="author">Order No. <?php echo $showmybook['oderid']; ?>
				                                    	</p>


				                                    	<p><?php echo substr($showbookevent['event_description'],50);?>...</p>
				                                    	<a href="eventdetail.php?id=<?php echo $showbookevent['event_id']; ?>" class="btn btn-border btn-grey btn-md">Read More</a>
				                                    	<!-- <a href="http://innwithemes.com/eventonwp/speaker/john-deo/" class="btn btn-border btn-grey btn-md">About Speakers</a> -->
				                                    </div>
				                            </div><div class="bar"><p><i class="icon fa fa-glass"></i>LETS HAVE A BREAK, ENJOY IT</p></div></div>
											
											<?php 
											} 
											
											?>
											
											
											
											
											</div><!-- <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>3Previous Orders</h2> -->
				                            <div class="resp-tab-content" aria-labelledby="tab_item-2">
											
											<?php 
											 $bookreq= "select * from payment_info left join event on payment_info.event_id = event.event_id where event.user_id ='".$id."'";
											$querybookreq = mysqli_query($conn,$bookreq);
										
										while($showmybookreq=mysqli_fetch_assoc($querybookreq))
											
											{
											
											$bookedtkt= $showmybookreq['qty1'] + $showmybookreq['qty2'] + $showmybookreq['qty3'] + $showmybookreq['qty4'] + $showmybookreq['qty5'];
											
											?>
											
											
											<div class="speakers">
											<div class="speaker clearfix">
				                                <div class="speaker-img">
												<img src="images/<?php echo $showmybookreq['event_image']; ?>" alt="">
												</div>
				                                <div class="speaker-content">
				                                    <p class="author"><?php echo $showmybookreq['organizer_name']; ?> 
				                                    	<span class="job"></span></p>
				                                    <h3 class="title">
				                                    	<a href="#"><?php echo $showmybookreq['event_title']; ?></a>
				                                    </h3>
				                                    	<ul class="meta clearfix">
														<li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $showmybookreq['location'];?></li>
				                                    		<li><i class="icon fa fa-clock-o"></i><?php echo $showmybookreq['event_start_date'];?> - <?php echo $showmybookreq['event_start_time'];?></li>
				                                    		<li><i class="icon fa fa-ticket"></i>Tickets: <?php echo $bookedtkt; ?></li>
				                                    		<li><i class="icon fa fa-money"></i>Price: £<?php echo $showmybookreq['price'];?></li>
				                                    	</ul>
				                                    	<p class="author">Order No. <?php echo $showmybookreq['oderid']; ?>
				                                    	</p>
				                                    	<p><?php echo substr($showmybookreq['event_description'],50);?>...</p>
				                                    	<a href="eventdetail.php?id=<?php echo $showmybookreq['event_id']; ?>" class="btn btn-border btn-grey btn-md">Read More</a>
				                                    	<!-- <a href="http://innwithemes.com/eventonwp/speaker/john-deo/" class="btn btn-border btn-grey btn-md">About Speakers</a> -->
				                                    </div>
				                            </div><div class="bar"><p><i class="icon fa fa-glass"></i>LETS HAVE A BREAK, ENJOY IT</p></div></div>
											
											<?php } ?>
											
											
											
											</div>
                                            
                                            <!--List of participants-->
											<div class="resp-tab-content" aria-labelledby="tab_item-3">
                                            <?php 
											 
											$qry= mysqli_query($conn, "select * from event where user_id='".$id."'");
											while($resArr = mysqli_fetch_array($qry))
											{
												//echo "select * from payment_info where event_id='".$resArr['event_id']."'";
												$qry2= mysqli_query($conn, "select * from payment_info where event_id='".$resArr['event_id']."'");
												while($resArr1 = mysqli_fetch_array($qry2))
												{
													$qry2= mysqli_query($conn, "select * from users_register where user_id='".$resArr1['user_id']."'");
													$resArr2 = mysqli_fetch_array($qry2);
													echo "<p>Event Name =>".$resArr['event_title'].' => User => '.$resArr2['first_name']."</p>";
												}
											}
											?>
 											</div>
											
											</div>
				                        </div>
	                  			</div>
	                  			<div class="col-sm-1">
	                  				
	                  			</div>
	                  		</div>
	                  	</div>
	                  
				                        </div>       
	                </section>

		</section>	
		</div>
			
<?php
          include('footer.php');
		?>