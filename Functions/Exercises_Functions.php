<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php
     
//Exercises 1 Vat calculator
    
$price = 100;
$vat = 0.15;

function calculateVat($price, $vat){
    $calculatedPrice = $price + $price*$vat;
    echo $calculatedPrice;
}
    
calculateVat($price, $vat);
    
echo "<br>";
    
//Exercise 2: Leap year
    
$year = 2009;
    
function isLeapYear($year) {
if ($year % 400 == 0 || $year % 4 ==0) {
    return true;
} else {
    return false;
    }
}
    
if (isLeapYear($year)) {
    echo $year . " is a leap year .";
} else {
    echo $year . " is not a leap year";
    }

    


//Exercise 3: Calculator
$num1 = 12;
$num2 = 15;
    
function addNumbers($num1, $num2) {
    echo "Addition of $num1 and $num2 is " . $num1+$num2;
}
addNumbers($num1, $num2);
echo "<br>";
function subtractNumbers($num1, $num2) {
    echo "Subtraction of $num1 and $num2 is " . $num1-$num2;
}
subtractNumbers($num1, $num2);
    
echo "<br>";
    
function multiplyNumbers($num1, $num2) {
    echo "Multiplicity of $num1 and $num2 is " . $num1*$num2;
}
multiplyNumbers($num1, $num2);
    
echo "<br>";
function divideNumbers($num1, $num2) {
    echo "Division of $num1 and $num2 is " . $num1/$num2;
}
divideNumbers($num1, $num2);
    
echo "<br>";
    
//Exercise 4: Swapping numbers
$num1 = 4;
$num2 = 8;
function swapNumbers($num1, $num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    echo "Before swapping: num1 = 4, num2 = 8";
    echo "<br>";
    echo "After swapping: num1 = $num1, num2 = $num2";
}
    
swapNumbers($num1, $num2);
    
echo "<br>";
    
//Exercise 5: Even or Odd
$num1 = 34;
    
function evenOrOdd($num1) {
    if ($num1 % 2 == 0) {
        echo "$num1 is even";
    } else {
        echo "$num1 is odd";
    }
}
    
evenOrOdd($num1);
    
echo "<br>";
    
//Exercise 6: Prime number
$num1 = 25;
    
function isPrime($num1) {
    if ($num1 == 1) {
        return false;
    } else {
        for ($i = 2; $i<$num1 / 2; $i++) {
            if ($num1 % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

if (isPrime($num1)) {
    echo "This number is a prime";
} else {
    echo "This number $num1 is not a prime";
}
    
?>
        
</body>
</html>