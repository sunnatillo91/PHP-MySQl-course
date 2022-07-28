<html>
<head>
    <meta charset="UTF-8">
    <title>foreach</title>
</head>
<body>
<?php
// While loop - Don't know the number of iterations
//Do-while loop
//For loop
//Foreach loop - Iterateover array variables  
    
$names = array("John", "Michael", "David");
    
foreach ($names as $name) {
    echo "My name is " . $name;
    echo "<br>";
}
    
$person = array("Name" => "Sunnatillo", "Age" => 31, "Gender" => "Male");
    
foreach($person as $key => $value) {
echo $key . ":" . $value;
echo "<br>";    
}
?>
    
</body>
</html>