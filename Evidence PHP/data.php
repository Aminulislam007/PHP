
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