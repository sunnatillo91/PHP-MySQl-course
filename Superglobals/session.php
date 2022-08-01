<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

//SESSION
//Good to use for sensitive information
//Session exists as long as the browser is open
   
session_start();

//Storing information
$_SESSION["Name"] = "Sunnatillo";
$_SESSION["Age"] = 31;
   
echo "Hello " . $_SESSION["Name"];
   
session_destroy();
    
echo "<br>";
   
echo "Hello " . $_SESSION["Name"];
   
?>
    
</body>
</html>