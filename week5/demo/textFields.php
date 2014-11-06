
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $text = filter_input(INPUT_POST, 'textfield');
        $password = filter_input(INPUT_POST, 'passwordfield');
        $hidden = filter_input(INPUT_POST, 'hiddenfield');
        
        
        
        ?>
        
        <form action="#" method="post">
            
            <label>Text</label>
            <input type="text" name="textfield" value="<?php echo $text  ?>"/><br />
            
            <label>Text</label>
            <input type="password" name="passwordfield" value="<?php echo $password  ?>"/><br />
            
            <input type="hidden" name="hiddenfield" value="<?php echo $hidden  ?>"/><br />
            
            <input type="submit" value="submit" />
            
            
        </form>
    </body>
</html>
