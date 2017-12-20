<?php
//session_start(); 
require_once 'conn.php';
if($_POST)
{
	// $valid['success'] = array('success' => false, 'messages' => array());
 	$currentPassword = $_POST['password'];
    $newPassword =$_POST['npassword'];
	$conformPassword =$_POST['cpassword'];

	$user_id = $_POST['user_id'];

	$sql = mysqli_query($conn,"SELECT * FROM users_register WHERE user_id = '$user_id'");
	$row = mysqli_fetch_assoc($sql);
	if($currentPassword == $row['password'])
	{
		if($newPassword == $conformPassword)
		{
			$updateSql = mysqli_query($conn,"UPDATE users_register SET password = '$newPassword' WHERE user_id = $user_id");
			if($updateSql === TRUE) {
				header("location:myaccount.php?chg=1");
				// $valid['success'] = true;
				// $valid['messages'] = "Successfully Updated";		
			} else {
				$valid['success'] = false;
				$valid['messages'] = "Error while updating the password";	
			}
		}
		else
		{
			header("location:myaccount.php?erpass1=1");
			// $valid['success'] = false;
			// $valid['messages'] = "New password does not match with Conform password";
		}
	}
	else
	{
		header("location:myaccount.php?erpass=1");
		// $valid['success'] = false;
		// $valid['messages'] = "Current password is incorrect";
	}
	
	echo json_encode($valid);
}	
	
?>