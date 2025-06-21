<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Type</h1>
    <?php
    $n="Rubina";
    // echo $n;
    var_dump($n);
    echo"<br>";
// float
    $num=3090.7584;
    var_dump($num);
    // boolean
    echo "<br>";
    $b=true;
    var_dump($b);
    // array
    echo"<br>";
    $a=array("a","b","c");
    var_dump($a);
    // object
    class Student{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
   }
   $obj=new Student("Rubina",24);
   var_dump($obj);
    ?>
</body>
</html>