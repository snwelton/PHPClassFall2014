<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $my_string1 = 'string1';
        $my_string2 = "single $my_string1";
        $my_string3 = 'single '.$my_string1;
        $my_string4 = 'single ${my_string1}';
        $my_string5 = "single ${my_string1}";
        
        echo $my_string4;
        
        echo '<br />', $my_string5;
        
        $dbPass ='a94a8fe5ccb19ba61c4c0873d391e987982fbbd3';
        
        $password = 'test';
        
        echo '<br />';
        echo sha1($password); // creates encription
        
        echo '<br />';
                
        if (sha1($password) === $dbPass) {
            echo 'correct password';
        }       
        
        echo '<br />';
        
        echo substr($dbPass, 20);   //pulls out part of a string
        
        echo '<br />';
        
        $email = 'test@test.com';
        
        echo strpos($email, '@');
                
        
     
        ?>
    </body>
</html>
