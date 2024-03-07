<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>casing</title>
</head>
<body>
    <?php
// task18.php

// Function to change the case of all values in an array
function changeCase($inputArray, $mode = 'lower') {
    $resultArray = [];

    foreach ($inputArray as $value) {
        if ($mode === 'lower') {
            $resultArray[] = strtolower($value);
        } elseif ($mode === 'upper') {
            $resultArray[] = strtoupper($value);
        } else {
            // Invalid mode, default to lower case
            $resultArray[] = strtolower($value);
        }
    }

    return $resultArray;
}

// Example usage
$inputArray = ['apple', 'Banana', 'Cherry', 'grape'];
$lowerCaseArray = changeCase($inputArray, 'lower');
$upperCaseArray = changeCase($inputArray, 'upper');

echo "Original Array: " . implode(', ', $inputArray) . "\n";
echo "Array in Lower Case: " . implode(', ', $lowerCaseArray) . "\n";
echo "Array in Upper Case: " . implode(', ', $upperCaseArray) . "\n";
?>

</body>
</html>