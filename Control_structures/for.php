<html>
<head>
    <meta charset="UTF-8">
    <title>for</title>
</head>
<body>
<?php
// While loop - Don't know the number of iterations
//Do-while loop
//For loop
//Foreach loop

//Initialization
//Evaluated once at the beginning
    
//Condition
//Option1 - If its true, execute
//Option2 - If its false, stop
//for (initialization; condition; counter) {
  
//Counter
//Evaluated at the end of every loop
/*    
for ($x = 1; $x < 10; $x++) {
    echo "The number is: " . $x;
    echo "<br>";
        
}
*/

    
//Going to the bank on the 1st of January
//Want to deposit 1000 dollars
//Interest rate is 5%
//Withdrawl it after 5 years
    
    
echo "<br>";
$deposit = 1000;
$interest = 0.05;
for ($years = 1; $years <= 5; $years++) {
    $deposit += ($deposit*$interest);
    echo "The total amount after : " . $years . " year is: " . $deposit;
    echo "<br>";
        
}
    
?>
    
</body>
</html>