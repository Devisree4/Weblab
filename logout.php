
<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Logout Page
header("Location: loginstd.php");
exit();
}
?>