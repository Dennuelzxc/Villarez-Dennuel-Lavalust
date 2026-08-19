<!DOCTYPE html>
<html>
<head>
    <title>My Student Profile</title>

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

        .profile {
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

        .info {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="profile">

    <nav>
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
    </nav>

    <h1>My Student Profile</h1>

    <div class="info">
        <strong>Name:</strong>
        <?= $name; ?>
    </div>

    <div class="info">
        <strong>Student ID:</strong>
        <?= $student_id; ?>
    </div>

    <div class="info">
        <strong>Course:</strong>
        <?= $course; ?>
    </div>

    <div class="info">
        <strong>Year:</strong>
        <?= $year; ?>
    </div>

    <div class="info">
        <strong>Section:</strong>
        <?= $section; ?>
    </div>

    <div class="info">
        <strong>Email:</strong>
        <?= $email; ?>
    </div>

    <div class="info">
        <strong>Skills:</strong>
        <?= $skills; ?>
    </div>

    <div class="info">
        <strong>Hobbies:</strong>
        <?= $hobbies; ?>
    </div>

</div>

</body>
</html>