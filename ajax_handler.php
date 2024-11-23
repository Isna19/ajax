<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the name from the POST request
    $name = trim($_POST['name']);

    // Validate the input
    if (!empty($name)) {
        echo "<p>Hello, <strong>" . htmlspecialchars($name) . "</strong>! Welcome to the AJAX demo.</p>";
    } else {
        echo "<p style='color: red;'>Please enter a valid name.</p>";
    }
} else {
    echo "<p style='color: red;'>Invalid request method.</p>";
}
