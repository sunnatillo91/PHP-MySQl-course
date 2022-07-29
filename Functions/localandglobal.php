<html>
<head>
    <meta charset="UTF-8">
    <title>localandglobal</title>
</head>
<body>
<?php
  
$x = 10;
$y = 20;
    
function myFunction($y) {
    echo $y;
    }
    
myFunction($y);
    
?>
    
</body>
</html>