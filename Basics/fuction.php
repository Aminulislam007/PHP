<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    AnoNymous FuNction
    <?php
    $add = function($a,$b){
        return $a + $b;
    };
     echo $add(2,3);
    echo "<br>"
     ?> 

    <!-- AnoNymous Function -->

    <?php
     $hello = function($name) {
    return "Hello, " . $name;
      
    };  
   echo $hello("Tania")
    
    ?>

    
</body>
</html>