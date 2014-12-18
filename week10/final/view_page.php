<!DOCTYPE html>
<!-- Sara Welton -->

<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
           <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo htmlspecialchars($email); ?></span><br />

            <label>Heard From:</label>
            <span><?php 
            if ($heard_from === 'checked' ) {
                echo htmlspecialchars($heard_from);
            }else{
                 echo "Unknown";
            }
            ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo htmlspecialchars($contact_via); ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo htmlspecialchars($comments); ?></span><br />
               <br /><br />
            <a href="index.php?">Back</a>
        </div>
        
    </body>
</html>



