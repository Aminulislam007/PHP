<?php
class Student {
    private $name;
    private $id;
    private $batch;
    private $file;

    public function __construct($name, $id, $batch, $file = "data.txt") {
        $this->name = htmlspecialchars($name);
        $this->id = htmlspecialchars($id);
        $this->batch = htmlspecialchars($batch);
        $this->file = $file;
    }

    public function formatData() {
        return "Name: {$this->name} | ID: {$this->id} | Batch: {$this->batch}" . PHP_EOL;
    }

    public function saveToFile() {
        $data = $this->formatData();
        if (file_put_contents($this->file, $data, FILE_APPEND | LOCK_EX)) {
            return "<h1 style='margin-left:500px; margin-top:300px; color:green'>Data saved successfully!</h1>";
        } else {
            return "<h1 style='margin-left:500px; margin-top:300px; color:red'>Failed to save data!</h1>";
        }
    }
}
?>
