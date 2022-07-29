<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Array functions
 /*   
$personalInfo = array("Name" => "Sunnatillo", "Age" => 31, "City" => "Samarkand");
    
$moreInfo = array("State" => "none", "Weight" => 75);
    
$personalInfo = array_merge($personalInfo, $moreInfo);
    
foreach ($personalInfo as $key => $value) {
    echo $key . ": " . $value . "<br>";}
    
print_r($personalInfo);

echo "<br>"; 
    
//Print only keys
print_r(array_keys($personalInfo));
    
echo "<br>";
    
//Print only values
print_r(array_values($personalInfo));*/
    
//Add value in array
$cars = array("Volkswagen", "Audi", "Mercedes");
array_push($cars, "Volvo");
print_r($cars);
    
//Search inside of an array
echo "<br>";
echo array_search("Volvo", $cars);
    
//Count the number of items in array
echo "<br>";
echo count($cars);
    
?>
    
</body>
</html>