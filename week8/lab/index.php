        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
            "http://www.w3.org/TR/xhtml1/DTDxhtml-transitional.dtd">
        
         
         <?php
         
          // create or update database
         $id = filter_input(INPUT_POST, 'id');
         $email = filter_input(INPUT_POST, 'email');
         $password = filter_input(INPUT_POST, 'password');
         
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

        $dbs = $db->prepare('update signup set email=:email, password=:password where id = :id');



        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $password, PDO::PARAM_STR);
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
             echo '<h1> user ', $id,' was updated</h1>';
        } else {
             echo '<h1> user ', $id,' was <strong>NOT</strong> updated</h1>';
             print_r($db->errorInfo());
        }
  
                
                
         if (isset($_POST['action'])){
             $action = $_POST['action'];
         }else{
             $action = 'start_app';
         }
         
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
         
         
         include 'display_results.php';
         
         ?>      
             
       