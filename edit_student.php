<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
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
    <title>Edit Student</title>
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
        <h1>Edit Student</h1>
    
        <form name="studentForm" action="edit_student.php?id=<?php echo $id; ?>" method="post" onsubmit="return validateForm();">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required>
            <label for="course">Course:</label>
             <select id="course" name="course" class="btn" required>
            <option value="BSC CSIT" <?php if($student['course'] == 'BSC CSIT') echo 'selected'; ?>>BSC CSIT</option>
            <option value="BBS" <?php if($student['course'] == 'BBS') echo 'selected'; ?>>BBS</option>
            </select><br>
            <button type="submit" class="btn">Update Student</button>
        </form>
    </div>
</body>
</html>

