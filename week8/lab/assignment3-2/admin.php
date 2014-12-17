<!DOCTYPE html>
<?php
if(!isset($_SESSION))
    session_start ();
if(!isset($_SESSION['loggedin']))
    header ('Location: login.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php
        
        include './header.php';
        
        ?>
    </body>
</html>
