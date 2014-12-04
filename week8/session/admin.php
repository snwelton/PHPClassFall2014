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
        <h1> Admin Page </h1>
        <a href="?logout=true">Logout</a>
        <?php
        
        session_start();
        
        if(( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)){
            header('location: session.php');
        }
        
        
        if(!empty($_GET)){
            if($_GET['logout'] === 'true'){
                $_SESSION['loggegin'] = false;
                header('location: session.php');
            }
        }
        
        ?>
    </body>
</html>
