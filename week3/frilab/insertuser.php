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
        
        
        $email = filter_input(INPUT_POST, 'email');
        $fullname = filter_input(INPUT_POST, 'fullname');
        $phone = filter_input(INPUT_POST, 'phone');
        $zip = filter_input(INPUT_POST, 'zip');
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('insert into users set fullname=:fullname, email=:email, phone=:phone, zip=:zip');
        
        
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
        $dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
        
                       
        
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
             echo '<h1> user was inserted</h1>';
        } else {
             echo '<h1> user was <strong>NOT</strong> inserted</h1>';
             print_r($db->errorInfo());
        }
  
        //var_dump($email);
        ?>
        
        <a href="viewpage.php">View Users</a>
    </body>
</html>