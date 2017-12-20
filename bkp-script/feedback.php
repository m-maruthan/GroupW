<?php
   include('header.php');
   
   if(!isset($_SESSION['user_id']))
   {
	   ?>
		<script>window.location.href = 'index.php';</script>
	   <?php
   }
   
   
?>


  
       <section class="sub-banner newsection">
	    <div class="container">
	        <h2 class="title">Feedback</h2><ul class="breadcrumb" itemprop="breadcrumb"><li><a href="http://innwithemes.com/eventonwp">Home</a> </li><li><span class="current" >Feedback</span></li></div>
	</section>
	 
    <?php if(isset($_GET['ch'])) 
		{
		   
			
				echo '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>
				"Feedback successfully added!"</div>';                                      
			}
                 if(isset($_GET['chg'])) 
                            {
                               
                                
                                    echo '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>
                                    "Already Provided!"</div>';                                      
                                } 

                           
                        ?>
    <div class="container second-portion">
      <div class="jumbotron">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<br>
						<h3 class="title">MAIL & WEBSITE</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp Comedyrunners@gmail.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.Comedyrunners.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<br>
						<h3 class="title">CONTACT</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  07737978513 
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<br>
						<h3 class="title">ADDRESS</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 52 blanford street <br>
                                    London<br>
                                    Wx1h0bx.
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		<!-- /Boxes de Acoes -->
		
		<!--My Portfolio  dont Copy this -->
	    
	</div>
</div>
</div>
     <div class="container second-portion">
    <div class="col-sm-12" id="parent">
    	
    	<div class="col-sm-6">
    		<form action="feedbackform.php" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
		        </div>
		    <div class="form-group">
		           <select name="eventattender" id="eventattender" class="form-control" required="">
				   <option value="">Event Name</option>
				   
				   <?php 
						$qry = "select * from payment_info where user_id='".$_SESSION['user_id']."'";
						$qris =mysqli_query($conn,$qry);
						while($row = mysqli_fetch_assoc($qris))
						{
							$qry2 = "select * from event where event_id='".$row['event_id']."'";
							$qris2 =mysqli_query($conn,$qry2);
							$res2 =mysqli_fetch_array($qris2)
							
						
						
					?>
					<option value="<?php print($row['event_id']);?>"><?php print($res2['event_title']);?></option>
					<?php } ?>
				   </select>
		      </div>
		      <div class="form-group">
		           <select name="rattings" id="rattings" class="form-control" required="">
				   <option value="">Rattings</option>
 					<option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
 				   </select>
		      </div>
              <div class="form-group">
		           <input type="text" class="form-control" id="phone" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="comment" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
	      	  <button class="btn btn-primery btn-send" type="submit"> <span class="fa fa-paper-plane"></span> Send </button>
              <input type="hidden" name="userid" id="userid" value="<?php print($_SESSION['user_id']);?>">
		      </div>
     		</form>
    	</div>
    	<div class="col-sm-6">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7130804223602!2d-0.15654698451490084!3d51.518479679636926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761acdbc25f5d3%3A0x9d1f9d645362baee!2s52+Blandford+St%2C+Marylebone%2C+London+W1U+7HY%2C+UK!5e0!3m2!1sen!2sin!4v1512463775059" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>

    </div>
 
</div>

				
	<?php
          include('footer.php');
		?>