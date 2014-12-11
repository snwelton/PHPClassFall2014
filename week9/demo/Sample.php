<?php


class Sample {
        
    private $db = null;
    public function getDb() {
        return $this->db;
    }
    public function setDb($db) {
        if ( !is_null($db) ) {
            $this->db = $db;            
            return true;
        }
        return false;
    }
        /**
    * Will Echo out "say something"
    *    
    * @return null
    */
    public function say() {
        echo 'say something';
    }
    
    
}