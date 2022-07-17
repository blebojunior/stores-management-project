<?php

?>

<!DOCTYPE html>
    <html>
        <head>
             <title> Login Here</title>
             <a href="login.php">
        <IMG STYLE="position:topleft; TOP:100px; LEFT:170px; WIDTH:200px; HEIGHT:130px" SRC="rmu.JFIF">
</a>

        </head>
        <div class="header">
        <body>
        
        <style>
body {
  background-image: url('marine5.JPEG');opacity: 2.0;
}
</style>

        <table cellpadding="25pxs">
		<tr id="one">
			<h1><td>home</td></h1>
			<td>images</td>
			<td>about</td>
			<td>contact</td>
		</tr>
	</table>
    <div class="container">
    <style>
                   .container{
                       padding-left: 35%;
                       padding-top: 1%;
                       padding-right: 42%;
                   }
                   body {background-color: aqua; opacity:1.0;}
             </style>

        <form method="POST" action ='login.inc.php' name ="login">
        <h2> LOGIN TO HOMEPAGE!</h2>
        <hr/>
        <br/><br/>
        Username: <input placeholder ="Enter Username..." name="username" type="text"required>
        <br/><br/>
        user_Password: <input placeholder ="Enter Password..." name="user_pwd" type="password"required>
        <br/><br/>
        <button type ="submit" name ="login"> Login </button>
        <br/><br/>
        <h4 style="color:white">Not Registered?</h4> <a href ="register.php"> </h4 style="color:yellow">Register here</h4> </a>
        <h4>Need a new password?</h4> <a href ="changePassword.php"> </h4 style="color:yellow">click here</h4> </a>

        </form>
        </body>
        </div>
        
        <style>
footer {
  text-align: left;
  padding: 1px;
  color: white;
}
footer {
  background-image: ('marine2.JPEG');opacity: 2.0;
}
</style>
        <footer>
  <p>Author: GROUP 2</p>
  <p><a href="mailto:bkweyatey@gmail.com">send us mail now </a></p>
  <p>Copyright 2021-2025. All Rights Reserved</p>
</footer>

    </html>