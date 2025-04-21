<?php
// Check if the form is submitted and set the cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form input value
    $name = $_POST['name'];
    
    // Set a cookie with name, value, and expiration time
    setcookie("user", $name, time() + (86400 * 30), "/"); // Cookie will expire in 30 days

    // Display a message if the cookie is set
    if (isset($_COOKIE["user"])) {
        echo "Cookie 'user' is set!<br>";
        echo "Welcome, " . $_COOKIE["user"];
    } else {
        echo "Cookie 'user' is not set!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie with Form</title>
</head>
<body>
    <h1>Set Your Name in Cookie</h1>
    <!-- Form to submit name -->
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Set Cookie</button>
    </form>
    
    <?php
    // Check if the cookie is already set and show it
    if (isset($_COOKIE["user"])) {
        echo "<h2>Hello, " . $_COOKIE["user"] . "!</h2>";
    } else {
        echo "<h2>No user data in cookie yet.</h2>";
    }
    ?>
</body>
</html>
