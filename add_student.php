<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
    if ($conn->query($sql) === TRUE) {
        header("Location: student_enrollment/index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>
    <style>
        .container{
            text-align: center;
        }
    </style>
    <div class="container">
        <h1>Add Student</h1>

        

        <form name="studentForm" action="add_student.php" method="post" onsubmit="return validateForm();">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="course">Course:</label>
           
            <select id="course" name="course" class="btn" required>
        <option value="BSC CSIT">BSC CSIT</option>
        <option value="BBS">BBS</option>
    </select><br><br>
            <button type="submit" class="btn">Add Student</button>
            
        </form>
        <a href="index.php" class="btn">Home</a>

    </div>
</body>
</html>
