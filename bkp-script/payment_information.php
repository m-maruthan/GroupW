<?php
	include('header.php');
	error_reporting(0);
	if(isset($_REQUEST['early_bird_price']))
	{
		$early_bird_price =  $_REQUEST['early_bird_price'];
	} else { 
		$early_bird_price='';
	}
	if(isset($_REQUEST['vip_price']))
	{
		$vip_price =  $_REQUEST['vip_price'];
	} else {
		$vip_price =  '';
	}
	if(isset($_REQUEST['front_price']))
	{
		$front_price =  $_REQUEST['front_price'];
	} else {
		$front_price =  '';	
	}
	if(isset($_REQUEST['middle_price']))
	{
		$middle_price =  $_REQUEST['middle_price'];	
	} else {
		$middle_price =  '';
	}
	if(isset($_REQUEST['back_price']))
	{
		$back_price =  $_REQUEST['back_price'];
	} else {
		$back_price =  '';
	}
	
	if(isset($_REQUEST['early_qty_tickets']))
	{
		$early_qty_tickets =  $_REQUEST['early_qty_tickets'] ;
	} else {
		$early_qty_tickets='';
	}
	if(isset($_REQUEST['vip_qty_tickets']))
	{
		$vip_qty_tickets =    $_REQUEST['vip_qty_tickets'] ;
	} else {
		$vip_qty_tickets='';
	}
	if(isset($_REQUEST['front_qty_tickets']))
	{
		$front_qty_tickets =  $_REQUEST['front_qty_tickets'] ;
	} else {
		$front_qty_tickets='';
	}
	if(isset($_REQUEST['midd_qty_tickets']))
	{
		$midd_qty_tickets =  $_REQUEST['midd_qty_tickets'] ;
	} else {
		$midd_qty_tickets='';
	}
	if(isset($_REQUEST['back_qty_tickets']))
	{
		$back_qty_tickets =  $_REQUEST['back_qty_tickets'] ;
	} else {
		$back_qty_tickets='';
	}
	
	if(isset($_REQUEST['tickets_typ1']))
	{
		$tickets_typ1 =  $_REQUEST['tickets_typ1'];
	} else {
		$tickets_typ1 =  '';
	} 
	if(isset($_REQUEST['tickets_typ2']))
	{
		$tickets_typ2 =  $_REQUEST['tickets_typ2'];
	} else {
		$tickets_typ2 =  '';
	} 
	if(isset($_REQUEST['tickets_typ3']))
	{
		$tickets_typ3 =  $_REQUEST['tickets_typ3'];
	} else {
		$tickets_typ3 =  '';
	}
	
	if(isset($_REQUEST['tickets_typ4']))
	{
		$tickets_typ4 =  $_REQUEST['tickets_typ4'];
	} else {
		$tickets_typ4 =  '';
	}
	
	if(isset($_REQUEST['tickets_typ5']))
	{
		$tickets_typ5 =  $_REQUEST['tickets_typ5'];
	} else {
		$tickets_typ5 =  '';
	}
	 
	 
 	
	$total  = ($early_bird_price*$early_qty_tickets)+($vip_price*$vip_qty_tickets)+($front_price*$front_qty_tickets)+($middle_price*$midd_qty_tickets)+($back_price*$back_qty_tickets) ; 
	
	$qrr =mysqli_query($conn,"select * from users_cards where users_id='".$id."'");
   $cardArr = mysqli_fetch_array($qrr);
   
   $qrr2 =mysqli_query($conn,"select * from users_register where user_id='".$id."'");
   $rows = mysqli_fetch_array($qrr2);
?>
 <div class="container" style="margin-top:50px; margin-left:50px;">
	
			<div class="row">	
			<form name="" action="confirmation.php" method="GET" >		
							<table width="656" border="0">
							
								<tr>
								<td width="288"  style="padding: 5px;"><strong>
								  <h4>Payment Information</h4 ></strong></td>
								<td width="358">&nbsp;</td>
							  </tr>
							  
							  <tr>
								<td style="padding: 5px;"><strong>Total Price:</strong></td>
								<td  style="padding: 5px;">&pound;<?php echo $total ; ?></td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;" colspan="2"><strong>Please enter your credit debit/card information below and submit </strong></td>
 							  </tr>
                              
                               <tr>
								<td style="padding: 5px;"><strong>Card Accepted : </strong></td>
								<td  style="padding: 5px;">
                                <input type="radio" name="cardtype" value="Visa" checked> Visa<br>
                                  <input type="radio" name="cardtype" value="Master"> Master<br>
                                  <input type="radio" name="cardtype" value="American Express"> American Express 
<br />
                                  <input type="radio" name="cardtype" value="PayPal" > PayPal </td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Name On Card :</strong></td>
								<td  style="padding: 5px;"><input type="text" name="NameOnCard" value="<?php print($cardArr['nameoncard']);?>" class="form-control" style="width: 300px;"></td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Card Number :</strong></td>
								<td  style="padding: 5px;"><input type="text" name="CardNumber" value="<?php print($cardArr['cardnumber']);?>" class="form-control" style="width: 300px;"></td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Expiry Date :</strong></td>
								<td  style="padding: 5px;">
								Month: <select name="cardmonth" id="cardmonth" style="width:20%;">
								<?php for ($i = 1; $i <= 12; $i++) {?>
                                  <option value="<?php print($i);?>" <?php if($i==$cardArr['expirymonth']){?> selected="selected"<?php }?>><?php print($i);?></option>
                                 <?php } ?>
                                </select>
                                &nbsp;Year: <select name="cardyear" id="cardyear" style="width:25%;">
                                        <?php for ($i = 2017; $i <= 2038; $i++) {?>
                                        <option value="<?php print($i);?>" <?php if($i==$cardArr['expiryyear']){?> selected="selected"<?php }?>><?php print($i);?></option>
                                        <?php } ?>
                                        </select></td>
							  </tr>
                               
                              <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>CVV :</strong></td>
								<td  style="padding: 5px;"><input type="text" name="cvvno" value="<?php print($cardArr['cardcvv']);?>" class="form-control" style="width: 300px;"></td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Country :</strong></td>
								<td  style="padding: 5px;">
								<select name="Country" value="" style="width: 300px;">
								  <option>Select Country</option>
									 <option value="UK" <?php if($rows['Country']=='UK'){?> selected="selected"<?php }?>>UK</option>
									<option value="INDIA" <?php if($rows['Country']=='INDIA'){?> selected="selected"<?php }?>>INDIA</option>
								</select>
								</td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;" colspan="2"><strong><input type="radio" name="addressInfo" value="addressInfo" > Use address provided in my account for billing address</strong></td>
 							  </tr>
                                
							  <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Address Line 1:</strong></td>
								<td  style="padding: 5px;"><input type="text" name="Address" value="<?php echo $rows['address1'];?>" class="form-control" style="width: 300px;"></td>
							  </tr>
                              <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Address Line 2:</strong></td>
								<td  style="padding: 5px;"><input type="text" name="Address2" value="<?php echo $rows['address2'];?>" class="form-control" style="width: 300px;"></td>
							  </tr>
							  <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>City :</strong></td>
								<td  style="padding:5px;"><input type="text" name="City" value="<?php echo $rows['city'];?>" class="form-control" style="width: 300px;" ></td>
							  </tr>
							  <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Postal Code :</strong></td>
								<td  style="padding: 5px;"><input type="text" name="Postal" value="<?php echo $rows['postcode'];?>" class="form-control" style="width: 300px;" ></td>
							  </tr>
							  <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Contact No. :</strong></td>
								<td  style="padding: 5px;"><input type="text" name="Mobile" value="<?php echo $rows['contact'];?>" class="form-control" style="width: 300px;"></td>
							  </tr>
							  <tr style="padding:5px">
								<td  style="padding: 5px;"><strong>Email :</strong></td>
								<td  style="padding: 5px;"><input type="text" name="email" value="<?php echo $rows['email'];?>" class="form-control" style="width: 300px;"></td>
							  </tr>
							  <tr style="padding:5px">
								<td colspan="2" style="padding:5px"  ><input type="submit" name="submit_pay" value="Proceed to Confirmation" class="btn btn-success" ></td>
							  </tr>
			  </table>
							
							<input type="hidden" name="total" value="<?php echo $total ;?>" class="form-control" >
							<input type="hidden" name="event" value="<?php echo $_REQUEST['event'] ;?>" class="form-control" >
							
							 <input type="hidden" name="early_bird_price" value="<?php echo $early_bird_price ;?>" class="form-control" >
							 <input type="hidden" name="vip_price" value="<?php echo $vip_price ;?>" class="form-control" >
							 <input type="hidden" name="front_price" value="<?php echo $front_price ;?>" class="form-control" >
							 <input type="hidden" name="middle_price" value="<?php echo $middle_price ;?>" class="form-control" >
							 <input type="hidden" name="back_price" value="<?php echo $back_price ;?>" class="form-control" >
							 
							 <input type="hidden" name="early_qty_tickets" value="<?php echo $early_qty_tickets ;?>" class="form-control" >
							 <input type="hidden" name="vip_qty_tickets" value="<?php echo $vip_qty_tickets ;?>" class="form-control" >
							 <input type="hidden" name="front_qty_tickets" value="<?php echo $front_qty_tickets ;?>" class="form-control" >
							 <input type="hidden" name="midd_qty_tickets" value="<?php echo $midd_qty_tickets ;?>" class="form-control" >
							 <input type="hidden" name="back_qty_tickets" value="<?php echo $back_qty_tickets ;?>" class="form-control" >
							 
							 <input type="hidden" name="tickets_typ1" value="<?php echo $tickets_typ1 ;?>" class="form-control" >
							 <input type="hidden" name="tickets_typ2" value="<?php echo $tickets_typ2 ;?>" class="form-control" >
							 <input type="hidden" name="tickets_typ3" value="<?php echo $tickets_typ3 ;?>" class="form-control" >
							 <input type="hidden" name="tickets_typ4" value="<?php echo $tickets_typ4 ;?>" class="form-control" >
							 <input type="hidden" name="tickets_typ5" value="<?php echo $tickets_typ5 ;?>" class="form-control" >
							 
             	</form>	
			</div>
</div>
		<?php
          include('footer.php');
		?>