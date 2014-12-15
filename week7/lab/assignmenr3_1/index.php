
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
          <div id="content">
        <h1>Sign Up</h1>
        <form action="checkSignup.php" method="post">   
            
        <label>Email</label>
        <input type="text" name="email"           value=""/>
        <br />

        <label>Password</label>
        <input type="text" name="password"             value=""/>
        <br />

       
        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />
        
        </form>

        <h2>Message:</h2>
        
        <p><?php
        
        if(!empty($error_message)){
            echo nl2br(htmlspecialchars($error_message)); 
        }
        
        ?></p>
        
        
    </body>
</html>
