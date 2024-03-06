<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check Https</title>
</head>
<body>
    <?php
// task 5

// Function to check if the page is accessed via 'https' or 'http'
function checkProtocol() {
    // Get the protocol
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

    // Display the result
    echo "The page is accessed via $protocol.";
}

// Call the function
checkProtocol();
?>

</body>
</html>