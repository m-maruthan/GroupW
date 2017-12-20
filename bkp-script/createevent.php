<?php
   include('header.php');
?>

 <script>
    $(document).ready(function()
{
    $('td input[type="checkbox"]').click(function () {
        $(this).closest('tr').find('input[type="text"]').prop('disabled', !this.checked);
    }).change();
});
  </script>


<div class="wpb_row pix-row vc_row-fluid light normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="container-fluid" style="border: 2px solid black;">
        <form method="post" action="createevent_action.php" enctype="multipart/form-data" >
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
	                		<input id="author" name="event_title" class="textArea" type="text"  size="30" placeholder="Event Title" aria-required="true">
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
                      <input id="author" name="location" class="textArea"   placeholder="Location" aria-required="true">

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
					       <input type="date" name="event_start_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		  <br>
            		<input class="form-control" name="event_start_time" id="registration-time" type="time">
	                	</div>
	                </div>

	                <div class="col-md-6">
	                	<div class="col-md-4">
	                		<h3>End Date</h3>
	                	</div>
	                	<div class="col-md-4">
	                		 <br>
					       <input type="date" name="event_end_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		  <br>
            		<input class="form-control" name="event_end_time" id="registration-time" type="time">
	                	</div>
	                </div>

              </div>

               <div class="col-md-12">
	                <div class="col-md-6">
	                	<div class="col-md-5">
	                		<h3>Event Description</h3>
	                	</div>
	                	<div class="col-md-7">
	                		<textarea name="event_description" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
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
	                		<input id="author" name="organizer_name" class="textArea" type="text" value="" size="30" placeholder="Organizer Name" aria-required="true">
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
                          <td><input type="checkbox" class="others1" value="Early Bird" name="earlybird"></td>
        				         <th>Early Bird</th>
        				        <td>
        				        	<input id="author" name="early_bird_seat" class="textArea" type="text" value=""  placeholder="00" aria-required="true" disabled="">
        				        </td>
        				        <td>
        				        	<input id="author" name="early_bird_price" class="textArea" type="text"   placeholder="0.00£" aria-required="true" disabled="">
        				        </td>
        				       <!--  <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
        				      </tr>
        				      <tr>
                        <td><input type="checkbox" id="others2" value="VIP" name="vip"></td>
        				        <th>VIP</th>
        				        <td>
                                    <input id="author" name="vip_seat" class="textArea" type="text" value=""  placeholder="00" aria-required="true" disabled="">
        				        </td>
        				        <td>
                                  <input id="author" name="vip_price" class="textArea" type="text" value=""  placeholder="0.00£" aria-required="true" disabled="">
        				        </td>
        				       <!--  <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
        				      </tr>
                      <tr>
                        <td><input type="checkbox" id="others2" value="Front" name="front"></td>
                         <th>Front</th>
                        <td>
                          <input id="author" name="front_seat" class="textArea" type="text" value=""  placeholder="00" aria-required="true" disabled="">
                        </td>
                        <td>
                          <input id="author" name="front_price" class="textArea" type="text" value=""  placeholder="0.00£" aria-required="true" disabled="">
                        </td>
                        <!-- <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
                      </tr>
                      <tr>
                         <td><input type="checkbox" id="others2" value="Middle" name="middle"></td>
                         <th>Middle</th>
                        <td>
                          <input id="author" name="middle_seat" class="textArea" type="text" value=""  placeholder="00" aria-required="true" disabled="">
                        </td>
                        <td>
                          <input id="author" name="middle_price" class="textArea" type="text" value=""  placeholder="0.00£" aria-required="true" disabled="">
                        </td>
                        <!-- <th><a href="#"><i class="fa fa-plus" style="font-size:48px;"></i></a>/<a href="#"><i class="fa fa-trash-o" style="font-size:48px;"></i></a></th> -->
                      </tr>
                      <tr>
                         <td><input type="checkbox" id="others2" value="Back" name="back"></td>
                         <th>Back</th>
                        <td>
                          <input id="author" name="back_seat" class="textArea" type="text" value=""  placeholder="00" aria-required="true" disabled="">
                        </td>
                        <td>
                          <input id="author" name="back_price" class="textArea" type="text" value=""  placeholder="0.00£" aria-required="true" disabled="">
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
                		<input type="radio" value="1 day: Attendees can refund up to 1 day before event." name="refund_policy">
                		
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
                		
                		<input type="radio" value="7 day: Attendees can refund up to 7 days before event." name="refund_policy">
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
                		
                		<input type="radio" value="30 day: Attendees can refund up to 30 day before event." name="refund_policy">
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
                		
                		<input type="radio" value="No refunds available at anytime." name="refund_policy">
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
	                		
					       <input type="date" name="ticket_release_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		 
            		<input class="form-control" name="ticket_release_time" id="registration-time" type="time">
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
	                		
					       <input type="date" name="ticket_last_date" >
				
	                	</div>
	                	<div class="col-md-4">
	                		 
            		<input class="form-control" name="ticket_last_time" id="registration-time" type="time">
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
                		
                		<input type="radio" value="Available" name="privacy">
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
                		
                		<input type="radio" value="Privacy" name="privacy">
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
                      <input id="author" name="event_type" class="textArea"  value="" placeholder="Event Type" aria-required="true">
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
                      <input id="author" name="event_topic" class="textArea"  value="" placeholder="Event Topic" aria-required="true">
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
                		
                		<input type="radio" value="Privacy" name="remaning_ticket_show">
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