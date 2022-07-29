<html>
<head>
    <meta charset="UTF-8">
    <title>return</title>
</head>
<body>
<?php
//Functions with return value
/*
//Pass by value
$num1 = 10;
$num2 = 15;
    
function add($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

echo "The result is:  " . add($num1,$num2);

function subtract($num1, $num2) {
    echo $num1 - $num2;
    }
echo "<br>";
echo "The result is: " . subtract($num1 , $num2); */
    
//Pass by reference
$x = 10;

    
function addByValue($x) {
    $x += 5;
    }
    
function addByReference(&$x) {
    $x += 10;
}
    
addByValue($x);
echo "The value of x is: " . $x;
//The value of x is: 15
echo "<br>";
    
addByReference($x);
echo "The value of y is: " . $y;
//The value of y is: 10
?>
    
</body>
</html>