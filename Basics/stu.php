 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
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
    <h2>Student Information Form</h2>
    <form action="" method="post">
        <label for="textId">ID:</label>
        <input type="text" name="textId" id="textId" required>
        <br><br>

        <label for="textname">Name:</label>
        <input type="text" name="textname" id="textname" required>
        <br><br>


        <label for="password">Password:</label>
        <input type="text" name="password" id="password" required>
        <br><br>
        <p>Address:</p>
          <textarea name="addr" rows="3" cols="30"></textarea>
          <br /><br />
        <label for="Phone">Phone:</label>
        <input type="text" name="phone" id="phone" required>
        <br><br>

         <p>Course:</p>
          <input type="checkbox" id="php" name="course" value="PHP" /> php
          <!-- <label for="php">PHP</label> -->
          <input type="checkbox" id="java" name="course" value="JAVA" /> java
          <!-- <label for="java">JAVA</label> -->
          <input type="checkbox" id="python" name="course" value="Python" /> python
          <!-- <label for="python">Python</label> -->
          <br><br>

          <p>Gender:</p>
          <input type="radio" id="male" name="gender" value="Male" />
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="Female" />
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="Other" />
          <label for="other">Other</label>
          <br><br>

          <p>City:</p>
          <select name="city" class="city">
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Chittagong">Chittagong</option>
          </select>
          <br><br>

        <input type="submit" name="btnSubmit" value="Submit">
    </form>

    <?php
    class Student {
        private $id;
        private $name;
        private $address;
        private $password;
        private $phone;
        private $course;
        private $gender;
        private $city;

        // Constructor
        public function __construct($id, $name, $address,$password,$phone,$course,$gender,$city) {
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this-> password =$password;
            $this-> phone =$phone;
            $this-> course =$course;
            $this-> gender =$gender;
            $this-> city =$city;


        }

        // Simulate storing data (you can connect to DB here)
        public function store() {
            echo "<h3>Data Stored Successfully!</h3>";
            echo "<strong>ID:</strong> " . $this->id . "<br>";
            echo "<strong>Name:</strong> " . $this->name . "<br>";
            echo "<strong>Address:</strong> " . $this->address . "<br>";
            echo "<strong>Password:</strong>" . $this-> password ."<br>";
            echo "<strong>Phone:</strong>" . $this-> phone ."<br>";
            echo "<strong>Course:</strong>" . $this-> course ."<br>";
            echo "<strong>Gender:</strong>" . $this-> gender ."<br>";
            echo "<strong>City:</strong>" . $this-> city ."<br>";


                                            
        }
    }

    if (isset($_POST["btnSubmit"])) {
        $id = $_POST["textId"];
        $name = $_POST["textname"];
        $address = $_POST["addr"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $course = $_POST["course"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];


        $student = new Student($id, $name, $address,$password,$phone,$course,$gender,$city);
        $student->store();
    }
    ?>
</body>
</html>