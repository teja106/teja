<?php
if(isset($_POST['logout']))
{
    session_start();
    session_unset();
    session_destroy();
    header("Location:memlogin.php?logout=success");
    exit();
}
else if(isset($_POST['adminlogout']))
{
    session_start();
    session_unset();
    session_destroy();
    header("Location:admin.php?logout=success");
    exit();
}
else
{
     header("Location:dashboard.php");
     exit();
}

?>