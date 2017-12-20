<?php

		include('header.php');
		$eventid= $_GET['id'];
		$sqleventdetail ="SELECT * FROM `event` WHERE event_id=$eventid";

?>
<section class="sub-banner newsection">
	    <div class="container">
	        <h2 class="title">Bookticket</h2><ul class="breadcrumb" itemprop="breadcrumb"><li><a href="#">Home</a> </li><li><span class="current" >Bookticket</span></li></ul></div>
	</section>

	<section class="events  newsection">
 
		<div class="container">
   <section class="events  newsection">
 
	    <div class="container">

			<div class="row">
              <?php
					$result= mysqli_query($conn,"$sqleventdetail");
					$rows= mysqli_fetch_assoc($result);
					
					// $row=mysqli_fetch_assoc($result);
                ?>
                                       
				<div id="main" class="blog col-md-12" role="main" >
					
						<div id="post-615"  role="article" style="border: 4px solid black;">

    <div class="event clearfix bg">

        <div class="eventsimg" style="padding: 20px;"><img src="images/<?php echo $rows['event_image'];?>"  alt=""></div>
        <div class="entry-content cf event-content">
           <h2 class="title"><a href="#" title="Professionally build market positioning materials"><?php echo $rows['organizer_name']; ?><br>
                (Organizer Name)</a></h2>

           <ul class="meta clearfix">
				<li>
					<i class="icon fa fa-clock-o"></i><?php echo $rows['event_start_date']; ?> @ <?php echo $rows['event_start_time']; ?>	
				</li>
		       <!--  <li>
		     	    <i class="icon fa fa-ticket"></i>Number of Tickets remaining:60
		        </li> -->
	       </ul>
            <p class="author">
                  <span class="job">Address:</span>
            	<p><?php echo $rows['location']; ?></p>

                 <!-- <p>1 Hyde Park, London, N1 3HA</p> -->
				                                    	</p>

          <!--   <a href="#" class="btn btn-solid btn-blue btn-md" style="float: right;">Buy Ticket</a>   -->      </div>


    </div> 
    <div>
    	<a href="#" id="flip"><i class="fa fa-angle-double-down" style="font-size:48px;color:black;"></i></a>
    </div>
</div>
<div id="panel"  class="wpb_wrapper" style="border: 3px solid blue; min-height:500px ; box-shadow: 15px 15px 15px gray; background-color: white;">
			 <div class="col-md-12">
			 	<br>
			 	<div class="container-fluid">
			     <div class="col-md-4" >
			 	    <h3>On Sale Date</h3>
			 	</div>
			 	<div class="col-md-8">
			 		<div class="container-fluid">
			 			<div class="col-md-3" style="border: 1px solid black; ">
			 		        <h3>Start Date And Time</h3>
                                     
			 	         </div>
			 	         <div class="col-md-1"></div>
			 	         <div class="col-md-4" style="border: 1px solid black; ">
			 		         <h3><?php echo $rows['ticket_release_date']; ?></h3>
			 	         </div>
			 	         <div class="col-md-1"></div>
			 	         <div class="col-md-3" style="border: 1px solid black; ">
			 		      <h3><?php echo $rows['ticket_release_time']; ?> pm</h3>
			 	         </div>
			 		</div><br>
			 		<div class="container-fluid">
			 			<div class="col-md-3" style="border: 1px solid black; ">
			 		        <h3>End Date And Time</h3>
                                     
			 	         </div>
			 	         <div class="col-md-1"></div>
			 	         <div class="col-md-4" style="border: 1px solid black; ">
			 		         <h3><?php echo $rows['ticket_last_date']; ?></h3>
			 	         </div>
			 	         <div class="col-md-1"></div>
			 	         <div class="col-md-3" style="border: 1px solid black; ">
			 		      <h3><?php echo $rows['ticket_last_time']; ?> am</h3>
			 	         </div>
			 		</div>
			 	</div>
			 	</div>
               <br>
			 	<div class="container-fluid">
			     <div class="col-md-4">
			 		<h3>Age Restriction</h3>
			 	</div>
			 	<div class="col-md-8">
			 		
			 			  <h1><span class="label label-default">18</span></h1> 
			 		
			 	</div>
			 	</div>
                <br>
			 	<div class="container-fluid">
			     <div class="col-md-4">
			 		<h3>Event Information</h3>
			 	</div>
			 	<div class="col-md-8" style="border: 1px solid black; height: 100px;">
			 		<h3><?php echo $rows['event_description']; ?></h3>
			 	</div>
			 	</div>
			 	<br>
              
			 </div>
		</div> 
					
			
			<div class="wpb_row pix-row vc_row-fluid light normal">
				<div class="bg-pos-rel">
					<div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="border: 2px solid black;">
					<h3>Tickets</h3> 
				</div>

				<div class="container-fluid" style="background-color: white; height: auto;  border: 2px solid black;">
                   <form action="payment_information.php" method="GET">
								<table border="0">
								<tr>
								<th></th>
								<th></th>
								<th>
								<!-- <label class="switch" style="margin-top: 20px;">
								<input type="checkbox">
								<span class="slider round"></span>
								</label> -->
								</th>
								<th>
								<!-- <h3>
								View seating options</h3> -->
								</th>
								<th></th>
								</tr>
								<?php
								
								
								$sqlticketdetail ="SELECT * FROM `event` WHERE event_id=$eventid";
								$result= mysqli_query($conn,"$sqlticketdetail");
								// $rows= mysqli_fetch_array($result);
								
								$row=mysqli_fetch_assoc($result);
								
								if($row['early_bird_ticket']=="Null"){
								
								}else{
								?>
								
											<tr>
											
											<td></td>
											<td>
											<h3><?php echo $row['early_bird_ticket']; ?></h3>
											</td>
											<td>
											
											<span class="label label-info">Ticket<span class="badge"><?php echo $row['early_bird_seat']; ?></span></span>
											
											</td>
											<td>
											<span class="label label-success">Per-Ticket-Price<span class="badge"><?php echo $row['early_bird_price']; ?></span></span>
											</td>
											<td>
											<input type="hidden" name="early_bird_price" value="<?php echo $row['early_bird_price']; ?>" >
											<input type="hidden" name="event" value="<?php echo $_REQUEST['id']; ?>" >
											<?php if($row['early_bird_seat']>=1){?>
                                            <input type="number" name="early_qty_tickets" value="">
                                            <?php } else {?>
                                            <?php echo 'Full';}?>
											<input type="hidden" name="tickets_typ1" value="<?php echo $row['early_bird_ticket']; ?>">
											<!-- <select  name="ticktets1">
											
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											</select> -->
											</td>
											<?php
											}
								?>
								</tr>
								
								<?php
								if($row['vip_ticket']=="Null")
								{
								
								}else{
								?>
								<tr>
								
								<td></td>
								<td><h3><?php echo $row['vip_ticket']; ?></h3></td>
								<td>
								
								<span class="label label-info">Ticket<span class="badge"><?php echo $row['vip_seat']; ?></span></span>
								</td>
								<td>
								<span class="label label-success">Per-Ticket-Price<span class="badge"><?php echo $row['vip_price']; ?></span></span>
								</td>
								<td>
                                <?php if($row['vip_seat']>=1){?>
                                <input type="number" name="vip_qty_tickets" value="">
                                <?php } else {?>
                                <?php echo 'Full';}?>
								
								<input type="hidden" name="vip_price" value="<?php echo $row['vip_price']; ?>" >
								<input type="hidden" name="event" value="<?php echo $_REQUEST['id']; ?>" >
									<input type="hidden" name="tickets_typ2" value="<?php echo $row['vip_ticket']; ?>">
								<!-- <select  name="ticktets2">
								
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								</select> -->
								</td>
								<?php
								}
								?>
								</tr>
								<?php
								if($row['front_ticket']=="Null")
								{
								
								}else{
								?>
								<tr>
								<td></td>
								
								<td><h3><?php echo $row['front_ticket']; ?></h3></td>
								<td>
								
								<span class="label label-info">Ticket<span class="badge"><?php echo $row['front_seat']; ?></span></span>
								</td>
								<td>
								<span class="label label-success">Per-Ticket-Price<span class="badge"><?php echo $row['front_price']; ?></span></span>
								</td>
								<td>
								 <?php if($row['front_seat']>=1){?>
                                <input type="number" name="front_qty_tickets" value="">
                                <?php } else {?>
                                <?php echo 'Full';}?>
                                
								<!-- <select  name="ticktets3">
								
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								</select> -->
								<input type="hidden" name="front_price" value="<?php echo $row['front_price']; ?>" >
								<input type="hidden" name="event" value="<?php echo $_REQUEST['id']; ?>" >
								<input type="hidden" name="tickets_typ3" value="<?php echo $row['front_ticket']; ?>">
								</td>
								<?php
								}
								?>
								</tr>
								<?php
								if($row['middle_ticket']=="Null")
								{
								
								}else{
								?>
								
								<tr>
								
								<td></td>
								<td><h3><?php echo $row['middle_ticket']; ?></h3></td>
								<td>
								
								<span class="label label-info">Ticket<span class="badge"><?php echo $row['middle_seat']; ?></span></span>
								</td>
								<td>
								<span class="label label-success">Per-Ticket-Price<span class="badge"><?php echo $row['middle_price']; ?></span></span>
								</td>
								<td>
								<?php if($row['middle_seat']>=1){?>
                                <input type="number" name="midd_qty_tickets" value="">
                                <?php } else {?>
                                <?php echo 'Full';}?>
								<!-- <select  name="ticktets4">
								
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								</select> -->
								<input type="hidden" name="middle_price" value="<?php echo $row['middle_price']; ?>" >
								<input type="hidden" name="event" value="<?php echo $_REQUEST['id']; ?>" >
								<input type="hidden" name="tickets_typ4" value="<?php echo $row['middle_ticket']; ?>">
								</td>
								<?php
								}
								?>
								</tr>
								<?php
								if($row['back_ticket']=="Null")
								{
								
								}else{
								?>
								<tr>
								
								<td></td>
								<td><h3><?php echo $row['back_ticket']; ?></h3></td>
								<td>
								
								<span class="label label-info">Ticket<span class="badge"><?php echo $row['back_seat']; ?></span></span>
								</td>
								<td>
								<span class="label label-success">Per-Ticket-Price<span class="badge"><?php echo $row['back_price']; ?></span></span>
								</td>
								<td>
								<?php if($row['back_seat']>=1){?>
                                <input type="number" name="back_qty_tickets" value="">
                                <?php } else {?>
                                <?php echo 'Full';}?>
								
								<!-- <select  name="ticktets5">
								
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								</select> -->
								</td>
								</tr>
								<?php
								}
								?>
								<tr>
								<td><input type="checkbox" name="" required="required"></td>
								<td colspan="3">
								
								<h5>I confirm that i have selected the correct, required number of tickets.</h5>
								</td>
								
								</tr>
								
								<tr>
								<td>	
                                
                                <input type="submit" name="submit" value="Processed to Checout" class="btn btn-success"></td>
								<td colspan="3">
								
								
								</td>
								
								</tr>
								
								</table>
								
								<input type="hidden" name="back_price" value="<?php echo $row['back_price']; ?>" >
								<input type="hidden" name="event" value="<?php echo $_REQUEST['id']; ?>" >
								<input type="hidden" name="tickets_typ5" value="<?php echo $row['back_ticket']; ?>">
								
			    </form>
							</div>

			</div>
			<div class="col-md-2">
				
			</div>
			
		</div> 

	</div> 
<div class="vc_col-sm-12 wpb_column vc_column_container ">
	<div style="float: left; margin-top: 20px;">
		 <!-- <button type = "button" class = "btn btn-warning btn-lg">
           Proceed to Payment
         </button> -->
	</div>
	
</div>
	</div></div></div></div>			
					</div>
            
                       <!-- Identify your business so that you can collect the payments. -->
               		
                        
                      <!--  <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >  -->
 		
			</div>
</div>
    </section>
</div>
	</section>		
<?php
          include('footer.php');
		?>