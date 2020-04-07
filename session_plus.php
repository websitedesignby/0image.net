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
<p><a href="https://github.com/websitedesignby/0image.net" target="_blank">github.com/websitedesignby/0image.net</a></p>


