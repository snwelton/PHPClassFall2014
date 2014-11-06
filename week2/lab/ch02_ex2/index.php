<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Future Value Calculator</h1>
    <?php 
        $investment = filter_input(INPUT_POST,'investment');
        $interest_rate = filter_input(INPUT_POST,'interest_rate');
        $years = filter_input(INPUT_POST,'years');
        
         $today = date("m-d-Y H:i:s");
    
        if (empty($_POST['investment'])){
          $investment = mt_rand(10, 200);
        }

        if (empty($_POST['interest_rate'])){
            $interest_rate = mt_rand(1, 14);
        }

        if (empty($_POST['years'])){
            $years = mt_rand(1, 10);
        }
    
        if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        
    <?php } 
        
    ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>"/><br />

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>"/><br />

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

        <?php
        echo "This calculation was done on ";
        echo $today;
                
        ?>
    </form>
            
    </div>
</body>
</html>