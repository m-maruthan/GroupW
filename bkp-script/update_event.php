<?php 

require_once 'conn.php';




    if(isset($_POST['submit']))
{


//print_r($_POST);die;

  $event_title=$_POST['event_title'];
  $user_id=$_POST['user_id'];
  $location=$_POST['location'];
  $event_start_date=$_POST['event_start_date'];
  $event_start_time=$_POST['event_start_time'];
  $event_end_date=$_POST['event_end_date'];
  $event_end_time=$_POST['event_end_time'];
  $event_description=$_POST['event_description'];
 
  $organizer_name=$_POST['organizer_name'];
  $refund_policy=$_POST['refund_policy'];
  $ticket_release_date=$_POST['ticket_release_date'];
  $ticket_release_time=$_POST['ticket_release_time'];
  $ticket_last_date=$_POST['ticket_last_date'];
  $ticket_last_time=$_POST['ticket_last_time'];
  $privacy=$_POST['privacy'];
  $event_type=$_POST['event_type'];
  $event_topic=$_POST['event_topic'];
  $remaning_ticket_show=$_POST['remaning_ticket_show'];

  if(isset($_POST['earlybird']))
{
  $early_bird=$_POST['earlybird'];
}else
{
    $early_bird="Null";
}


  $early_bird_seat=$_POST['early_bird_seat'];
  $early_bird_price=$_POST['early_bird_price'];

  
if(isset($_POST['vip']))
{
  $vip = $_POST['vip'];
}else
{
    $vip="Null";
}

  $vip_seat=$_POST['vip_seat'];
  $vip_price=$_POST['vip_price'];

  
if(isset($_POST['front']))
{
  $front =$_POST['front'];
}else
{
    $front="Null";
}



  $front_seat=$_POST['front_seat'];
  $front_price=$_POST['front_price'];
   
   
   if(isset($_POST['middle']))
{
  $middle=$_POST['middle'];
}else
{
    $middle="Null";
}

  $middle_seat=$_POST['middle_seat'];
  $middle_price=$_POST['middle_price'];

  

  if(isset($_POST['back']))
{
  $back=$_POST['back'];
}else
{
    $back="Null";
}
  $back_seat=$_POST['back_seat'];
  $back_price=$_POST['back_price'];
  
 //$event_image=$_POST['event_image'];


  	$newname=uniqid().$_FILES['event_image']['name'];
			move_uploaded_file($_FILES['event_image']['tmp_name'],'images/'.$newname);
		
		//print_r($_POST);die;
	 // $sql= mysqli_query($conn,"INSERT INTO `event`(`user_id`,`event_title`, `location`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_description`, `event_image`, `organizer_name`, `refund_policy`, `ticket_release_date`, `ticket_release_time`, `ticket_last_date`, `ticket_last_time`, `privacy`, `event_type`, `event_topic`, `remaning_ticket_show`,`early_bird_ticket`, `early_bird_seat`, `early_bird_price`,`vip_ticket`, `vip_seat`, `vip_price`, `front_ticket`,`front_seat`, `front_price`,`middle_ticket`, `middle_seat`, `middle_price`,`back_ticket`,   `back_seat`, `back_price`) VALUES ('$user_id','$event_title','$location','$event_start_date','$event_start_time','$event_end_date','$event_end_time','$event_description','$newname','$organizer_name','$refund_policy','$ticket_release_date','$ticket_release_time','$ticket_last_date','$ticket_last_time','$privacy','$event_type','$event_topic','$remaning_ticket_show','$early_bird','$early_bird_seat','$early_bird_price','$vip','$vip_seat','$vip_price','$front','$front_seat','$front_price','$middle','$middle_seat','$middle_price','$back','$back_seat','$back_price')");
		     

              $sql= mysqli_query($conn,"UPDATE `event` SET `event_title`=[$event_title],`user_id`=[$user_id],`location`=[$location],`event_start_date`=[$event_start_date],`event_start_time`=[$event_start_time],`event_end_date`=[$event_end_date],`event_end_time`=[$event_end_time],`event_description`=[$event_description],`event_image`=[$newname],`organizer_name`=[$organizer_name],`refund_policy`=[$refund_policy],`ticket_release_date`=[$ticket_release_date],`ticket_release_time`=[$ticket_release_time],`ticket_last_date`=[$ticket_last_date],`ticket_last_time`=[$ticket_last_time],`privacy`=[$privacy],`event_type`=[$event_type],`event_topic`=[$event_topic],`remaning_ticket_show`=[$remaning_ticket_show],`early_bird_ticket`=[$early_bird],`early_bird_seat`=[$early_bird_seat],`early_bird_price`=[$early_bird_price],`vip_ticket`=[$vip],`vip_seat`=[$vip_seat],`vip_price`=[$vip_price],`front_ticket`=[$front],`front_seat`=[$front_seat],`front_price`=[$front_price],`middle_ticket`=[$middle],`middle_seat`=[$middle_seat],`middle_price`=[$middle_price],`back_ticket`=[$back],`back_seat`=[$back_seat],`back_price`=[$back_price] ");






					if($sql)
			{
				
				$sucmsg="update event succesfully !";

				echo '<script>window.location.href="edit_createevent.php?sucmsg1=update event succesfully !"</script>';
			}
			else{
				
			 echo	$msg1="Event not update";
			}
	
}

   
?>