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
        <?php
        // put your code here
        print_r($_POST);
        
        $carSelected = filter_input(INPUT_POST, 'cars');
        
        if (!empty($_POST)){
            $carSelected = $_POST['cars'];
        }
        
        
        ?>
        
        <form action="#" method="post">
            
            1.Ford<input type="radio" name="cars" value="Ford"
                         <?php 
                         if ($carSelected === 'Ford' )
                         {
                           echo 'checked="checked"';                        
                         }
                         ?>/><br />
            2.Chevy<input type="radio" name="cars" value="Chevy" 
                          <?php 
                         if ($carSelected === 'Chevy' )
                         {
                           echo 'checked="checked"';                        
                         }
                         ?>/><br />
            3.Honda<input type="radio" name="cars" value="Honda" 
                           <?php 
                         if ($carSelected === 'Honda' )
                         {
                           echo 'checked="checked"';                        
                         }
                         ?>/><br />
            
            <input type="submit" value="submit" />
            
            
        </form>
    </body>
</html>
