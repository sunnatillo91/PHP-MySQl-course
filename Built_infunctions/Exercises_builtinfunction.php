<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*    
//Exercise 1: Sorting array
$numbers = array(5, 49, 12, 25, 13);
arsort($numbers);
print_r($numbers);
    
//Exercise 2: Birthday countdown

echo "<br>";
$d1=strtotime("June 20 2023");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 20th of June."
 
//Exercise 3: Generating random float numbers
echo "<br>";
$x = 1;
$y = 25;
function randNumber($x, $y) {
    echo rand($x, $y)/10;
}
    
randNumber($x, $y);
    
//Exercise 4: Lowercase check

$str = "Create a variable ‘str’ with a long piece of text and create a function ‘lowercaseCheck’ that converts the string to all lowercase. Echo out the text with lower case";
    
function lowercase_Ceck($str) {
    echo strtolower($str);
}
lowercase_Ceck($str);
    
//Exercise 5: Search inside of a text
$str="Create a variable with a long piece of text and create a function ‘searchText’ that has 2
parameters: ‘str’ and ‘punctuation’. Find out the amount of punctuations, inside of the
string. ";
    
$punctuation = 0;
    
function searchText ($str, $unctuation) {
    for ($i = 0; $i<strlen($str); $i++) {
        if ($str[$i] == ".") {
            $punctuation++;
        }
    }
    echo "The text has " . $punctuation . "  punctuation";
}   
    
searchText($str, $punctuation);
    */
//Exercise 6: Lowest and highest values

$onlyNumbers = array(12, 45, 34, 23);
echo "The lowest value " . min($onlyNumbers) . " and the highest value is " . max($onlyNumbers);

//Exercise 7: String repeat
echo "<br>";
    
$str = " Hi, it's me Sunnatillo. " ;

echo str_repeat($str, 8) . "<br>";
    
    
?>
    
</body>
</html>