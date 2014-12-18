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
        $heard_from = filter_input(INPUT_POST,'heard_from');
        $contact_via = filter_input(INPUT_POST,'contact_via');
        $comments = filter_input(INPUT_POST,'comments');
    
        $comments = nl2br($comments);
        
        $error_message = '';  
        
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('insert into account set email = :email, phone = :phone, heard_from = :heard_from, contact_via = :contact_via, comments = :comments  ');
        
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);        
        $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
        $dbs->bindParam(':heard_from', $heard_from, PDO::PARAM_STR);
        $dbs->bindParam(':contact_via', $contact, PDO::PARAM_STR);
        $dbs->bindParam(':comments', $comments, PDO::PARAM_STR);
   
        
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
       
       if($error_message == ''){
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('insert into signup set email = :email, password = :password');
        
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);        
        $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
        $dbs->bindParam(':heard_from', $heard_from, PDO::PARAM_STR);
        $dbs->bindParam(':contact_via', $contact, PDO::PARAM_STR);
        $dbs->bindParam(':comments', $comments, PDO::PARAM_STR); 
       }else{
        
          include './index.php';
       }
       ?>
        
        <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo htmlspecialchars($email); ?></span><br />

            <label>Heard From:</label>
            <span><?php 
            if ($heard_from === 'checked' ) {
                echo htmlspecialchars($heard_from);
            }else{
                 echo "Unknown";
            }
            ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo htmlspecialchars($contact_via); ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo htmlspecialchars($comments); ?></span><br />
               <br /><br />
            <a href="index.php?">Back</a>
        <a href="viewpage.php">View Users</a>
        </div>
        
    </body>
</html>



