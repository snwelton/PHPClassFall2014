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
    </head>
    <body>
        
        <form action="#" name="mainform" method="post">            
            Passcode: <input type="password" name="passcode" value="" />            
            <input type="submit" value="submit" />
        </form>
        
        <?php
        // put your code here
        
        session_start();
        
        if (!isset($_SESSION['loggedin'])){
            $_SESSION['loggedin'] === false;
        }
       
               
        if(!empty($_POST)){                    
           if($_POST['passcode'] === 'test'){
               header('Location: admin.php');
           }else{
               $_SESSION['loggedin'] === false;
           }
               
        }
        
       
        ?>
    </body>
</html>
