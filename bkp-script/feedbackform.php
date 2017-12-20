<?php 
require_once 'conn.php';
//Array ( [name] => sdfsdf [email] => sarita@gmail.com [eventattender] => 14 [rattings] => 4 [phone] => 234234 [comment] => cxcvcvxcvx [userid] => 15 )

if($_POST)
{

  	$qry = mysqli_query($conn,"select * from `feedback` where Participant_ID='".$_POST['userid']."' and `eventID`='".$_POST['eventattender']."'");
	if(mysqli_num_rows($qry)==0)
	{
		$sql = mysqli_query($conn,"insert into feedback(Participant_ID,Rating,Description,Feedback_Date,eventID,name,emailno,phoneno) values ('".$_POST['userid']."','".$_POST['rattings']."','".$_POST['comment']."','".date('Y-m-d')."','".$_POST['eventattender']."','".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')");
	} else {
		 header("location:feedback.php?chg=1");
 		$valid['messages'] = "Successfully Update";	
	}

	if($sql===true)
	{
		  header("location:feedback.php?ch=1");
 		$valid['messages'] = "Successfully Update";	
	}
	else {
		$valid['success'] = false;
		$valid['success'] = "Error while updating product info";
	}
	echo json_encode($valid);
}

?>