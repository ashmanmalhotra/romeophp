<?php session_start(); ?>
<?php
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']==true)
{
    session_destroy();
    header("Location: index.php");
}
else{
    header("Location: index.php");
}

?>