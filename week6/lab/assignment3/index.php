<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
        
    </head>
    <body>
        
        
        
         
         <?php
         $email = filter_input(INPUT_POST,'email');
         $password= filter_input(INPUT_POST,'password');
         
         $passwordSafe = sha1($password);
         
          if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
                echo '<p>this email is valid</p>';
            } else {
                echo '<p>this email is <strong>NOT</strong> valid</p>';
            }
       
         
         include 'string_tester.php';
         
         ?>      
             
        
    </body>
</html>
