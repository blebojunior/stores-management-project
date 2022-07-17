<?php

?>

<!DOCTYPE html>
    <html>
        <head>
             <title> Input Items Needed </title>

             <a href="default.asp">
        <IMG STYLE="position:topleft; TOP:100px; LEFT:170px; WIDTH:200px; HEIGHT:130px" SRC="rmu.JFIF">
</a>

        </head>
        <div class="header">
        <body>
        
        <style>
body {
  background-image: url('marine2.JPEG');opacity: 2.0;
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
                       padding-top: -1%;
                      padding-right: 50%;
                   }
                   body {background-color: aqua; opacity:1.0;}
             </style>
        <form method="POST" action ='items.inc.php' name ="items">
        <h4> WHAT DO YOU NEED? </h4>
        <hr/>
        <br/><br/>
        <h5 style="color:white">Item name:</h5> <input placeholder ="Enter Item name..." name="item_name" type="text" required>
        <h5 style="color:white">Quantity:</h5> <input placeholder ="Enter  quantity..." name="item_quantity" type="text" required>
        <h5 style="color:white">category:</h5> <input placeholder ="Enter category..." name="category" type="text" required>
        <h5 style="color:white">Item condition:</h5>  <select name="item_condition"><option value="New">New</option><option value="Old">Old</option></select><required>           
        <h5 style="color:white">weight:</h5> <input placeholder ="Enter weight..." name="item_weight" required>
        <br/><br/>
        <button type ="submit" name ="items">Proceed to issue </button>
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