<html>
<head>
    <meta charset="UTF-8">
    <title>logical</title>
</head>
<body>
<?php
// Logical operators
// and ---- Both x and y are true
// && ---- Both x and y are true
// or ---- Either x or y are true
// || ---- Either x or y are true
// Xor --- Either x or y are true not both
// ! ----- True if x is not true
// 1 = true  -  0 = false
    
$x = 10;
$y = 10;
if ($x==$y && "Hi"=="hi") {
    echo "True";
} else {
    echo "False";
}
    
echo "<br>";
    
$x = 4;
$y = 10;
if ($x==$y xor 1==1) {
    echo "True";
} else {
    echo "False";
}
    
echo "<br>";
    
$x = 10;
$y = 10;
if (!$x==$y xor 1==1) {
    echo "True";
} else {
    echo "False";
}

?>
</body>
</html>