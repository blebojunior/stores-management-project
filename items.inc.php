<?php

session_start();    

include_once 'datacon.php';

if(mysqli_connect_errno())
{
    echo("error");
}
if(isset($_POST['items']))
{
   $item_name= mysqli_real_escape_string($con,$_POST['item_name']);
   $item_quantity= mysqli_real_escape_string($con,$_POST['item_quantity']);
   $category= mysqli_real_escape_string($con,$_POST['category']);
   $item_condition= mysqli_real_escape_string($con,$_POST['item_condition']);
   $item_weight= mysqli_real_escape_string($con,$_POST['item_weight']);
   
   $query= "INSERT INTO items (item_name, item_quantity, category,item_condition, item_weight)
   VALUES ('$item_name', '$item_quantity', '$category', '$item_condition', '$item_weight')";
   $result=mysqli_query($con, $query);
   if (!$result)
   {
       echo mysqli_error($con);
       echo  ("not inserted");
   }
   else
   {
       
     
      
        echo "<script> alert('almost there'); window.location='items.php' </script>";
        header("Location:../stores/issues.php?items=success");
      


    }



}

?>