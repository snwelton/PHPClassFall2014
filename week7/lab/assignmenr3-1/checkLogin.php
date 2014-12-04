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
        $email = filter_input(INPUT_GET, 'email');  
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('select * from users where email = :email');
        $dbs->bindParam(':email', $email, PDO::PARAM_INT);
        
        if(!empty($_POST)){
            if($_GET['email'] === ':email'){
                $message .= ' "\n"password was found in database';
            }else{
                $message .= ' "\n"password was NOT found in database';
            }            
        }
        
        ?>
        <a href="index.php">Log in</a>
        
    </body>
</html>
