<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert string in a given string</title>
</head>
<body>
    <?php
// task 22

// Function to insert a string at a specified position in another string
function insertString($originalString, $insertString, $position) {
    $length = strlen($originalString);
    
    // Check if the position is within bounds
    if ($position < 0 || $position > $length) {
        return "Invalid position";
    }

    // Insert the string at the specified position
    $resultString = substr_replace($originalString, $insertString, $position, 0);
    return $resultString;
}

// Example usage
$originalString = 'Hello, World!';
$insertedString = ' PHP';
$insertPosition = 6;
$result = insertString($originalString, $insertedString, $insertPosition);

echo "Original String: $originalString\n";
echo "Inserted String: $insertedString\n";
echo "Insert Position: $insertPosition\n";
echo "Resulting String: $result\n";
?>

</body>
</html>