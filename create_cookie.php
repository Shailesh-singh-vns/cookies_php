<?php
$cookie_name = "user";
$cookie_value = "shailesh singh";

setcookie($cookie_name , $cookie_value , time()+3600,"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo " cookie name " .$cookie_name. " is not set ";
    }else {
        echo " cookie name " .$cookie_name. " is set <br>";
        echo " cookie value is " .$_COOKIE[$cookie_name];
    }
    
    
    ?>
</body>
</html>