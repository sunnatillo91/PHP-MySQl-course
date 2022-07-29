<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//DATE
// 'd' = Day
// 'j' = Day without zeros
// 'D' = Day of week (3 letters)
// 'l' = Full day of the week
// 'm' = Month as a number with zeros
// 'n' = Month as a number without zeros
// 'M' = Month (3 letters)
// 'F' = Full month 
// 'y' = Two-digit year
// 'Y' = Full year
    
echo "Today is " . date('l') . ' ' .  date('d.m.Y');

//Times
// 'g' = Hours in 12-hour format without zeros
// 'h' = Hours in 12-hour format with zeros
// 'G' = Hours in 24-hour format without zeros
// 'H' = Hours in 24-hour format with zeros
// 'a' = am/pm in lowercase
// 'A' = am/pm in uppercase
// 'i' = minutes without leading zeros 
// 's' = seconds without leading zeros 

echo "<br>";
date_default_timezone_set('Asia/Tashkent'); 
echo date('h:i:s a');
    
//Set timezone

    
//String to time
$time = strtotime("4:00pm July 29 2022");
echo "<br>";
echo $time;
    
//the timestamp is the value represe
    
    
?>
    
</body>
</html>