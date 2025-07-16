<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
     <form method="POST">
        <input type="number" name="num1" placeholder="Enter your first number" required><br><br>
        <input type="number" name="num2" placeholder="Enter your second number" required><br><br>
        <input type="number" name="num3" placeholder="Enter your third number" required><br><br>
        <input type="submit" value="find largest number">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $a =$_POST['num1'];
        $b =$_POST['num2'];
        $c =$_POST['num3'];
        
        if($a>=$b && $a>=$c){
            echo "<h1>The largest number is: $a </h1>";
           
        }
        else if($b>=$a && $b>=$c){
            echo "<h1>The largest number is: $b </h1>";
        }
        else{
            echo "<h1>The largest number is: $c </h1>";

        }

    }
    
     ?>
</body>
</html>