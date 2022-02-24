<!DOCTYPE html>
<html>
<head>
    <title>php02</title>
</head>
<body>
<?php
    $str = "Software Engineering";
    $aeiou = array('A','E','I','O','U','a','e','i','o','u');
    echo "String : " . $str;
    echo "<br>";
    echo "Expected Value : ";
    print_r(str_replace($aeiou,"x",$str));
?>
</body>
</html>