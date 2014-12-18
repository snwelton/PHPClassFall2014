<!DOCTYPE html>
<!-- Sara Welton -->
<?php        
        
        $email = filter_input(INPUT_POST, 'email'); 
        $phone = filter_input(INPUT_POST, 'phone'); 
        $contact = filter_input(INPUT_POST,'contact');
        $comments = filter_input(INPUT_POST,'comments');
        $radioSelected = filter_input(INPUT_POST, 'heard');
        $checkedText = 'checked="checked"'; 
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
         <div id="content">
            <h1>Account Sign Up</h1>
            <form action="display_results.php" method="post">

            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?php echo $email; ?>" class="textbox"/>
                <br />

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>" class="textbox"/>
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard" value="Search Engine" 
                        <?php
                         if ( $radioSelected === 'Search Engine') {
                         echo $checkedText;
                         }               
                        ?>/>
                Search engine<br />
                <input type="radio" name="heard" value="Friend" 
                        <?php
                         if ( $radioSelected === 'Friend') {
                         echo $checkedText;
                         }               
                        ?>/>
                Word of mouth<br />
                <input type=radio name="heard" value="Other" 
                       <?php
                         if ( $radioSelected === 'Other') {
                         echo $checkedText;
                         }               
                        ?>/>
                Other<br />

                <p>Contact via:</p>
                <select name="contact">
                        <option value="email" <?php if ( $contact === 'email') { echo 'selected="selected"';}?>>Email</option>
                        <option value="text"<?php if ( $contact === 'text') { echo 'selected="selected"';}?>>Text Message</option>
                        <option value="phone"<?php if ( $contact === 'phone') { echo 'selected="selected"';}?>>Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50" ><?php echo $comments; ?></textarea>
            </fieldset>

            <input type="submit" value="Submit" />
            <br /><br />
        <?php
            if(!empty($error_message)){
                echo nl2br(htmlspecialchars($error_message)); 
            }            
            ?>
            
            <a href="view_page.php">View Users</a>
            </form>
            <br />
        </div>
        
    </body>
</html>