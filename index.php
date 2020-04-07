<?php
session_start();

if(  empty( $_SESSION['requests'] ) ){
    $_SESSION['requests'] = 1;
}else{
    $_SESSION['requests']++;
}

echo $_SESSION['requests'] . " requests" . "<br />";

?>
<p><a href="session_plus.php"><strong>Go to session_plus.php</strong></a></p>
<p><a href="https://github.com/websitedesignby/0image.net" target="_blank">github.com/websitedesignby/0image.net</a></p>

