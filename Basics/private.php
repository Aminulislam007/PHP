<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Private -->
    <?php
    class Bank {
    private $balance = 5000;

    private function showBalance() {
        echo $this->balance;
    }

    public function getBalance() {
        $this->showBalance();
    }
}

$obj = new Bank();
$obj->getBalance();   
$obj->showBalance();
?>     
</body>
</html>