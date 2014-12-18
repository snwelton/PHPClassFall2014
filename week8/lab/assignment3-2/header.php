<?php
//start session
if(!isset($_SESSION))
    session_start ();
if(!isset($_SESSION['loggedin'])){
    echo "<a href='signup.php'>Logout</a>|";
}
else {
    echo "<a href='signup.php'>Login</a>|";

}
?>

    <a href='signup.php'>Sign up</a>;
    <a href='admin.php'>Admin page</a>;
