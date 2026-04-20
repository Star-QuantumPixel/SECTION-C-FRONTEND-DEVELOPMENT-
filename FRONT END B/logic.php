<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = intval($_POST['number'] ?? 0);
    echo '<div style="font-family:Arial; margin:30px;">';
    echo '<h2>Result</h2>';
    echo '<p><strong>Number:</strong> ' . htmlspecialchars($num) . '</p>';
    if ($num % 2 === 0) {
        echo '<p><strong>Even</strong></p>';
    } else {
        echo '<p><strong>Odd</strong></p>';
    }
    echo '<h4>Table of ' . htmlspecialchars($num) . ':</h4>';
    echo '<table border="1" cellpadding="8" style="border-collapse:collapse;">';
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr><td>' . $num . ' x ' . $i . '</td><td>' . ($num * $i) . '</td></tr>';
    }
    echo '</table>';
    echo '<br><a href="logic_form.html">Try Another</a>';
    echo '</div>';
} else {
    header('Location: logic_form.html');
    exit;
}
?>
