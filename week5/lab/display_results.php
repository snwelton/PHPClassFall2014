<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST,'password');
    $phone = filter_input(INPUT_POST,'phone');
    $heard_from = filter_input(INPUT_POST,'heard_from');
    $wants_updates = filter_input(INPUT_POST,'wants_updates');
    $contact_via = filter_input(INPUT_POST,'contact_via');
    $comments = filter_input(INPUT_POST,'comments');
    
    $comments = nl2br($comments);
         
    //echo nl2br($comments);     
         
    // get the rest of the data for the form

    // for the heard_from radio buttons,
    // display a value of 'Unknown' if the user doesn't select a radio button

    // for the wants_updates check box,
    // display a value of 'Yes' or 'No'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br />

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br />

        <label>Heard From:</label>
        <span><?php 
            if ($heard_from === 'checked' ) {
                echo htmlspecialchars($heard_from);
            }else{
                 echo "Unknown";
            }
            ?></span><br />

        <label>Send Updates:</label>
        <span><?php 
            if ($wants_updates === 'checked'){
                echo "yes";                
            }else{
                echo "no";
            }
        ?></span><br />

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br /><br />

        <span>Comments:</span><br />
        <span><?php echo htmlspecialchars($comments); ?></span><br />
        
        <p>&nbsp;</p>
        <a href="index.php?">Back</a>
    </div>
</body>
</html>