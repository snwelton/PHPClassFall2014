<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $today = date('l , F d, Y');
        $time = time()-10000;
        
        echo $today;
        echo '<br />';
        
        $dat = new DateTime();
        $dat->setTimestamp($time);
        
        echo date('m-d-y');
        
        ?>
    </body>
</html>
