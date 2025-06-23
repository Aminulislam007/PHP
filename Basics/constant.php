<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    echo"<br>"
    <?php
   echo $_GET['fname'];
// echo $_Post['fname'];
echo"<br>";
//    echo $_GET['email'];
echo $_Post['email'];
 ?>
 <form action="view php" method=get>
    Name:<br><input type="text" name="fname"><br>
    E-Mail:<br><input type="text" name="email"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>