<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="insertuser.php" method="post">             
            Email: <input type="text" name="email" value=""/><br/>
            Full name: <input type="text" name="fullname" value=""/><br/>
            Phone: <input type="text" name="phone" value=""/><br/>
            zip: <input type="text" name="zip" value=""/><br/>
            <input type="submit" value="insert" />           
        </form>
        
        
        <a href="viewpage.php">View Users</a>
    </body>
</html>
