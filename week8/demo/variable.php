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
        <?php
        // put your code here
        
        $my_var = 'hello';
        
        //sessions allow data to be stored on the server
        //cookies save data on the clients device where it can be edited
        
        session_start();    //starts a session
        
        $_SESSION['loggedin'] = false; 
        
        session_regenerate_id();    //prevents id from being stolen by regenerating it at every page
        
        
        
        ?>
    </body>
</html>
