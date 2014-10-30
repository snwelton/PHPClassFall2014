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
        
        $id = filter_input(INPUT_GET, 'id');    //creates a variable that you can grab        
    
        
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", ""); //connection to the database
        
        $dbs = $db->prepare('select * from users where id = :id');
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        
        
        
         if ( $dbs->execute() && $dbs->rowCount() > 0 ){
            $results = $dbs->fetch(PDO::FETCH_ASSOC);        
        ?>
        <form action="processuser.php" method="post">
             <input type="hidden" name="id" value="<?php echo $results['id'] ?>"/><br/>
            Email: <input type="text" name="email" value="<?php echo $results['email'] ?>"/><br/>
            Full name: <input type="text" name="fullname" value="<?php echo $results['fullname'] ?>"/><br/>
            Phone: <input type="text" name="phone" value="<?php echo $results['phone'] ?>"/><br/>
            zip: <input type="text" name="zip" value="<?php echo $results['zip'] ?>"/><br/>
            <input type="submit" value="update" />           
        </form>               
        
        <?php
        
             
                
                
         }
       
        ?>
        
    
        <a href="viewpage.php">View Users</a>
    </body>
</html>