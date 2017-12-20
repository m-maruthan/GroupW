<?php 
require_once 'conn.php';
if($_POST)
{
	//print_r($_POST);die;
	// $valid['success'] = array('success' => false, 'messages' => array());
	$std = $_POST['std'];
	$contact = $_POST['contact'];
	$user_id = $_POST['user_id'];
	$user_fname = $_POST['fname'];
	$user_lname = $_POST['lname'];
	
	$address2 = $_POST['address2'];
	$address1 = $_POST['address1'];
	$city = $_POST['city'];
	$Country = $_POST['Country'];
	$postcode = $_POST['postcode'];

	 $mobile = $_POST['std']. ' ' .$_POST['contact'];
	 
	$sql = mysqli_query($conn,"UPDATE `users_register` SET `contact` = '$mobile', `first_name`='$user_fname', `last_name`='$user_lname', `address1`='$address1',`address2`='$address2',`city`='$city', `Country`='$Country', `postcode`='$postcode' WHERE user_id = '$user_id'");

	if($sql===true)
	{
		  header("location:myaccount.php?ch=1");
		// $valid['success'] = true;
		// $valid['messages'] = "Successfully Update";	
	}
	else {
		$valid['success'] = false;
		$valid['success'] = "Error while updating product info";
	}
	echo json_encode($valid);
}
?>