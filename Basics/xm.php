<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <style>
      form {
        background-color: cornflowerblue;
        width: 40%;
        padding: 15px;
        border: 2px solid black;
        margin: 40px auto;
      }
      input[type="text"], .btn {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
      }
    </style>
</head>
<body>

<div class="container">
    <form action="" method="post">
        <p>Name:</p>
        <input type="text" name="name" required>

        <p>ID:</p>
        <input type="text" name="id" required>

        <p>Batch:</p>
        <input type="text" name="batch" required>

        <input type="submit" value="Submit" class="btn">
    </form>
</div>

<?php
require_once 'Class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $id = $_POST['id'] ?? '';
    $batch = $_POST['batch'] ?? '';

    if (!empty($name) && !empty($id) && !empty($batch)) {
        $user = new Student($name, $id, $batch);
        echo $user->saveToFile();
    } else {
        echo "<p style='color:red; text-align:center;'></p>";
    }
}
?>

</body>
</html>