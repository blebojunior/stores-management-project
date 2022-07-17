<?php
session_start();

include_once 'datacon.php';

if(mysqli_connect_errno())
{
    echo("Error");
}

if(isset($_POST['login']))
{
    $username= mysqli_real_escape_string($con, $_POST['username']);
    $user_pwd= mysqli_real_escape_string($con,$_POST['user_pwd']);

    $query="SELECT username FROM login WHERE username='$username'";
    $result=mysqli_query($con, $query);
    if(!$result)
    {
        echo("Not Selected");
    }
    else
    {
        if(mysqli_fetch_assoc($result) <1 )
        {
            echo "<script> alert('Duplicated Credentials'); window.location='login.php' </script>";
        }
        else
        {
            $query="SELECT user_password FROM login WHERE username='$username'";
            $result=mysqli_query($con, $query);
            $row=mysqli_fetch_array($result);
            if(!$result)
            {
                echo("Not Selected");
            }
            else
            {
                $dehashed_password=password_verify($user_pwd, $row['user_password']);
                if($dehashed_password== false)
                {
                    echo "<script> alert('Wrong Credentials'); window.location='login.php' </script>";  
                }
                elseif($dehashed_password== true)
                {
                    $username=$_POST['username'];
                    $_SESSION['username']=$username;
                    header("Location:../stores/items.php?login=success");
                    exit();
                }
            }
        }
        
        
    }

}





?>