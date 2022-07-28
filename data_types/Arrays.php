<html>
<head>
    <meta charset="UTF-8">
    <title>Doc</title>
</head>
<body>
<?php
    
$cars1 = "BMW";
$cars2 = "Audi";
$cars3 = "Mercedes";

$cars = array("BMW", "Audi", "Mercedes");
echo $cars[1];
    
echo "<br>";
  
$myCar = array("Tesla", 2022, 3.150);
//var_dump($myCar);
print_r($myCar);
    
$cars2 = array("Volve", "Chevy", "Volkswagen");
    
$cars = array_merge($cars, $cars2);
echo "<br>";
print_r($cars);     

?>
    
</body>
</html>