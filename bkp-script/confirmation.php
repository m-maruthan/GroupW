<?php
		include('header.php');
  		$date  = date('Y-m-d') ; 
		$orderid= 'OR'.uniqid();
		$chkflag=0;
    	if($_REQUEST['early_qty_tickets']!=''){
			
			$ins = "INSERT INTO  `payment_info` (`oderid`, `countrty`, `address`, `city`, `postal_code`, `mob`, `email`, `user_id`, `price`, `event_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `date`, `price1`, `price2`, `price3`, `price4`, `price5`, `ticket_typ1`, `ticket_typ2`, `ticket_typ3`, `ticket_typ4`, `ticket_typ5`) VALUES ('".$orderid."','".$_REQUEST['Country']."','".$_REQUEST['Address']."', '".$_REQUEST['City']."', '".$_REQUEST['Postal']."','".$_REQUEST['Mobile']."', '".$_REQUEST['email']."', '".$_SESSION['user_id']."', '".$_REQUEST['total']."',  '".$_REQUEST['event']."',  '".$_REQUEST['early_qty_tickets']."',  '".$_REQUEST['vip_qty_tickets']."',  '".$_REQUEST['front_qty_tickets']."',  '".$_REQUEST['midd_qty_tickets']."' ,  '".$_REQUEST['back_qty_tickets']."' ,  '$date','".$_REQUEST['early_bird_price']."',  '".$_REQUEST['vip_price']."',  '".$_REQUEST['front_price']."',   '".$_REQUEST['middle_price']."',  '".$_REQUEST['back_price']."',  '".$_REQUEST['tickets_typ1']."', '".$_REQUEST['tickets_typ2']."',  '".$_REQUEST['tickets_typ3']."',  '".$_REQUEST['tickets_typ4']."',  '".$_REQUEST['tickets_typ5']."')"  ;
 			mysqli_query($conn,"$ins");
			
			/*Start Update Seat Quantity*/
			$qnts1 = $_REQUEST['early_qty_tickets'];
			$qnts2 = $_REQUEST['vip_qty_tickets'];
			$qnts3 = $_REQUEST['midd_qty_tickets'];
			$qnts4 = $_REQUEST['back_qty_tickets'];
			$qnts5 = $_REQUEST['front_qty_tickets'];
 			$sql2="UPDATE `event` SET early_bird_seat = early_bird_seat-$qnts1, vip_seat = vip_seat-$qnts2,middle_seat = middle_seat-$qnts3,back_seat = back_seat-$qnts4,front_seat = front_seat-$qnts5 WHERE event_id = '".$_REQUEST['event']."'";  
			$query2=mysqli_query($conn,$sql2);
			/*End Update Seat Quantity*/
			$chkflag=1;
			
		}else if($_REQUEST['vip_qty_tickets']!=''){
			
			$ins = "INSERT INTO  `payment_info` (`oderid`, `countrty`, `address`, `city`, `postal_code`, `mob`, `email`, `user_id`, `price`, `event_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `date`, `price1`, `price2`, `price3`, `price4`, `price5`, `ticket_typ1`, `ticket_typ2`, `ticket_typ3`, `ticket_typ4`, `ticket_typ5`) VALUES ('".$orderid."', '".$_REQUEST['Country']."','".$_REQUEST['Address']."', '".$_REQUEST['City']."', '".$_REQUEST['Postal']."','".$_REQUEST['Mobile']."', '".$_REQUEST['email']."', '".$_SESSION['user_id']."', '".$_REQUEST['total']."',  '".$_REQUEST['event']."',  '".$_REQUEST['early_qty_tickets']."',  '".$_REQUEST['vip_qty_tickets']."',  '".$_REQUEST['front_qty_tickets']."',  '".$_REQUEST['midd_qty_tickets']."' ,  '".$_REQUEST['back_qty_tickets']."' ,'$date',  '".$_REQUEST['early_bird_price']."',  '".$_REQUEST['vip_price']."',  '".$_REQUEST['front_price']."',   '".$_REQUEST['middle_price']."',  '".$_REQUEST['back_price']."',  '".$_REQUEST['tickets_typ1']."',  '".$_REQUEST['tickets_typ2']."',  '".$_REQUEST['tickets_typ3']."',  '".$_REQUEST['tickets_typ4']."',  '".$_REQUEST['tickets_typ5']."')"  ;
			mysqli_query($conn,"$ins");
			
			/*Start Update Seat Quantity*/
			$qnts1 = $_REQUEST['early_qty_tickets'];
			$qnts2 = $_REQUEST['vip_qty_tickets'];
			$qnts3 = $_REQUEST['midd_qty_tickets'];
			$qnts4 = $_REQUEST['back_qty_tickets'];
			$qnts5 = $_REQUEST['front_qty_tickets'];
 			$sql2="UPDATE `event` SET early_bird_seat = early_bird_seat-$qnts1, vip_seat = vip_seat-$qnts2,middle_seat = middle_seat-$qnts3,back_seat = back_seat-$qnts4,front_seat = front_seat-$qnts5 WHERE event_id = '".$_REQUEST['event']."'";  
			$query2=mysqli_query($conn,$sql2);
			/*End Update Seat Quantity*/
			$chkflag=1;
		
		}else if($_REQUEST['midd_qty_tickets']!=''){
			
			$ins = "INSERT INTO  `payment_info` (`oderid`, `countrty`, `address`, `city`, `postal_code`, `mob`, `email`, `user_id`, `price`, `event_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `date`, `price1`, `price2`, `price3`, `price4`, `price5`, `ticket_typ1`, `ticket_typ2`, `ticket_typ3`, `ticket_typ4`, `ticket_typ5`) VALUES ('".$orderid."', '".$_REQUEST['Country']."','".$_REQUEST['Address']."', '".$_REQUEST['City']."', '".$_REQUEST['Postal']."','".$_REQUEST['Mobile']."', '".$_REQUEST['email']."', '".$_SESSION['user_id']."', '".$_REQUEST['total']."',  '".$_REQUEST['event']."',  '".$_REQUEST['early_qty_tickets']."',  '".$_REQUEST['vip_qty_tickets']."',  '".$_REQUEST['front_qty_tickets']."',  '".$_REQUEST['midd_qty_tickets']."' ,  '".$_REQUEST['back_qty_tickets']."' , '$date', '".$_REQUEST['early_bird_price']."',  '".$_REQUEST['vip_price']."',  '".$_REQUEST['front_price']."',   '".$_REQUEST['middle_price']."',  '".$_REQUEST['back_price']."',  '".$_REQUEST['tickets_typ1']."',  '".$_REQUEST['tickets_typ2']."',  '".$_REQUEST['tickets_typ3']."',  '".$_REQUEST['tickets_typ4']."',  '".$_REQUEST['tickets_typ5']."')"  ;
			mysqli_query($conn,"$ins");
			
			/*Start Update Seat Quantity*/
			$qnts1 = $_REQUEST['early_qty_tickets'];
			$qnts2 = $_REQUEST['vip_qty_tickets'];
			$qnts3 = $_REQUEST['midd_qty_tickets'];
			$qnts4 = $_REQUEST['back_qty_tickets'];
			$qnts5 = $_REQUEST['front_qty_tickets'];
 			$sql2="UPDATE `event` SET early_bird_seat = early_bird_seat-$qnts1, vip_seat = vip_seat-$qnts2,middle_seat = middle_seat-$qnts3,back_seat = back_seat-$qnts4,front_seat = front_seat-$qnts5 WHERE event_id = '".$_REQUEST['event']."'";  
			$query2=mysqli_query($conn,$sql2);
			/*End Update Seat Quantity*/
			$chkflag=1;
		
		}else if($_REQUEST['back_qty_tickets']!=''){
		
		$ins = "INSERT INTO  `payment_info` (`oderid`, `countrty`, `address`, `city`, `postal_code`, `mob`, `email`, `user_id`, `price`, `event_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `date`, `price1`, `price2`, `price3`, `price4`, `price5`, `ticket_typ1`, `ticket_typ2`, `ticket_typ3`, `ticket_typ4`, `ticket_typ5`) VALUES ('".$orderid."', '".$_REQUEST['Country']."','".$_REQUEST['Address']."', '".$_REQUEST['City']."', '".$_REQUEST['Postal']."','".$_REQUEST['Mobile']."', '".$_REQUEST['email']."', '".$_SESSION['user_id']."', '".$_REQUEST['total']."',  '".$_REQUEST['event']."',  '".$_REQUEST['early_qty_tickets']."',  '".$_REQUEST['vip_qty_tickets']."',  '".$_REQUEST['front_qty_tickets']."',  '".$_REQUEST['midd_qty_tickets']."' ,  '".$_REQUEST['back_qty_tickets']."' , '$date', '".$_REQUEST['early_bird_price']."',  '".$_REQUEST['vip_price']."',  '".$_REQUEST['front_price']."',   '".$_REQUEST['middle_price']."',  '".$_REQUEST['back_price']."',  '".$_REQUEST['tickets_typ1']."', '".$_REQUEST['tickets_typ2']."',  '".$_REQUEST['tickets_typ3']."',  '".$_REQUEST['tickets_typ4']."',  '".$_REQUEST['tickets_typ5']."')"  ;
			mysqli_query($conn,"$ins");	
			
			/*Start Update Seat Quantity*/
			$qnts1 = $_REQUEST['early_qty_tickets'];
			$qnts2 = $_REQUEST['vip_qty_tickets'];
			$qnts3 = $_REQUEST['midd_qty_tickets'];
			$qnts4 = $_REQUEST['back_qty_tickets'];
			$qnts5 = $_REQUEST['front_qty_tickets'];
 			$sql2="UPDATE `event` SET early_bird_seat = early_bird_seat-$qnts1, vip_seat = vip_seat-$qnts2,middle_seat = middle_seat-$qnts3,back_seat = back_seat-$qnts4,front_seat = front_seat-$qnts5 WHERE event_id = '".$_REQUEST['event']."'";  
			$query2=mysqli_query($conn,$sql2);
			/*End Update Seat Quantity*/
			$chkflag=1;
		
		}else if($_REQUEST['front_qty_tickets']!=''){
			
			$ins = "INSERT INTO  `payment_info` (`oderid`, `countrty`, `address`, `city`, `postal_code`, `mob`, `email`, `user_id`, `price`, `event_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `date`, `price1`, `price2`, `price3`, `price4`, `price5`, `ticket_typ1`, `ticket_typ2`, `ticket_typ3`, `ticket_typ4`, `ticket_typ5`) VALUES ('".$orderid."', '".$_REQUEST['Country']."','".$_REQUEST['Address']."', '".$_REQUEST['City']."', '".$_REQUEST['Postal']."','".$_REQUEST['Mobile']."', '".$_REQUEST['email']."', '".$_SESSION['user_id']."', '".$_REQUEST['total']."',  '".$_REQUEST['event']."',  '".$_REQUEST['early_qty_tickets']."',  '".$_REQUEST['vip_qty_tickets']."',  '".$_REQUEST['front_qty_tickets']."',  '".$_REQUEST['midd_qty_tickets']."' ,  '".$_REQUEST['back_qty_tickets']."' , '$date', '".$_REQUEST['early_bird_price']."',  '".$_REQUEST['vip_price']."',  '".$_REQUEST['front_price']."',   '".$_REQUEST['middle_price']."',  '".$_REQUEST['back_price']."',  '".$_REQUEST['tickets_typ1']."', '".$_REQUEST['tickets_typ2']."',  '".$_REQUEST['tickets_typ3']."',  '".$_REQUEST['tickets_typ4']."',  '".$_REQUEST['tickets_typ5']."')"  ;
			mysqli_query($conn,"$ins");
			
			/*Start Update Seat Quantity*/
			$qnts1 = $_REQUEST['early_qty_tickets'];
			$qnts2 = $_REQUEST['vip_qty_tickets'];
			$qnts3 = $_REQUEST['midd_qty_tickets'];
			$qnts4 = $_REQUEST['back_qty_tickets'];
			$qnts5 = $_REQUEST['front_qty_tickets'];
 			$sql2="UPDATE `event` SET early_bird_seat = early_bird_seat-$qnts1, vip_seat = vip_seat-$qnts2, middle_seat = middle_seat-$qnts3, back_seat = back_seat-$qnts4, front_seat = front_seat-$qnts5 WHERE event_id = '".$_REQUEST['event']."'";  
			$query2=mysqli_query($conn,$sql2);
			/*End Update Seat Quantity*/
			$chkflag=1;
		}
?>

 <div class="container" style="margin-top:50px; margin-left:50px;">
	
			<div class="row">	
				<?php if($chkflag==1){?><div style="width:100%; padding:10px; color:#063;">You have successfully booked your ticket, Please go to <a href="./userevent.php">your account</a> and see.</div><?php } else{ ?>
                <div style="width:100%; padding:10px; color:#063;">All tickets Full</div>
                <?php }?>
					<table width="479" border="1">
					  <tr>
						<td width="212"><strong>Confirmation Payment</strong></strong></td>
						<td width="251">&nbsp;</td>
					  </tr>
                      <tr>
						<td><b>Total Amount</b> </td>
						<td><?php echo $_REQUEST['total'] ;?></td>
					  </tr>
                      <tr>
						<td><b>Name On Card</b> </td>
						<td><?php echo $_REQUEST['NameOnCard'] ;?></td>
					  </tr>
                      <tr>
						<td><b>Card Number</b> </td>
						<td><?php echo $_REQUEST['CardNumber'] ;?></td>
					  </tr>
                      <tr>
						<td><b>Card Expiry</b> </td>
						<td><?php echo 'Month: '.$_REQUEST['cardmonth'].' Year: '.$_REQUEST['cardyear'] ;?></td>
					  </tr>
                      <tr>
						<td><b>CVV</b> </td>
						<td><?php echo $_REQUEST['cvvno'] ;?></td>
					  </tr>
                      
					   
					  <tr>
						<td>Country</td>
						<td><?php echo $_REQUEST['Country'] ;?></td>
					  </tr>
					  <tr>
						<td>City</td>
						<td><?php echo $_REQUEST['City'] ;?></td>
					  </tr>
					  <tr>
						<td>Postal</td>
						<td><?php echo $_REQUEST['Postal'] ;?></td>
					  </tr>
					  <tr>
						<td><b>Address</b></td>
						<td><input type="text" name="Address" value="<?php echo $_REQUEST['Address'] ;?>" class="form-control"  disabled="disabled"></td>
					  </tr>
					  <tr>
						<td><b>Email</b></td>
						<td><input type="text" name="email" value="<?php echo $_REQUEST['email'] ;?>" class="form-control" disabled="disabled"></td>
					  </tr>
					 
					</table>
					<form action="userevent.php" method="post">
                    <input type="submit" name="submit_pay" value="Confirm" class="btn btn-success" >
                    </form>
		 
		
		 <?php /*?><form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                       <!-- Identify your business so that you can collect the payments. -->
                <input type="hidden" name="business" value="anishmitm1988-facilitator@gmail.com">

                      <!-- Specify a Buy Now button. -->
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="item_name" value="customer">
                        <input type="hidden" name="item_number" value="">
                        <input type="hidden"  name="amount" value="<?php echo $_REQUEST['total'] ;?>">
                        <input type="hidden" name="currency_code" value="GBP">
                        <input type="hidden" name="custom" value="">
                        <input type="hidden" name="return" value="http://shrinkcom.com/inventory/orders.php?o=add" />
	<input   type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" name="submit" alt="PayPal - The safer, easier way to pay online!" />
					   <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >  
  		 </form><?php */?>
			</div>
</div>
<div style="width:100%; padding:10px;">&nbsp;</div>
		<?php
         		 include('footer.php');
		?>