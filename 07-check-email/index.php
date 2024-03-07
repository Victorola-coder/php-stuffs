<?php
// task 7

// Function to check if an email is valid
function isValidEmail($email) {
    // Use FILTER_VALIDATE_EMAIL filter
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputEmail = $_POST["email"];
} else {
    // Default value
    $inputEmail = "test@example.com";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <h1>Email Validation</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Enter an email address:</label>
        <input type="email" id="email" name="email" value="<?php echo $inputEmail; ?>" required>
        
        <button type="submit">Submit</button>
    </form>

    <p>Result:</p>
    <?php
    // Display the result of email validation
    if (isValidEmail($inputEmail)) {
        echo "$inputEmail is a valid email address.";
    } else {
        echo "$inputEmail is not a valid email address.";
    }
    ?>
</body>
</html>
