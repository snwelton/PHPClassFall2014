<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $email = 'test@test.com';
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) != FALSE){
                echo '<p>This email is valid</p>';
        }else{
            echo "<p>this email is <strong>NOT</strong> valid</p>";
        }
             
        echo filter_var($email, FILTER_VALIDATE_EMAIL);
        
        
        ?>
    </body>
</html>
