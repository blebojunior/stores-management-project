<?php

include_once 'datacon.php';

if(mysqli_connect_errno())
{
    echo("error");
}
if(isset($_POST['register']))
{
   $fname= mysqli_real_escape_string($con,$_POST['fname']);
   $lname= mysqli_real_escape_string($con,$_POST['lname']);
   $email= mysqli_real_escape_string($con,$_POST['email']);
   $username= mysqli_real_escape_string($con,$_POST['username']);
   $dpmt= mysqli_real_escape_string($con,$_POST['dpmt']);
   $phone_no= mysqli_real_escape_string($con,$_POST['phone_no']);

   $query= "INSERT INTO registration (First_name, last_name, Email,username, Department, phone_number)
   VALUES ('$fname', '$lname', '$email', '$username', '$dpmt', '$phone_no')";
   $result=mysqli_query($con, $query);
   if (!$result)
   {
    echo mysqli_error($con);
       echo("not inserted");
   }
   else
   {
       $password_generator = substr (str_shuffle("qwertyuioplkjhgfdsazxcvbnmQWERTYHUIOPLKJGFDSAZXCVBNM1234567890"), -8);
       $hashed_password = password_hash($password_generator, PASSWORD_DEFAULT);

       $query= "INSERT INTO login ( username, user_password) VALUES ('$username', '$hashed_password')";
       $result= mysqli_query($con,$query);
       if($result)
       {
          echo"<script> alert('Registration successful.Login with username:$username and password:$password_generator'); window.location='login.php' </script>";
       }
           
   }
   
}

?>