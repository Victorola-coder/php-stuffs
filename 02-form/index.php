<?php
// task 2

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user name from the form
    $userName = $_POST["username"];

    // Display the user name
    echo "Hello, $userName!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Enter your name:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
