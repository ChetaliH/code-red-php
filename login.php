<?php
// Array of valid credentials for demo purposes
$validCredentials = [
    ['username' => 'admin', 'password' => 'password123'],
    ['username' => 'user1', 'password' => 'pass1'],
    ['username' => 'user2', 'password' => 'pass2']
];

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Flag to track if the credentials are valid
    $isValid = false;

    // Check if provided credentials match any of the valid credentials
    foreach ($validCredentials as $cred) {
        if ($username === $cred['username'] && $password === $cred['password']) {
            $isValid = true;
            break;
        }
    }

    if ($isValid) {
        // Redirect to hacked.php
        header('Location: hacked.php');
        exit();
    } else {
        echo 'Invalid username or password.';
    }
} else {
    echo 'Please submit the form.';
}
?>
