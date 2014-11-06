<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <?php
    $product_description = filter_input(INPUT_POST,'product_description');
    $list_price = filter_input(INPUT_POST,'list_price');
    $discount_percent = filter_input(INPUT_POST,'discount_percent');
    
    if (empty($_POST['discount_percent'])){
        $discount_percent = mt_rand(0, 15);
    }
    
    
    
    $today = date("m-d-Y H:i:s");  
    
    ?>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form action="display_discount.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description" value="<?php echo "product description"; ?>"/><br />

                <label>List Price:</label>
                <input type="text" name="list_price" value="<?php echo $list_price; ?>"/><br />

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent" value="<?php echo $discount_percent; ?>"/>%<br />
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount" /><br />
            </div>
            
        </form>
        <br />
        <?php
           if(!empty($error_message)){
               echo $error_message;
           }
        ?><br /><br /><?php
            echo $today;
            
        ?>
    </div>
</body>
</html>