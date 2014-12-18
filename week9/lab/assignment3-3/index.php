
<html xmlns="http://www.org/1999/xhtml">
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body
        <?php 
        include "header.php";
        $message = 'Enter your email and passwor';
        $email = '';
        $password = '';
        ?>



<html xmlns="http://www.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
          <div id="content">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post">   
            
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
