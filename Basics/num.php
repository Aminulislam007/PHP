<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        body {
            font-family: 'Siyam Rupali', sans-serif;
            background-color: #f2f2f2;
            padding: 50px;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            width: 350px;
            padding: 30px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            font-size: 16px;
            color: #333;
        }

        input[type="number"] {
            width: 55%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 55%;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #2d3436;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Find out your given number is positive or negative or zero .</h1>
    <form method="POST">
    <input type="number" name="num"><br><br>
    <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number = $_POST["num"];

        if( $number > 0){
            echo "$number is positive number.";
        }
        else if( $number < 0 ){
            echo "$number is negative number.";
        }
        else {
            echo "the number is zero.";
        }
    }
    ?>
</body>
</html>