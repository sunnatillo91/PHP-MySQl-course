<html>
<head>
    <meta charset="UTF-8">
    <title>arguments</title>
</head>
<body>
<?php
    
$num1 = 5;
$num2 = 5;
    
//Parameters
function calculator($num1 = 5, $num2 = 10) {
    echo $num1*$num2;
    }
    
//Arguments
    calculator();
    
?>
    
</body>
</html>