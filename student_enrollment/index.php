<?php include '../db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Student Enrollment</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="../scripts.js"></script>
</head>
<body>
    <div class="container">
        <h1>Student Enrollment</h1>
        <a href="../add_student.php" class="btn">Add Student</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Enrolled At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['course']}</td>
                                <td>{$row['enrolled_at']}</td>
                                <td>
                                    <a href='../edit_student.php?id={$row['id']}' class='btn'>Edit</a>
                                    <a href='../delete_student.php?id={$row['id']}' class='btn' onclick='return confirmDelete();'>Delete</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No students found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
