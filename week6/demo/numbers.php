<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $int = 12;
        $float = 14.83;
        
        echo $int;
        echo '<br />';
        echo $float;
        echo '<br />';
        echo pi($float);
        echo '<br />';
        
        $bool = true;
        $str = 'hello';
        echo '<br />';
        
        echo intval($bool); //intval strips the decimal and everything after it
        echo '<br />';
        echo intval($float);
        echo '<br />';
        echo intval($int);
        
        
        ?>
    </body>
</html>
