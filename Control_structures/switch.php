<html>
<head>
    <meta charset="UTF-8">
    <title>switch</title>
</head>
<body>
<?php
// Conditional statement- switch
    
$role = "Boss";
    
switch ($role) {
    case 'Visitor':
        echo "Welcome Visitor!";
    break;
    case 'Admin':
        echo "Welcome Admin!";
    break;
    case 'Superadmin':
        echo "Welcome Superadmin!";
    break;
    case 'Boss':
        echo "Welcome Boss!";
    break;
    default:
        echo "User has no role!";
}
?>
    
</body>
</html>