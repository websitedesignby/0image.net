<?php
session_start();

if(  empty( $_SESSION['requests'] ) ){
    $_SESSION['requests'] = 1;
}else{
    $_SESSION['requests']++;
}

echo $_SESSION['requests'] . " requests" . "<br />";

?>
<a href="session_plus.php">session_plus.php</a>

