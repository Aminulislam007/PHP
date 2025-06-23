<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function num(){
        echo is_numeric(12);
    }
    echo num();
    echo "<br>";


    function num2(){
    echo ("Round: " .round (34.5545));
    }

    num2();
    echo"<br>";

    function num3(){
        echo rand(1000,999);
        echo"<br>";
        echo ("Random Number: " .rand(1,10));
    }
    num3();
    ?>

</body>
</html>
