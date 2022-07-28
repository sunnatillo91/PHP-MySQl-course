<html>
<head>
    <meta charset="UTF-8">
    <title>multi_array</title>
</head>
<body>
<?php

// Multidimensional array
    
//Expensive
//Audi, Mercedes, BMW
    
//Inexpensive
//Volvo, Ford, Toyota
    
$cars = array(
        "Expensive" => array("Audi", "Mercedes", "BMW"),
        "Inexpensive" => array("Volvo", "Ford", "Toyota")
)
    
echo $cars["Expensive"][1];    
    
echo "<br>";
    
echo $cars["Inexpensive"][2];
?>    
</body>
</html>