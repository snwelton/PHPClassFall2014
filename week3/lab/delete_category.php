<?php
require_once('database.php');
$category_name = $_POST['categoryName'];
$sql = "delete from categories set categoryName='$category_name'";
                        
$db->exec($sql);
print_r($db->errorInfo());
include('index.php');
?>