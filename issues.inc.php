<?php

session_start();    

include_once 'datacon.php';

if(mysqli_connect_errno())
{
    echo("error");
}
if(isset($_POST['issues']))
{
   $Amount= mysqli_real_escape_string($con,$_POST['Amount']);
   $Issued_by= mysqli_real_escape_string($con,$_POST['Issued_by']);
   $Issued_To= mysqli_real_escape_string($con,$_POST['Issued_To']);
   //$Issue_date= mysqli_real_escape_string($con,$_POST['Issue_date']);
   $Approval_check= mysqli_real_escape_string($con,$_POST['Approval_check']);
   
   $query= "INSERT INTO issues (Amount, Issued_by, Issued_To , Approval_check)
   VALUES ('$Amount', '$Issued_by', '$Issued_To', '$Approval_check')";
   $result=mysqli_query($con, $query);
   if (!$result)
   {
       echo mysqli_error($con);
       echo  ("not inserted");
   }
   else
   {
       
     
      
        echo "<script> alert('Issue sent for receipt'); window.location='issues.php' </script>";
        header("Location:../stores/index.php?issues=success");
      


    }



}

?>