<?php
$cookie_name = "user";
$cookie_value = "shailesh singh";
setcookie($cookie_name ,$cookie_value, time()-3600,"/" );
echo "Cookie 'user' is deleted.";


?>