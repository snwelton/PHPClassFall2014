<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php
        
        if(!isset($_SESSION))
              session_start ();
        if(!isset($_SESSION['loggedin']))
          header ('Location: login.php');
        
        include './header.php';
        include './validation.php';
        
        ?>
    </body>
</html>
