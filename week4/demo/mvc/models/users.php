<?php

function read_users(){
    global $db;
    $results =array();
    $dbs = $db->prepare('select * from users');
     
    if ($dbs->execute() && $dbs->rowcount() > 0){
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
    
    
}


function read_user($id){
    global $db;
    $results =array();
    
    $dbs = $db->prepare('select * from users where id = :id');
    $dbs->bindParam(':id', $id, PDO::PARAM_INT);
     
    if ($dbs->execute() && $dbs->rowcount() > 0){
        $results = $dbs->fetch(PDO::FETCH_ASSOC);
    }
    return $results;
    
    
}




