<!DOCTYPE html>
<html>
<head>
    <title>php04</title>
</head>
<body>
<?php
    $str = "Software Engineering";
    $count_char = array_count_values(str_split($str));
    arsort($count_char);
    echo "String : $str" . "<br>";
    echo "Largest Chracter : ";
    echo substr_count($str, array_keys($count_char)[0]);
    echo "<br>"; 
    echo "For the Chracter : " . array_keys($count_char)[0];
    echo "<br>";
?>
</body>
</html>