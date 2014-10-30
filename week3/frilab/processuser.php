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
        
        $id = filter_input(INPUT_POST, 'id');
        $email = filter_input(INPUT_POST, 'email');
        $fullname = filter_input(INPUT_POST, 'fullname');
        $phone = filter_input(INPUT_POST, 'phone');
        $zip = filter_input(INPUT_POST, 'zip');
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('update users set fullname=:fullname, email=:email, phone=:phone, zip=:zip where id = :id');
        
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
        $dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
        
                       
        
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
             echo '<h1> user ', $id,' was updated</h1>';
        } else {
             echo '<h1> user ', $id,' was <strong>NOT</strong> updated</h1>';
             print_r($db->errorInfo());
        }
  
        
        ?>
        
        <a href="viewpage.php">View Users</a>
    </body>
</html>