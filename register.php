<?php

?>

<!DOCTYPE html>
    <html>
        <head>
             <title><h3> Register Here</h3></title>
             <h1>WELCOME TO THE STORES PAGE!</h1>
             <a href="login.php">
        <IMG STYLE="position:topleft; TOP:90px; LEFT:170px; WIDTH:300px; HEIGHT:259px" SRC="rmu.JFIF">
</a>
        
        </head>
        <div class="header">
        <body>

        <style>
body {
  background-image: url('marine6.JPEG');opacity: 2.0;
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
    <div class=".succWrap">
    <style>
                   .container{
                       padding-left: 35%;
                       padding-top: 50%;
                       padding-right: 20%;
                       
                   }

                   .succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

                   body{
  height: 70vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
             </style>
            
        <h1>WELCOME TO THE STORES
        PLEASE REGISTER BELOW</h1>
        <hr/>
        <form method="POST" action ='register.inc.php' name ="login">
        <h2> REGISTER NOW</h2>
        <hr/>
        <br/><br/>
        <h5>First name:</h5> <input placeholder ="Enter First name..." name= "fname" required>
    
        <h5>Last Name:</h5> <input placeholder ="Enter Last name..." name="lname" required>
    
        <h5>Email:</h5> <input placeholder ="Enter Email..." name="email" required>
    
        <h5>Username:</h5> <input placeholder ="Enter Username..." name="username" required>
    
        <h5>Departmaent:</h5> <select name="dpmt">
                    <option value="ICT Department">ICT Department</option>
                    <option value="Nautical Science Department">Nautical Science Department</option>
                    <option value="Electrical Department">Electrical Department</option>
                    <option value="Transport Department">Transport Department</option>
                    <option value="Marine Department">Marine Department</option>
                    </select> <required>
    
        <h5>Phone number:</h5> <input placeholder ="Enter Phone no..." name="phone_no" required>
        <br/><br/>
        <button type ="submit" name ="register"> Register </button>
        <br/><br/>
        Registered? <a href ="login.php" target="blank"> Login here </a>
        <br/><br/>
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