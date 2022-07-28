<html>
<head>
    <meta charset="UTF-8">
    <title>exercises</title>
</head>
<body>
<?php
//Exercise 1
/*    
$x = 45;
$y = 54;

if ($x > $y) {
    echo "Highest value is " . $x . " . Lowest value is " . $y;    
}
else {
    echo "Highest value is " . $y . " . Lowest value is " . $x;    
}
    
//Exercise 2

$index = 5;
    
switch ($index) {
    case 1:
        echo "Spades";
    break;
    case 2:
        echo "Hearts";
    break;
    case 3:
        echo "Diamonds";
    break;
    case 4:
        echo "Clubs";
    break;
    default: echo "Sorry, the value is not acceptable!";
}
    
//Exercise 3
    
$points = 85;
    
if ($points < 60) {
    echo "Sorry, you haven't passed the exam! Because you have earned F ";
} elseif ($points <= 69 && $points >=60) {
    echo "Finally, you have passed the exam and your grading system is D";    
} elseif ($points <=79 && $points >= 70) {
    echo "Good job, you have reached C and passed the exam";
} elseif ($points <=89 && $points >= 80) {
    echo "Well done, you have reached B and passed the exam";
} elseif ($points <= 100 && $points >= 90) {
    echo "Great, you have reached A and passed the exam";
} 
    
//Exercise 4
    
$hours = 9000;
$years = 8;
$failures = 26;
    
if ($hours > 10000 or $years > 7 or $failures > 25) { echo "The machines will be replaced.";
} else {echo "The machines will not be replaced";}
    
//Exercise 5
    
$year = 2015;
    
if ($year % 400 == 0 or $year % 4 == 0) { 
    echo $year . " is a leap year" ;}
else {
    echo $year . " is not a leap year";
}

//Exercise 6
$x = 1;
$y = 15;
    
while ($x<=$y) {
    $multiplication = $x*$y;
    echo $x . "*" . $y . "=" . $multiplication . "<br>";
    $x++;
}*/
    
//Exercise 7 Fibonacci (0-50)

$num1 = 0;
$num2 = 1;
$counter = 0;
    
while ($counter < 10) {
    echo ' ' . $num1;
    $num3 = $num2+$num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter++;
}
      
?>
    
</body>
</html>