<?php
// Form Handling with Validation and Output
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $errors = [];
    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if ($email === '') {
        $errors[] = 'Email is required.';
    }
    if ($errors) {
        echo '<div style="color:red; font-weight:bold;">'.implode('<br>', $errors).'</div>';
        echo '<a href="form.html">Go Back</a>';
    } else {
        echo '<div style="font-family:Arial; margin-top:30px;">';
        echo '<h2>Form Submitted Successfully</h2>';
        echo '<p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>';
        echo '<a href="form.html">Submit Another</a>';
        echo '</div>';
    }
} else {
    header('Location: form.html');
    exit;
}
?>
