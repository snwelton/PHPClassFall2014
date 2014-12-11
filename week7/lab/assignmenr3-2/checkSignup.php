<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $email = filter_input(INPUT_POST, 'email'); 
        $password = filter_input(INPUT_POST, 'password'); 
        var_dump($_POST);
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
       $check_pass = strlen($password);
       if ($check_pass < 4){
           $error_message .= 'Password needs to be at least 4 characters';                    
       }
       
       $password = sha1($password); 
       
       // if the error message is empty then send data to datebase
       if($error_message == ''){
           
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $dbs = $db->prepare('insert into signup set email = :email, password = :password');
        
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);        
        $dbs->bindParam(':password', $password, PDO::PARAM_STR);
        
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
             echo '<h1> user was inserted</h1>';
            } else {
             echo '<h1> user was <strong>NOT</strong> inserted</h1>';  
             var_dump($db->errorInfo());
            }
         
           
       }
       
       //check to see if the user is logged in
       session_start();
         
         if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
               echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
            } else {
                 $error_message .=  "Please log in first to see this page.";
            }
        
            
            //checking if email exits
            $checkEmail = "SELECT email FROM lf_clients WHERE email = " .$_POST['email'];
            
            if ($checkEmail > 0){
                echo 'Email exists';                              
            }else{
                echo 'Email does not exist';                
            }
            
            
                
            session_destroy();
            
                include './index.php';
        ?>
    </body>
</html>
