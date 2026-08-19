<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Grant access to the profile page once this page has been visited
$_SESSION['student_access'] = true;

// Capture the error message (if any) and clear it right away
$error = null;
if (isset($_SESSION['error_message'])) {
    $error = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }

         .error-message {
            background-color: rgba(231, 76, 60, 0.15);
            border: 1px solid #e74c3c;
            padding: 14px 20px;
            border-radius: 8px;
            max-width: 450px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;}

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        nav {
            margin-bottom: 30px;
        }

        nav a {
            margin-right: 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php if ($error): ?>
        <div class="error-message">
            <?= $error ?>
        </div>
    <?php endif; ?>

<div class="container">

    <nav>
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </nav>

    <h1>Student Information</h1>

    <p>
        <strong>Student ID:</strong>
        <?= $student_id; ?>
    </p>

    <p>
        <strong>Name:</strong>
        <?= $name; ?>
    </p>

    <p>
        <strong>Course:</strong>
        <?= $course; ?>
    </p>

    <p>
        <strong>Year Level:</strong>
        <?= $year; ?>
    </p>

    <p>
        <strong>Section:</strong>
        <?= $section; ?>
    </p>

    <p>
        <strong>Email:</strong>
        <?= $email; ?>
    </p>

</div>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<body>

    <?php if (isset($_SESSION['error_message'])): ?>
        <div class="error-message">
            <?= $_SESSION['error_message'] ?>
        </div>
        <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>

    <div class="home-card">
        ...

</body>
</html>