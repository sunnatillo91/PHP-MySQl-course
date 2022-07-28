<html>
<head>
    <meta charset="UTF-8">
    <title>Exercises</title>
</head>
<body>
<?php
//1
$x = 10;
$y = 15;
$z = ($x+$y)*5;
echo "The total is: " . $z;

echo "<br>";

//2
$price = 100;
echo "Price: " . $price;
    
echo "<br>";
    
$vat = 0.15;
echo "vat: " . $vat;
    
echo "<br>";
    
$totalPrice = $price*(1+$vat);
echo "Total price: " . $totalPrice;
    
//Exercise 3: Average
    
$x = 1;
$y = 12;
$z = 3;
    
echo "<br>";
$average = ($x+$y+$z)/3 ;
echo "The average is: " . number_format($average, 2, ',', ' ');
    echo "<br>";
echo number_format(7845445, 2, ',', ' ');
    
echo "<br>";
    
//Exercise 4: Countries and capitals
    
$countries = array("USA" => "New York", "Germany" => "Berlin", "Netherlands" => "Amsterdam", "Thailand" => "Bangkok", "Uzbekistan" => "Tashkent");
    
foreach ($countries as $key => $value) {
    echo "The capital of " . $key . " is " . $value . "<br>" 
; }
    
echo "<br>";
    
//Exercise 5: Centimeters to inches
    
$cm = 0.39;
$x = 5;
$cmToInch = 5.0*0.39;
echo $x . " centimeters is " . $cmToInch . " inches";
    
echo "<br>";

//Exercise 6: Expenses
$expenses = array(4000000);
$totalAmount = 8200000;
$amountOfExpenses = "My amount of Expenses: " . $expenses[0] + $totalAmount . " biggest expenses were " . $expenses[0];
echo $amountOfExpenses;
    
echo "<br>";
    
//Exercise 7: Weather conditions
    
$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
    
echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " and " . $weather[4] . ".";
    
    
?>

</body>
</html>