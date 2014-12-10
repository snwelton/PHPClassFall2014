<?php


class Sample {
    
    private $db = 'database';
    
    //get and set allows people to only access a database not delete
    function getDb() {
        return $this->db;
    }

    function setDb($db) {
        $this->db = $db;
    }

        
    /**
     * will echo out "say something"
     * 
     * @return null
     */
   
    public function say() {
        echo 'say something';
    }
    
    
}
