        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
            "http://www.w3.org/TR/xhtml1/DTDxhtml-transitional.dtd">
        
         
         <?php
         
          // insert into database
         
         $email = filter_input(INPUT_POST, 'email');
         $password = filter_input(INPUT_POST, 'password');
         
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

        $dbs = $db->prepare('insert into signup set email=:email, password=:password');

        
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $password, PDO::PARAM_STR);
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
             echo '<h1> user was inserted</h1>';
        } else {
             echo '<h1> user was <strong>NOT</strong> inserted</h1>';
             print_r($db->errorInfo());
        }
  
                
         if (isset($_POST['action'])){
             $action = $_POST['action'];
         }else{
             $action = 'start_app';
         }
         
         
         //start page with empty textboxes or process the data
         switch ($action){
             case 'statr_app':
                 $email = '';
                 $password = '';
                 $message = 'Enter email and password';
                 break;
             case 'process_data':                 
                 $email = trim($email);                 
                 $message = '';
                        
                 
                 // validate email
                 if (empty($email)){
                     $message .= 'Please enter an email address';
                 }
                 
                 $check_email = strpos($email, '.');
                 if ($check_email === false){
                     $message .= 'Email needs a period to be valid';
                 }
                 
                 $check_email = strpos($email, '@');
                 if ($check_email === false){
                     $message = 'Email needs an @ symbol to be valid';
                     }else {
                         $message .= 'valid email  ';
                     }
                     
                     
                // validate the password
                $check_pass = strlen($password);
                if ($check_pass < 4){
                    $message .= 'Password needs to be at least 4 characters';                    
                }else{
                    $message .= 'valid password';
                }
                
                $password = sha1($password); 
                break;
                         
                     
                 
         }
         
         var_dump($email);
         
         include 'display_results.php';
         
         ?>      
             
       