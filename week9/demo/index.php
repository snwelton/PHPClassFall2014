<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        // accessing the class
        include './Sample.php';
        
        //create a variable for the class
        $sample = new Sample();
        
        //the arrow allows you to access a public function
        $sample ->say();
        
        $sample->db;
        
        ?>
    </body>
</html>
