# College Website

Welcome to the College Website project. This project is designed to create a comprehensive website for a college, including features like an informative homepage, about us page, contact us page, and a student enrollment management system.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

This project aims to provide a user-friendly interface for college information and a robust admin panel for managing student enrollments. The website is built using HTML, CSS, JavaScript, PHP, and MySQL.

## Features

- **Homepage**: A welcoming page with college information and highlights.
- **About Us**: Detailed information about the college, its mission, and values.
- **Contact Us**: A contact form for inquiries and contact information.
- **Student Enrollment**: An admin panel for managing student enrollments (CRUD operations).
- **Responsive Design**: Ensures the website is accessible on various devices.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Libraries**: Bootstrap (optional for enhanced UI components)

## Setup Instructions

### Prerequisites

- XAMPP or any other local server with PHP and MySQL support.
- Web browser (Chrome, Firefox, etc.)

### Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/college-website.git
    ```

2. **Move the project to your web server directory**:
    - For XAMPP, move the project folder to `htdocs`.

3. **Create the database**:
    - Open phpMyAdmin.
    - Create a database named `college`.
    - Import the `college.sql` file provided in the `database` directory.

4. **Configure the database connection**:
    - Open `config.php` and ensure the database credentials match your setup:
      ```php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "college";
      ```

5. **Start the local server**:
    - For XAMPP, start Apache and MySQL from the XAMPP control panel.

6. **Access the website**:
    - Open your web browser and navigate to `http://localhost/college-website`.

## Usage

### Admin Panel

1. Navigate to the student enrollment section: `http://localhost/college-website/student_enrollment/index.php`.
2. Use the provided forms to add, edit, or delete student records.

### Contact Form

1. Navigate to the contact page: `http://localhost/college-website/contact.php`.
2. Fill out and submit the form to send inquiries.

## Project Structure

```plaintext
college-website/
├── student_enrollment/
│   └── index.php
├── styles.css
├── image.png
├── student_form.php
├── add_student.php
├── delete_student.php
├── edit_student.php
├── about.php
├── contact.php
├── index.php
├── config.php
└── README.md
