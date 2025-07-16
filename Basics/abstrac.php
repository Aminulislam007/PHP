<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- abstract -->
    <?php
    interface of{
        public function getName();
        Public function info();
        public function display();
    }
    //  abstract class User{
    //     abstract public function getName();
    //     public function display(){
    //         echo "Fourth";
    //     }
    // }
    class wDpf  implements of{
    public function getName(){
        echo "Done";
     }
    public function display(){
        echo"fourth";
      }
      public function info(){
        echo"second";
      }
    }
    $add=new wDpf();
    $add=getName();
    $add =display();
    $add=info();
    ?>
</body>
</html>