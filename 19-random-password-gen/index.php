<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random password generator</title>
</head>
<body>
    <?php
// task19.php

// Function to generate a simple random password from a given string
function generateRandomPassword($inputString, $length = 8) {
    $password = '';
    $inputStringLength = strlen($inputString);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $inputStringLength - 1);
        $password .= $inputString[$randomIndex];
    }

    return $password;
}

// Example usage
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$passwordLength = 12;
$randomPassword = generateRandomPassword($characters, $passwordLength);

echo "Generated Password: $randomPassword\n";
?>

</body>
</html>