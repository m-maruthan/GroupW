<?php
   include('header.php');
error_reporting(0);
   $result= mysqli_query($conn,"$sql");
   $rows= mysqli_fetch_array($result);
   
    $qrr =mysqli_query($conn,"select * from users_cards where users_id='".$id."'");
   $cardArr = mysqli_fetch_array($qrr);

?>



      <section class="sub-banner newsection">
	    <div class="container">
	        <h2 class="title">My Account</h2><!-- <ul class="breadcrumb" itemprop="breadcrumb"><li><a href="index.php">Home</a> </li><li><span class="current" >FAQ</span></li></ul> --></div>
	</section> 
         <div class="wpb_row pix-row vc_row-fluid light normal"><div class="bg-pos-rel"><div class="pix-con clearfix">
		<div class="pix-container">
	<div class="vc_col-sm-12 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
      <?php if(isset($_GET['ch'])) 
                            {
                               
                                
                                    echo '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>
                                    "Contact No successfully changed!"</div>';                                      
                                }
                if(isset($_GET['chg'])) 
                            {
                               
                                
                                    echo '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>
                                    "New password has successfully changed!"</div>';                                      
                                }  
                                 

                           
                        ?>
			<div class="tab">
  <button class="tablinks " onclick="openCity(event, 'London')" id="defaultOpen">Contact Info</button>
  <button class="tablinks " onclick="openCity(event, 'Paris')">Password</button>
  <button class="tablinks " onclick="openCity(event, 'Tokyo')">Payment Options</button>
</div>

<div id="London" class="tabcontent">
  <h3>Contact Info</h3>
  <div class="panel panel-default" style="margin-top: 5px;">
      <div class="panel-heading" >
        <div class="page-heading"> <i class="fa fa-wrench"></i>Change  Contact Info</div>
      </div> <!-- /panel-heading -->
      <div class="panel-body">
         
        <form action="changeusername_action.php" method="post" class="form-horizontal" id="changeUsernameForm">
          <fieldset>
            <legend>Change Contact Info.</legend>
            <div class="changeUsenrameMessages"></div>      
            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Contact No.</label>
              <div class="col-sm-2">
               <select name="std"  >
                 <option value="1">+44</option>
                 <option value="2">+44</option>
                 <option value="3">+44</option>
                 <option value="4">+44</option>
               </select>
                   </div>
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="contact" placeholder="contact no." style="margin-top: 10px;" value="<?php echo $rows['contact'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              
            </div>
            
            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">First Name</label>
              
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="fname" placeholder="First Name" style="margin-top: 10px;" value="<?php echo $rows['first_name'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              
            </div>
            
            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Last Name</label>
              
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="lname" placeholder="Last Name" style="margin-top: 10px;" value="<?php echo $rows['last_name'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              </div>
              <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Address Line 1</label>
              
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="address1" placeholder="Address 1" style="margin-top: 10px;" value="<?php echo $rows['address1'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              </div>
              <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Address Line 2</label>
              
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="address2" placeholder="Address 2" style="margin-top: 10px;" value="<?php echo $rows['address2'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              </div>
              <div class="form-group">
              <label for="username" class="col-sm-2 control-label">City</label>
              
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="city" placeholder="City" style="margin-top: 10px;" value="<?php echo $rows['city'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              </div>
              <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Country</label>
              
                    <div class="col-sm-5">

                     <select name="Country" value="" style="width: 300px;">
                      <option>Select Country</option>
                         <option value="UK" <?php if($rows['Country']=='UK'){?> selected="selected"<?php }?>>UK</option>
                        <option value="INDIA" <?php if($rows['Country']=='INDIA'){?> selected="selected"<?php }?>>INDIA</option>
                    </select>
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              </div>
              <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Postal Code</label>
              
                    <div class="col-sm-5">

                      <input type="text" class="form-control" required="required"  name="postcode" placeholder="Postal Code" style="margin-top: 10px;" value="<?php echo $rows['postcode'];?>">
                   <!-- <input type="text" name="mobile" style="width: 148px;" required="required"> -->
              </div>
              
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $rows['user_id'];?>" /> 
                <button type="submit" class="btn btn-success" data-loading-text="Loading..." id="changeUsernameBtn"> <i class="fa fa-check"></i> Save Changes </button>
              </div>
            </div>
          </fieldset>
        </form>
        

      </div> <!-- /panel-body -->   

    </div>
</div>

<div id="Paris" class="tabcontent">
  <h3>Password</h3>
 <div class="panel panel-default" style="margin-top: 5px;">
      <div class="panel-heading" >
        <div class="page-heading"> <i class="fa fa-wrench"></i>Change Password</div>
      </div> <!-- /panel-heading -->
      <div class="panel-body">
         <form action="changepassword_action.php" method="post" class="form-horizontal" id="changePasswordForm">
          <fieldset>
            <legend>Change Password</legend>

            <div class="changePasswordMessages"></div>

            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Current Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" required="required" id="password" name="password" placeholder="Current Password">
              </div>
            </div>

            <div class="form-group">
              <label for="npassword" class="col-sm-2 control-label">New password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" required="required" id="npassword" name="npassword" placeholder="New Password">
              </div>
            </div>

            <div class="form-group">
              <label for="cpassword" class="col-sm-2 control-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" required="required" id="cpassword" name="cpassword" placeholder="Confirm Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="user_id" id="user_id" value="<?php echo $rows['user_id'];?>" /> 
                <!-- <input type="hidden" name="admin_id" id="admin_id" value="<?php echo $row['admin_id'] ?>" />  -->
                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save Changes </button>
                
              </div>
            </div>


          </fieldset>
        </form>

      </div> <!-- /panel-body -->   

    </div>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Payments</h3>
  <br>
  <div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title">Add Credit Card / Debit Card</h3>
									<form action="addeditpaymentinfo.php" method="post" id="commentform" class="comment-form">

										<p class="comment-form-url col-md-12"><label for="url">Name On Card :</label><input id="url" name="NameOnCard" type="text" class="textArea" value="<?php print($cardArr['nameoncard']);?>" size="30" placeholder="Name On Card"></p>

										<p class="comment-form-url col-md-12"><label for="url">Card Number :</label><input id="url" name="CardNumber" type="text" class="textArea" value="<?php print($cardArr['cardnumber']);?>" size="30" placeholder="Card Number"></p>

										<p class="comment-form-author col-md-4"><label for="author">Month<span class="color">*</span></label> 						<select name="cardmonth" id="cardmonth">
										<?php for ($i = 1; $i <= 12; $i++) {?>
                                        <option value="<?php print($i);?>" <?php if($i==$cardArr['expirymonth']){?> selected="selected"<?php }?>><?php print($i);?></option>
                                        <?php } ?>
                                        </select></p>
                                              
                                        <p class="comment-form-email col-md-4"><label for="email">Year<span class="color">*</span></label>  
                                        <select name="cardyear" id="cardyear">
                                        <?php for ($i = 2017; $i <= 2038; $i++) {?>
                                        <option value="<?php print($i);?>" <?php if($i==$cardArr['expiryyear']){?> selected="selected"<?php }?>><?php print($i);?></option>
                                        <?php } ?>
                                        </select></p>

                                         <p class="comment-form-author col-md-6"><label for="author">CVV<span class="color">*</span></label> <input id="cvvno" name="cvvno" class="textArea" type="text" value="<?php print($cardArr['cardcvv']);?>" size="30" placeholder="CVV" aria-required="true"></p>
                                          <p class="comment-form-author col-md-6"></p>
                                        <br>
                                        <br>
                                        <p class="comment-form-author col-md-6 form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Add Card">  <input type="hidden" name="user_id" id="user_id" value="<?php echo $rows['user_id'];?>" /> 
</p>
<br>
</form>
 
</div>
   
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
		</div> 
	</div> 

	</div></div></div></div>


		<!-- <div class="container">
			 <section id="post-21" class="clearfix post-21 page type-page status-publish hentry" >
              <section class="speakers-tabs newsection show">
	                  
	          </section>

		</section>	
		</div> -->
			
<?php
          include('footer.php');
		?>