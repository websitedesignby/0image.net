<?php

session_start();

if(  empty( $_SESSION['requests'] ) ){
    $_SESSION['requests'] = 1;
}else{
    
    $requests = $_SESSION['requests'];
    $requests++;
    $_SESSION['requests'] = $requests;
    
}

echo $_SESSION['requests'] . " requests" . "<br />";

?>
<a href="index.php">index.php</a>


