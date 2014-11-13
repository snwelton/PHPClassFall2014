<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];       
        

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        if ( empty($name) ) {
           $message .= '<p>Name is a required field.</p>'; }
           else{
            empty($message);}
        
        // 2. display the name with only the first letter capitalized
           $nameParts = strpos($name, ' ');
           if ($nameParts === false) {
               $message .= '<p>Name needs a first and last.</p>';
           }else{
               $firstName = ucfirst(strtolower(substr($name,0, $nameParts)));
           }
           
           
           //$firstName = ucfirst(strtolower($nameParts));

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        if ( empty($email) ) {
            $message .= '<p>Email is a required field.</p>'; }
            else{
                empty($message);
            }
        
        // 2. make sure the email address has at least one @ sign and one dot character
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
                $message .= '<p>this email is <strong>NOT</strong> valid</p>';
            } else{
                empty($message);
            }
        

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
            
            
     if ( empty($phone) ) {
        $message .= '<p>Phone is a required field.</p>'; }
     if ( !is_numeric($phone) )  {
        $message .= '<p>Phone must be a valid number.</p>'; }
     if ( $phone < 8 ) {
        $message .= '<p>Phone must have at lesast 7 digits.</p>'; }
        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if (ctype_digit($phone) && strlen($phone) == 10) {            
            $phone = substr($phone,0,3).'-'.substr($phone,3,3).'-'.substr($phone,6,4); 
        }if (ctype_digit($phone) && strlen($phone) == 7) {            
            $phone = substr($phone,0,3).'-'.substr($phone,3,4); 
        }else{
            empty($message);}
            

        /*************************************************
         * Display the validation message
         ************************************************/
        if (empty($message)){
        $message = "Hello ".$firstName.","."\n". "\n".               
                   "Thank you for entering this data:"."\n". "\n".
                   "Name: ".$name."\n". 
                   "Email: ".$email."\n". 
                   "Phone: ".$phone;
        }

        break;
}
include 'string_tester.php';
?>