<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link rel="stylesheet" href="style.css">
    <style>
      form {
        background-color: cornflowerblue;
        width: 40%;
        padding: 15px;
        border: 2px solid black;
        margin: 40px auto;
      }
    </style>
 
</head>
<body>
<div class="container">
    <form action="submit.php" method="post">
        <p>Name:</p>
        <input type="text" name="name">
        <br>
        <p>ID:</p>
        <input type="text" name="id">
        <br> 
        <p>Batch:</p>
        <input type="text" name="batch"><br>
        <input type="submit" value="Submit" class="btn">
    </form>
    </div>
    <?php
      require_once 'Class.php';

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'] ?? '';
      $id = $_POST['id'] ?? '';
      $batch = $_POST['batch'] ?? '';

        $user = new Student($name, $id, $batch);
        echo $user->saveToFile();
    }
  ?>

</body>
</html>