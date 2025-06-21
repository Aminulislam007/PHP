<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- local variabel -->
    <h1>Local Variable</h1>
    <?php
    function info(){
        Static $a =12;
        $a++;
        echo $a;
        
    }
      info();
     ?>
      <h1>global score</h1>
      <?php
      $a=12;
      $b=13;
      function add(){
        global $a,$b,$c;
        $c=$a+$b;
      }
      add();
      echo $c;
      ?>
      <br>


    <!-- Super global Variable -->
     <h1>Super global Variable</h1>
    <?php
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo $_SERVER['SERVER_FILENAME'];

    ?>

</body>
</html>
