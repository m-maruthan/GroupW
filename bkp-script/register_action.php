<?php
   include('conn.php'); 
  
   if(isset($_POST['submit']))
    {
     // print_r($_POST);die;
        $fname=$_POST['fname'];
    	  $lname=$_POST['lname'];
        
    	
        $email = $_POST['email'];
    	 $password=$_POST['password'];
    	  $dob=$_POST['dob'];
       
       // $mobile=$_POST['mobile'];
       
       //  $std=$_POST['std'];
       $mobile = $_POST['std']. ' ' .$_POST['mobile'];
         // print_r($_POST);die;
	   // if($password != $cpassword)
	   // {

    //         header('location:../register.php?er=1');
	   // }
	   
	   // else{

          $que="select * from users_register where (email='$email')";
    
        $res=mysqli_query($conn,$que);
        if (mysqli_num_rows($res) < 1) {
            
      $sql= mysqli_query($conn,"INSERT INTO `users_register`(`first_name`, `last_name`, `email`, `password`, `dob`, `contact`,`address1`,`address2`,`city`,`Country`,`postcode`) VALUES ('$fname','$lname','$email','$password','$dob','$mobile','','','','','')");
       // print_r($sql);die;
       if(!$sql)
       {
        echo "error";
         
       }else{
        //echo "successful";
        header('location:index.php?yes=1');
       }


      }
       

       
        else{

           // output data of each row
        $row = mysqli_fetch_assoc($res);
         //print_r( $row); die;
        if( $email==$row['email'])
        {
            //echo "Email already exists";
           header('location:index.php?error=Email already exists');
        }



	   }
	
       
    // }  





    }

      
?>