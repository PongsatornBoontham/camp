<!DOCTYPE html>
<html>
<head>
    <title>php03</title>
</head>
<body>
<?php
    $colr = array("red","green","yellow","blue","pink","black","white");
    echo "MyArray Value : ";
    for($i = 0; $i < 7; $i++){
        echo $colr[$i] . " ";
    }
    echo "<br>";
    echo "Expected Value : ";
    $reversed = array_reverse($colr);
    for($i = 0; $i < 7; $i++){
        echo $reversed[$i] . " ";
    }
?>
</body>
</html>