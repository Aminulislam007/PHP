<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // class User{
    //     const name="Hello World!"."<br>";
    //     public static function info(){
    //         echo "this is static method <br>";
    //     }
    // }
    // echo User:: info();
    // echo User:: name();
    // echo User:: $name="Hello World"."<br>";
    class S{
        public static$value=34;
        public function staticValue(){
            return self:: $value;
        
        }
        public static function show(){
            return "this is static mehtod";
        }
        function applyStatic (){
            return self::show();
        }
    }
    $p=new S();
    echo$p->staticValue();
    echo $p->applyStatic();
    echoS:: show();

    ?>
</body>
</html>