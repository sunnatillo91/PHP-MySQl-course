<html>
<head>
    <meta charset="UTF-8">
    <title>ass_array</title>
</head>
<body>
<?php
$cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);
    
foreach ($cars as $key => $value) {
    echo "My " . $key . " has " . $value . " mileage <br>";
}

?>    
</body>
</html>