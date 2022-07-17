<?php
session_start();
$username=$_SESSION['username'];

include_once 'datacon.php';

if(mysqli_connect_errno())
{
    echo("Error");
}

?>

<?php

?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Change Password</title>
            <h3>change your password here!</h2>
            <style>
                    .container{
                        padding-left: 39%;
                        padding-top:15%;
                        padding-right:41%;
                    }
                    body{
                        background: linear-gradient(135deg, #71b7e6, #9b59b6);
                    }
            </style>
        </head>
    <div class="container">
    <body>
        <form method="POST" action="changePassword.php" name="changePassword">
            <h4>CHANGE PASSWORD!</h4>
            <hr />
            <br /><br />
            Old Password: <input placeholder="Enter Old Password..." name="old_user_pwd" type="password" required>
            <br /><br />
            New Password: <input placeholder="Enter New Password..." name="new_user_pwd" type="password" required>
            <br /><br />
            <button type="submit" name="change">Change</button>


        </form>

<?php
    if(isset($_POST['change']))
    {
        $old_user_pwd= mysqli_real_escape_string($conn, $_POST['old_user_pwd']);
        $new_user_pwd= mysqli_real_escape_string($conn,$_POST['new_user_pwd']);

                $query="SELECT user_password FROM login WHERE username='$username' ";
                $result=mysqli_query($conn, $query);
                $row=mysqli_fetch_array($result);
                if(!$result)
                {
                    echo("Not Selected");
                }
                else
                {
                    $dehashed_password=password_verify($old_user_pwd, $row['user_password']);
                    if($dehashed_password== false)
                    {
                        echo "<script> alert('Wrong Credentials'); window.location='changePassword.php' </script>";  
                    }
                    else
                    {
                        $hashed_password=password_hash($new_user_pwd, PASSWORD_DEFAULT);
                        $query="UPDATE login SET user_password='$hashed_password' WHERE username='$username' ";
                        $result=mysqli_query($conn, $query);
                        if(!$result)
                        {
                            echo("Not Updated");
                        }
                        else
                        {
                            echo "<script> alert('Password Change Successful. Login with username:$username and password:$new_user_pwd'); window.location='login.php' </script>";
                        }
                    }
                }
            
        

    }

?>
    </body>  
    </div>  

    </html>