<?php

?>

<!DOCTYPE html>
    <html>
        <head>
             <title> Item to be Issued </title>
             <a href="login.php">
        <IMG STYLE="position:topleft; TOP:100px; LEFT:170px; WIDTH:200px; HEIGHT:130px" SRC="rmu.JFIF">
</a>
             <style>
                   .container{
                       padding-left: 40%;
                       padding-top: 4%;
                       padding-right: 37%;
                   }
                   body{
                    background: linear-gradient(135deg, #71b7e6, #9b59b6);
                   } 
             </style>
        </head>
        <div class="container">
        <body>
        
        <form method="POST" action ='issues.inc.php' name ="issues">
        <h3> ITEM TO BE ISSUED </h3>
        <hr/>
        <br/><br/>
        Amount: <input placeholder ="Enter Amount..." name="Amount" type="text" required>
        <br/><br/>
         Issued by: <input placeholder ="Issued by..."name="Issued_by" type="text" required>
        <br/><br/>
        Issued to:  <select name="Issued_To">
                    <option value="ICT Department">ICT Department</option>
                    <option value="Nautical Science Department">Nautical Science Department</option>
                    <option value="Electrical Department">Electrical Department</option>
                    <option value="Transport Department">Transport Department</option>
                    <option value="Marine Department">Marine Department</option>
                    </select> <required>
        <br/><br/>
        Approval check: <select name="Approval_check"><option value="yes">yes</option><option value="No">No</option></select><required>    
        <br/><br/>
        <button type ="submit" name ="issues"> Submit </button>
        <br/><br/>

        </form>
        </body>
        </div>
        
    </html>