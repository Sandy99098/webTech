<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - College Website</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
        }

        .contact-us {
            text-align: center;
            margin: 50px auto;
            max-width: 400px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-us img {
            width: 100px;
            margin-bottom: 20px;
        }

        .contact-us h2 {
            margin-bottom: 10px;
            font-size: 1.5em;
            color: #333;
        }

        .contact-us p {
            margin: 5px 0;
            font-size: 1em;
            color: #555;
        }

        .contact-us a {
            color: #007BFF;
            text-decoration: none;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 5px;
            font-size: 24px;
            color: #555;
        }

        .social-icons a:hover {
            color: #007BFF;
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
<div class="container contact-us">
    <img src="logo.png" alt="Mount Annapurna Campus Logo">
    <h2>Mount Annapurna Campus</h2>
    <p>Pokhara-5, Parshyang</p>
    <p><strong>Contact:</strong> <a href="tel:061-572650">061-572650</a></p>
    <p><strong>Email:</strong> <a href="mailto:info@macpokhara.edu.np">info@macpokhara.edu.np</a></p>

    <div class="social-icons">
        <a href="https://www.facebook.com/MAC.ITBASEDCOLLEGE"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
    </div>
</div>


<footer>
    <p>&copy; 2024 College Website. All rights reserved.</p>
</footer>

</body>
</html>
