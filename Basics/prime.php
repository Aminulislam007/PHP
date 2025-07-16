<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>You can check your given number is prime or not</h1>
    <form method="POST">
        <input type="number" name="number"><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["number"];

        $isPrime = true;

        if($number <= 1 ){
            $isPrime = false;
        }
        else if($number == 2){
            $isPrime = true;
        }
        else{
            for ( $i = 2; $i < $number  ; $i++){
                if ( $number % $i == 0){
                    $isPrime = false;
                    break;
                }
            }
        }
        if ($isPrime){
            echo "$number is a prime number.";
        }
        else{
            echo "$number is not a prime number.";
        }
    }
    ?> 
</body>
</html>