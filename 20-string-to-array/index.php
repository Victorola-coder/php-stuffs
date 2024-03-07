<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convert string to array</title>
</head>
<body>
    <?php
// task 20

// Function to convert a string into an arbitrary array
function stringToArray($inputString) {
    $array = str_split($inputString);
    return $array;
}

// Example usage
$inputString = 'Hello, World!';
$resultArray = stringToArray($inputString);

echo "Input String: $inputString\n";
echo "Resulting Array: " . implode(', ', $resultArray) . "\n";
?>

</body>
</html>