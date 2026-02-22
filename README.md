# Pandawa Employee Management System

This is a web-based employee management system built using PHP, MySQL, and HTML/CSS.
The application was developed during my Internship (Praktik Kerja Lapangan) to support structured and efficient employee data management.

## Features

- Add and manage employee data
- Upload employee documents (KTP, KK, Diploma)
- Form validation for data consistency
- Database integration using MySQL
- Simple and user-friendly interface

## Tech Stack

- PHP
- MySQL
- HTML
- CSS
- XAMPP (Local Development)

## Installation

To set up and run this project locally, follow these steps:

1. Clone the repository:

```
git clone https://github.com/username/pandawa-employee-management-system.git 
cd pandawa-employee-management-system
```

2. Create a new database in MySQL.
3. Import the database.sql file into your database.
4. Configure your database connection in config.php:

```
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_managements";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

## Project Structure

```index.php``` – Main page
```add_employee.php``` – Add employee form
```display.php``` – Display employee data
```config.php``` – Database configuration
```uploads/``` – Uploaded document storage
```styles.css``` – Styling file

## Project Background

This project was developed during my internship to help digitize employee data management. It replaces manual record-keeping with a structured web-based system and demonstrates backend integration, file handling, and database management implementation.
