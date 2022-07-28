<html>
<head>
    <meta charset="UTF-8">
    <title>comparison</title>
</head>
<body>
<?php
//comparison operators
//==	Equal to
//!=, <>	Not equal to
//===	Identical to
//!==   Not identical to	
//>	Greater than
//>=	Greater than or equal to
//  <	Less than
//<=	Less than or equal to
// <=>  Spaceship
    // If the value on the left is less than right, the system will return a -1
    // If the value on the left is equal to value on the right, the system will return a 0
    // If the value on the left is greater than value on the right, the system will return a 1
    
$x = 11;
$y = 15;

echo $x <=> $y;
    
echo "<br>";
    
if ($x <=> $y) {
    echo "This is true";
} else {
    echo "This is false";
}

?>
    
</body>
</html>