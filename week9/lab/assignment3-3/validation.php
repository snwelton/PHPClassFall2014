<?php

class validatorClass {

     public function checkEmailTaken($email){
            
            $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
            $dbs = $db->prepare('select email from signup where email = :email');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);  
            
        
            if ($dbs->execute() && $dbs->rowCount() > 0 ){
                return true;
            }else{
                return false;
            }
        }    
        
        
    public function checkEmailExist($email){
             $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
            $dbs = $db->prepare('select email from signup where email = :email');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);  
            
            if ($dbs->execute() && $dbs->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }
        
    

}
?>