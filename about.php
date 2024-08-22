<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>About Us - College Website</title>
    <style>
        nav .homeAnime {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        nav .homeAnime:hover {
            transform: scale(1.1);
            background-color: #f0f0f0; /* Light grey background on hover */
        }

        .content-container {
            display: flex;
            flex-direction: column;
            gap: 20px; /* Space between the content sections */
            margin: 20px 0;
        }

        .content {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        @media (max-width: 600px) {
            nav a {
                display: block;
                margin: 10px 0;
            }

            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a class="homeAnime" href="index.php">Home</a>
            <a class="homeAnime" href="about.php">About Us</a>
            <a class="homeAnime" href="contact.php">Contact Us</a>
            <a class="homeAnime" href="student_enrollment/index.php">Student Enrollment</a>
        </nav>
    </header>

    <div class="container about-us">
    <div class="content-container">
            <div class="content">
                <h2>Institutional Overview</h2>
                <p>Mount Annapurna Campus (MAC) is a premier educational institution located in the heart of Pokhara, Nepal. Established with the vision of providing quality education and fostering academic excellence, MAC offers a wide range of undergraduate and postgraduate programs in various disciplines. Our state-of-the-art facilities, experienced faculty, and commitment to student success make us a leading choice for higher education in the region.</p>
                <p>At MAC, we believe in holistic development and encourage our students to engage in extracurricular activities, research projects, and community service. Our mission is to nurture future leaders who are not only academically proficient but also socially responsible and globally aware.</p>
            </div>
            </div>
        </div>
    </div>

   
</body>
 <footer>
        <p>&copy; 2024 College Website. All rights reserved.</p>
    </footer>
</html>
