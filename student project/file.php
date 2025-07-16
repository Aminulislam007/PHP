<?php
// Parent Class
class Person {
    public $name;
    public $id;
    public $email;
    public $image;

    public function __construct($name, $id, $email, $image) {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
        $this->image = $image;
    }

    public function displayInfo() {
        echo "<h3>Person Details</h3>";
        echo "Name: $this->name <br>";
        echo "ID: $this->id <br>";
        echo "Email: $this->email <br>";
        echo "<img src='uploads/$this->image' width='200px'><br>";
    }
}

// Child Class
class Student extends Person {
    public $course;

    public function __construct($name, $id, $email, $image, $course) {
        parent::__construct($name, $id, $email, $image);
        $this->course = $course;
    }

    public function displayFullInfo() {
        $this->displayInfo();
        echo "Course: $this->course <br>";
    }
}

// Declare $student globally to avoid undefined variable
$student = null;

// File upload and form handling
if (isset($_POST['btnsubmit'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Handle image upload
    $imgName = $_FILES["og"]["name"];
    $tmpName = $_FILES["og"]["tmp_name"];
    $uploadDir = "uploads/";

    // Ensure the uploads folder exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Move file
    if (move_uploaded_file($tmpName, $uploadDir . $imgName)) {
        // Create Student object
        $student = new Student($name, $id, $email, $imgName, $course);
    } else {
        echo "Error uploading the file.";
    }
}
?>

<body>
<div style="width:500px; margin:10px auto">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><strong>Upload Student Info</strong></legend>
            Name: <input type="text" name="name" required><br><br>
            ID: <input type="text" name="id" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            Course: <input type="text" name="course" required><br><br>
            Picture: <input type="file" name="og" required><br><br>
            <input type="submit" name="btnsubmit" value="Submit">
        </fieldset>
    </form>

    <br>

    <?php
    // Show uploaded data
    if ($student instanceof Student) {
        $student->displayFullInfo();
    }
    ?>
</div>
</body>
