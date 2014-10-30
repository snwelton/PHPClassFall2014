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
            
        $hi = 'hey';
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        var_dump($db);  // use to output variables to the page to check what gets passed to them
        
        ?>
    </body>
</html>
