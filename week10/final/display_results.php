<!DOCTYPE html>
<!-- Sara Welton -->
<?php
               
        $email = filter_input(INPUT_POST, 'email'); 
        $phone = filter_input(INPUT_POST, 'phone');        
        $error_message = '';                       
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('insert into signup set email = :email, password = :password');
        
        // validate email
        if (empty($email)){
            $error_message .= 'Please enter an email address';
        }

        $check_email = strpos($email, '.');
        if ($check_email === false){
            $error_message .= 'Email needs a period to be valid';
        }

        $check_email = strpos($email, '@');
        if ($check_email === false){
            $error_message .= 'Email needs an @ symbol to be valid';
            }

       // validate the password
       $check_phone = strlen($email);
       if ($check_phone < 10 || $check_phone > 15){
           $error_message .= 'Phone needs to be at least 10 characters';                    
       }
       
       
       
    
      
         
          
           
       
        ?>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span></span><br />

            <label>Heard From:</label>
            <span></span><br />

            <label>Contact Via:</label>
            <span></span><br /><br />

            <span>Comments:</span><br />
            <span></span><br />

        </div>
        
    </body>
</html>