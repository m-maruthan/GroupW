<?php
   include('header.php');
    $eventid= $_GET['id'];
 $sqleventdetail ="SELECT * FROM `event` WHERE event_id=$eventid";
?>

 <script>
    $(document).ready(function()
  {
    $('td input[type="checkbox"]').click(function () {
        $(this).closest('tr').find('input[type="text"]').prop('disabled', !this.checked);
    }).change();






 });





  </script>

  <script type="text/javascript">
    $(document).ready(function()
    {

    if ($(".others1").attr("checked")) {
            $('.tor:input').removeAttr('disabled');
        }
        else {
            $('.tor:input').attr('disabled', 'disabled');
        }
                    });
  </script>

 <?php
                           $result = mysqli_query($conn,"$sqleventdetail");
                            $rows = mysqli_fetch_assoc($result);

                                 // $row=mysqli_fetch_assoc($result);


                 ?>
                 <h1  style="text-align: center;">Update Event Details</h1>
<div class="wpb_row pix-row vc_row-fluid light normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="container-fluid" style="border: 2px solid black;">
        <form method="post" action="update_event.php?id=<?php echo $eventid; ?>" enctype="multipart/form-data" >
				<div class="col-md-12">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6" style="margin-top: 20px;">
						<div class="col-md-4">
							
							<button type="button"  class="btn btn-danger" style="    border: 2px solid red;padding: 8px;
    border-radius: 15px;">Save</button>
							
						</div>
						<div class="col-md-4">
							<button type="button" class="btn btn-danger" style="    border: 2px solid red;padding: 8px;border-radius: 15px;">Previous</button>
						</div>
						<div class="col-md-4">
						<!-- 	<button value="submit" name="submit" type="button" class="btn btn-danger" style="    border: 2px solid red;padding: 8px;border-radius: 15px;">Publish</button> 
            -->

            <input type="submit" value="Publish" name="submit" style="border: 2px solid red;padding: 8px;border-radius: 15px;">
           
            <input type="hidden" name="user_id" value="<?php echo $id;  ?>">
						</div>
					</div>
				</div>

                  
             <div class="col-md-12">
                <div class="col-md-6">
                	<div class="col-md-6">
							<p style="font-size:70px;"> &#10112;</p>
						</div>
						<div class="col-md-6" style="border: 1px solid black;">
							<h2 style="">Event Details</h2>
						</div>
                </div>
                <div class="col-md-6">
                	
                </div>

             </div>
               

              <div class="col-md-12">
	                <div class="col-md-6">
	                	<div class="col-md-6">
	                		<h3>Event Title</h3>
	                	</div>
	                	<div class="col-md-6">
	                		<input id="author" value="<?php echo $rows['event_title'];?>" name="event_title" class="textArea" type="text"  size="30" placeholder="Event Title" aria-required="true">
	                	</div>
	                </div>
	                <div class="col-md-6">
	                	
	                </div>

              </div>
               <div class="col-md-12">
	                <div class="col-md-6">
	                	<div class="col-md-6">
	                		<h3>Location</h3>
	                	</div>
	                	<div class="col-md-6">
                      <br>
                      <input id="author" value="<?php echo $rows['location'];?>" name="location" class="textArea"   placeholder="Location" aria-required="true">

	                		<!-- <select id="author" name="location" class="textArea"   placeholder="Location" aria-required="true">
	                			
	                			<option value="fsdf">adf</option>
	                			<option value="fskdfs">dfasdf</option>
	                			<option value="dfsdfs">asdfasd</option>
	                			<option value="fsfsfss">asdfasd</option>
	                		</select> -->
	                	</div>
	                </div>
	                <div class="col-md-6">
	                	
	                </div>

              </div>

                <div class="col-md-12" style="margin-bottom: 15px;">
	                <div class="col-md-6">
	                	<div class="col-md-4">
	                		<h3>Start Date</h3>
	                	</div>
	                	<div class="col-md-4">
	                		 <br>
					       <input type="date" value="<?php echo $rows['event_start_date'];?>" name="event_start_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		  <br>
            		<input class="form-control" value="<?php echo $rows['event_start_time'];?>" name="event_start_time" id="registration-time" type="time">
	                	</div>
	                </div>

	                <div class="col-md-6">
	                	<div class="col-md-4">
	                		<h3>End Date</h3>
	                	</div>
	                	<div class="col-md-4">
	                		 <br>
					       <input type="date" value="<?php echo $rows['event_end_date'];?>" name="event_end_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		  <br>
            		<input class="form-control" value="<?php echo $rows['event_end_time'];?>" name="event_end_time" id="registration-time" type="time">
	                	</div>
	                </div>

              </div>

               <div class="col-md-12">
	                <div class="col-md-6">
	                	<div class="col-md-5">
	                		<h3>Event Description</h3>
	                	</div>
	                	<div class="col-md-7">
	                		<textarea name="event_description" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false">
                        <?php echo $rows['event_description'];?>
                      </textarea>
	                	</div>
	                </div>
	                <div class="col-md-6">
	                	<div class="col-md-6">
	                		<h3>Event Image</h3>
	                	</div>
	                	<div class="col-md-6">
	                		<!-- <form id="file-upload-form" class="uploader"> -->
								 <!--  <input id="file-upload" type="file" name="fileUpload" accept="image/*" /> --><div id="file-upload-form" class="uploader">

                  <input id="file-upload" type="file" name="event_image" accept="image/*" />
								  <label for="file-upload" id="file-drag">
								    <img id="file-image" src="#" alt="Preview" class="hidden">
								    <div id="start">
                      <img id="file-image" src="images/<?php echo $rows['event_image'];?>" alt="Preview" >
								      <i class="fa fa-camera" aria-hidden="true"></i>
								      <div>Select a file or drag here</div>
								      <div id="notimage" class="hidden">Please select an image</div>
								      <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
								    </div>
								    <div id="response" class="hidden">
								      <div id="messages"></div>
								      <progress class="progress" id="file-progress" value="0">
								        <span>0</span>%
								      </progress>
								    </div>
								  </label>
								<!-- </form> -->
              </div>
	                	</div>
	                </div>

              </div>
               
                <div class="col-md-12" style="margin-bottom: 25px;">
	                <div class="col-md-6">
	                	<div class="col-md-6">
	                		<h3>Organizer Name</h3>
	                	</div>
	                	<div class="col-md-6">
	                		<input id="author" value="<?php echo $rows['organizer_name'];?>" name="organizer_name" class="textArea" type="text"  size="30" placeholder="Organizer Name" aria-required="true">
	                	</div>
	                </div>
	                <div class="col-md-6">
	                	
	                </div>

              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                	<div class="col-md-6">
							<p style="font-size:70px;"> &#10113;</p>
						</div>
						<div class="col-md-6" style="border: 1px solid black;">
							<h2 style="">Create Tickets</h2>
						</div>
                </div>
                <div class="col-md-6">
                	
                </div>

             </div>
             


               <div class="col-md-12">

                 <table class="table table-bordered">
        				    <thead>
        				      <tr>
                        <th></th>
        				        <th>Ticket Name</th>
        				        <th>Quantity Available</th>
        				        <th>Price</th>
        				        <!-- <th>Actions</th> -->
        				      </tr>
        				    </thead>
        				    <tbody>
        				      <tr>
                          <td><input type="checkbox" class="others1" value="Early Bird" name="earlybird" <?php if($rows['early_bird_ticket']=="Early Bird"){ echo "checked";}?>/></td>
        				         <th>Early Bird</th>
        				        <td>
        				        	<input id="tor" name="early_bird_seat" class="textArea tor" type="text" value="<?php echo $rows['early_bird_seat'];?>"  placeholder="00" aria-required="true" disabled="">
        				        </td>
        				        <td>
        				        	<input  id="tor1" value="<?php echo $rows['early_bird_price'];?>" name="early_bird_price" class="textArea tor" type="text"   placeholder="0.00£" aria-required="true" disabled="">
        				        </td>
        				       <!--  <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
        				      </tr>
        				      <tr>
                        <td><input type="checkbox" id="others2" value="VIP" name="vip" <?php if($rows['vip_ticket']=="VIP"){ echo "checked";}?>/></td>
        				        <th>VIP</th>
        				        <td>
                                    <input id="author" name="vip_seat" class="textArea" type="text" value="<?php echo $rows['vip_seat'];?>"  placeholder="00" aria-required="true" disabled="">
        				        </td>
        				        <td>
                                  <input id="author" name="vip_price" class="textArea" type="text" value="<?php echo $rows['vip_price'];?>"  placeholder="0.00£" aria-required="true" disabled="">
        				        </td>
        				       <!--  <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
        				      </tr>
                      <tr>
                        <td><input type="checkbox" id="others2" value="Front" name="front" <?php if($rows['front_ticket']=="Front"){ echo "checked";}?>/></td>
                         <th>Front</th>
                        <td>
                          <input id="author" name="front_seat" class="textArea" type="text" value="<?php echo $rows['front_seat'];?>"  placeholder="00" aria-required="true" disabled="">
                        </td>
                        <td>
                          <input id="author" name="front_price" class="textArea" type="text" value="<?php echo $rows['front_price'];?>"  placeholder="0.00£" aria-required="true" disabled="">
                        </td>
                        <!-- <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
                      </tr>
                      <tr>
                         <td>
                          <input type="checkbox" id="others2" value="Middle" name="middle" <?php if($rows['middle_ticket']=="Middle"){ echo "checked";}?>/>
                        </td>
                         <th>Middle</th>
                        <td>
                          <input id="author" name="middle_seat" class="textArea" type="text" value="<?php echo $rows['middle_seat'];?>"  placeholder="00" aria-required="true" disabled="">
                        </td>
                        <td>
                          <input id="author" name="middle_price" class="textArea" type="text" value="<?php echo $rows['middle_price'];?>"  placeholder="0.00£" aria-required="true" disabled="">
                        </td>
                        <!-- <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
                      </tr>
                      <tr>
                         <td><input type="checkbox" id="others2" value="Back" name="back" <?php if($rows['back_ticket']=="Back"){ echo "checked";}?>/></td>
                         <th>Back</th>
                        <td>
                          <input id="author" name="back_seat" class="textArea" type="text" value="<?php echo $rows['back_seat'];?>"  placeholder="00" aria-required="true" disabled="">
                        </td>
                        <td>
                          <input id="author" name="back_price" class="textArea" type="text" value="<?php echo $rows['back_price'];?>"  placeholder="0.00£" aria-required="true" disabled="">
                        </td>
                       <!--  <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
                      </tr>
                     
                      
        				    </tbody>
        				  </table>

               </div>







             <div class="col-md-12">
                <h3>Refund Policy</h3>
                <div class="col-md-10">
                	<div class="col-md-2">
                		<input type="radio" value="1 day: Attendees can refund up to 1 day before event." name="refund_policy" <?php if($rows['refund_policy']=="1 day: Attendees can refund up to 1 day before event."){ echo "checked";}?>/>
                		
                	</div>
                	<div class="col-md-10">
                		<h3>1 day: Attendees can refund up to 1 day before event.</h3>
                		
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>


             <div class="col-md-12">
               
                <div class="col-md-10">
                	<div class="col-md-2">
                		
                		<input type="radio" value="7 day: Attendees can refund up to 7 days before event." name="refund_policy"<?php if($rows['refund_policy']=="7 day: Attendees can refund up to 7 days before event."){ echo "checked";}?>/>
                	</div>
                	<div class="col-md-10">
                		
                		<h3>7 day: Attendees can refund up to 7 days before event.</h3>
                		
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>
             <div class="col-md-12">
              
                <div class="col-md-10">
                	<div class="col-md-2">
                		
                		<input type="radio" value="30 day: Attendees can refund up to 30 day before event." name="refund_policy" <?php if($rows['refund_policy']=="30 day: Attendees can refund up to 30 day before event."){ echo "checked";}?>/>
                	</div>
                	<div class="col-md-10">
                		
                		<h3>30 day: Attendees can refund up to 30 day before event.</h3>
                		
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>
             <div class="col-md-12" style="margin-bottom: 15px;">
              
                <div class="col-md-10">
                	<div class="col-md-2">
                		
                		<input type="radio" value="No refunds available at anytime." name="refund_policy" <?php if($rows['refund_policy']=="No refunds available at anytime."){ echo "checked";}?>/>
                	</div>
                	<div class="col-md-10">
                		
                		<h3>No refunds available at anytime.</h3>
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>



             <div class="col-md-12" style="margin-bottom: 15px;">
	                <div class="col-md-6">
	                	<div class="col-md-4">
	                		<h3>Ticket Release Date</h3>
	                	</div>
	                	<div class="col-md-4">
	                		
					       <input type="date" value="<?php echo $rows['ticket_release_date'];?>" name="ticket_release_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		 
            		<input class="form-control" value="<?php echo $rows['ticket_release_time'];?>" name="ticket_release_time" id="registration-time" type="time">
	                	</div>
	                </div>

	                <div class="col-md-6">
	                	
	                </div>

              </div>
              <div class="col-md-12" style="margin-bottom: 15px;">
	                <div class="col-md-6">
	                	<div class="col-md-4">
	                		<h3>Last Ticket Sale</h3>
	                	</div>
	                	<div class="col-md-4">
	                		
					       <input type="date" value="<?php echo $rows['ticket_last_date'];?>" name="ticket_last_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		 
            		<input class="form-control" value="<?php echo $rows['ticket_last_time'];?>" name="ticket_last_time" id="registration-time" type="time">
	                	</div>
	                </div>

	                <div class="col-md-6">
	                	
	                </div>

              </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                	<div class="col-md-6">
							<p style="font-size:70px;"> &#10114;</p>
						</div>
						<div class="col-md-6" style="border: 1px solid black;">
							<h3 style="">Additional Settings</h3>
						</div>
                </div>
                <div class="col-md-6">
                	
                </div>

             </div> 

              <div class="col-md-12" style="margin-bottom: 20px;">
               
                <div class="col-md-10">
                	<div class="col-md-5">
                		 <h3>Privacy</h3>
                		
                		
                	</div>
                	<div class="col-md-1">
                		
                		<input type="radio" value="Privacy_1" name="privacy" <?php if($rows['privacy']=="Privacy_1"){ echo "checked";}?>/>
                	</div>
                	<div class="col-md-6">
                		<h3>Available to be seen by everyone</h3>
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>
             <div class="col-md-12" style="margin-bottom: 20px;">
               
                <div class="col-md-10">
                	<div class="col-md-5">
                		 
                		
                		
                	</div>
                	<div class="col-md-1">
                		
                	<input type="radio" value="Privacy_2" name="privacy" <?php if($rows['privacy']=="Privacy_2"){ echo "checked";}?>/>
                	</div>
                	<div class="col-md-6">
                		<h3>Available to be seen by specified people</h3>
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>
             <div class="col-md-12">
	                <div class="col-md-6">
	                	<div class="col-md-6">
	                		<h3>Event Type</h3>
	                	</div>
	                	<div class="col-md-6">
                      <input id="author" name="event_type" class="textArea"  value="<?php echo $rows['event_type'];?>" placeholder="Event Type" aria-required="true">

	                		<!-- <select id="author" name="event_type" class="textArea"  value="" placeholder="Location" aria-required="true">
	                			
	                			<option value="fgdkfjgd">dfasda</option>
	                			<option value="sfksdjfd">dsafasd</option>
	                			<option value="dfgdfgbd">dfasd</option>
	                			<option value="dfjkgndgv">sdfasd</option>
	                		</select> -->

	                	</div>
	                </div>
	                <div class="col-md-6">
	                	
	                	<div class="col-md-6">
	                		<h3>Event Topic</h3>
	                	</div>
	                	<div class="col-md-6">
                      <input id="author" name="event_topic" class="textArea"  value="<?php echo $rows['event_topic'];?>" placeholder="Event Topic" aria-required="true">
	                		<!-- <select id="author" name="event_topic" class="textArea"  value="" placeholder="Location" aria-required="true">
	                			
	                			<option value="fsdf">dfasd</option>
	                			<option value="jfghsd">dfasd</option>
	                			<option value="fgfggd">dfads</option>
	                			<option value="gfdsf">dfad</option>
	                		</select> -->
	                	</div>
	                </div>
	                </div>
                    
                     <div class="col-md-12" style="margin-bottom: 20px;">
               
                <div class="col-md-10">
                	<div class="col-md-5">
                		 <h3>Remaining Tickets</h3>
                	</div>
                	<div class="col-md-1">
                		
                		<input type="checkbox" value="Privacy" name="remaning_ticket_show" <?php if($rows['remaning_ticket_show']=="Privacy"){ echo "checked";}?>/>
                	</div>
                	<div class="col-md-6">
                		<h3>Show remaining number of tickets.</h3>
                	</div>
                </div>
                 <div class="col-md-2">
                	
                </div>

             </div>

            
               </form>
              </div>
                 


			</div>
		</div> 
	</div> 

	</div>
</div> 
</div>
</div>
	

			
<?php
          include('footer.php');
    ?>