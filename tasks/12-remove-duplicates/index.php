<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove duplicates</title>
</head>
<body>
    <?php
// task 12

// Function to remove duplicates from a sorted list
function removeDuplicates($sortedList) {
    // Use array_unique() to remove duplicates
    return array_unique($sortedList);
}

// Example usage
$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5);

// Display the result
echo "Original List: " . implode(', ', $sortedList) . "\n";
echo "List without Duplicates: " . implode(', ', removeDuplicates($sortedList));
?>

</body>
</html>