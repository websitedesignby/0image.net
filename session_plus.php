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
<p><a href="session_plus.php"><strong>refresh</strong></a></p>
<p><a href="index.php"><strong>Go to index.php</strong></a></p>
<p>View the code: <a href="https://github.com/websitedesignby/0image.net" target="_blank">github.com/websitedesignby/0image.net</a></p>


