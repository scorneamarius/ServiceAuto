<?php
   include("db_connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT * FROM db_login WHERE EMAIL = '$myemail' and PASSWORD = '$mypassword'";
      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myemail;
         $_SESSION['login_user_id'] = $row['ID'];
         $_SESSION['login_user_isAdmin'] = $row['isAdmin'];
         
         header("location: ../index.php");
      }else {
         $cookie_name = "errorLogin";
         $cookie_value = "Invailid credits";
         setcookie($cookie_name, $cookie_value, time() + (2), "/"); // 2 = 2 sec
         header("location: ../index.php?result=Your Login Name or Password is invalid");
     
      }
   }
?>