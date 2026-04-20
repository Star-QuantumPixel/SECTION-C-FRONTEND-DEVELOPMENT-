<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $roll = trim($_POST['roll'] ?? '');
    $course = trim($_POST['course'] ?? '');
    $errors = [];
    if ($name === '') $errors[] = 'Name is required.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
    if ($roll === '') $errors[] = 'Roll number is required.';
    if ($course === '') $errors[] = 'Course is required.';
    if ($errors) {
        echo '<div style="color:red; font-weight:bold;">'.implode('<br>', $errors).'</div>';
        echo '<a href="register.html">Go Back</a>';
    } else {
        echo '<div style="font-family:Arial; margin-top:30px;">';
        echo '<h2>Registration Successful</h2>';
        echo '<p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>';
        echo '<p><strong>Roll Number:</strong> ' . htmlspecialchars($roll) . '</p>';
        echo '<p><strong>Course:</strong> ' . htmlspecialchars($course) . '</p>';
        echo '<a href="register.html">Register Another Student</a>';
        echo '</div>';
    }
} else {
    header('Location: register.html');
    exit;
}
?>
