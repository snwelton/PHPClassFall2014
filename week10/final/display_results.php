<!DOCTYPE html>
<!-- Sara Welton -->

<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php        
        
        $email = filter_input(INPUT_POST, 'email'); 
        $phone = filter_input(INPUT_POST, 'phone'); 
        $heard = filter_input(INPUT_POST,'heard');
        $contact = filter_input(INPUT_POST,'contact');
        $comments = filter_input(INPUT_POST,'comments');
    
        $comments = nl2br($comments);
        
        $error_message = '';  
        
        
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
       $check_phone = strlen($phone);
       if ($check_phone < 7 ){
           $error_message .= 'Phone needs to be greater than 7 characters';                    
       }
       
       if(!$error_message == ''){
           
           include './index.php';
       }else{
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('insert into account set email = :email, phone=:phone, heard=:heard, contact=:contact, comments=:comments ');
        
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);        
        $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
        $dbs->bindParam(':heard', $heard, PDO::PARAM_STR);
        $dbs->bindParam(':contact', $contact, PDO::PARAM_STR);
        $dbs->bindParam(':comments', $comments, PDO::PARAM_STR); 
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
             $error_message = '';
            } else {
             $error_message .= 'Inpur error';  
            }
         
               
       ?>
        
        <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php print($email); ?></span><br />
            
            <label>Phone Number:</label>
            <span><?php print($phone); ?></span><br />

            <label>Heard From:</label>
            <span><?php 
            if ($heard === 'Search Engine' ||  $heard === 'Friend' || $heard === 'Other') {
                echo htmlspecialchars($heard);
            }else{
                 $error_message .= 'Error, please tell us how you heard about us.';
            }
            ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo htmlspecialchars($contact); ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo htmlspecialchars($comments); ?></span><br />
               <br /><br />
            <a href="index.php?">Back</a><br />
        <a href="view_page.php">View Users</a>
        
        </div>
        
    </body>
</html>

<?php 
       }
       ?>

