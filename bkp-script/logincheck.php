<?php
     session_start();
      include('conn.php');
    if(isset($_POST['submit']))
    {
        //print_r($_POST);die;
         $useremail=$_POST['email'];
    	  $password=$_POST['password'];
         $_SESSION['email'] =$useremail;
       if(empty($useremail)||empty($password))
       {
       	 if($useremail == "")
       	   {
             // $error[] = "username is required";
              header('location:index.php?er1=username is required');
       	   }
       	   if($password == "")
       	   {
              //$error[] = "password is required";
              header('location:index.php?er2=password is required');
       	   }
       	   if($password =="" and $useremail == "" )
       	   {
       	   	  // $error[] = "Both Email and Password is required";
       	   	  header('location:index.php?er3=Both Email and Password is required');
       	   	  
       	   }
       }else{
    	     // echo "ok";
    	        $sql= mysqli_query($conn,"SELECT * FROM `users_register` WHERE email = '$useremail' AND password = '$password'");
    	      if(mysqli_num_rows($sql)>0)
    	      { 
              $row = mysqli_fetch_array($sql);
              //print_r($row);die;
             $username =$row['first_name'];
                $user_id = $row['user_id'];
    	     	$_SESSION['username']=$username;
             $_SESSION['user_id']=$user_id;
    	      	// echo "okssdf";
                 header('location:userevent.php?log=1');
    	      }else
    	      {
    	      	 
    	      	 // $error[] ="Incorrect email and password combination"; 
    	      	 header('location:index.php?er4=Incorrect email and password combination');
    	      }  
           }
    }
?>