<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check your result</h1>
    <form action="" method="post">
        <fieldset>
        <input type="text" name="number"><br><br>
        <input type="submit">
        </fieldset>
    </form>

    <br>

    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $number = $_POST["number"];

        if($number == "A+"){
            echo "<h1>Outstanding</h1>";
        }
        else if( $number == "A"){
            echo "<h1>Very Good</h1>";
        }
           else if( $number == "B"){
            echo "<h1>Good</h1>";
        }
           else if( $number == "C" ){
            echo "<h1>Poor</h1>";
        }
        else{
            echo "<h1>Failed</h1>";
        }
        
    }

    ?>
    
</body>
</html>