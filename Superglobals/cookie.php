<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
// COOKIE
// Small file that the webserver stories in the client computer
    
//ARGUMENT COOKIES
//Name
//Value
//Expire
//Path
//Domain
//Security
    
//If you do not include an expiration date, the cookie will only be stored for the current session
$time = time() - 86400*30;
setcookie("name", "Sunnatillo", $time);
    
print_r($_COOKIE);
    
echo "<br>";
    
echo $_COOKIE['name'];
    

    
?>
    
</body>
</html>