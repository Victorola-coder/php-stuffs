<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Client IP</title>
</head>
<body>
<?php
// task 3

// Get client IP address
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $clientIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $clientIP = $_SERVER['REMOTE_ADDR'];
}

// Display the client IP address
echo "Client IP Address: $clientIP";
?>


</body>
</html>