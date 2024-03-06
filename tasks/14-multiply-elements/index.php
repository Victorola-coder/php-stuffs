<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply Elements</title>
</head>
<body>
    <?php
// task14.php

// Function to multiply corresponding elements of two lists
function multiplyLists($list1, $list2) {
    // Check if both lists have the same length
    if (count($list1) != count($list2)) {
        return "Error: Lists must have the same length.";
    }

    // Initialize the result array
    $result = array();

    // Multiply corresponding elements and store in the result array
    for ($i = 0; $i < count($list1); $i++) {
        $result[] = $list1[$i] * $list2[$i];
    }

    return $result;
}

// Example usage
$list1 = array(1, 2, 3, 4);
$list2 = array(5, 6, 7, 8);

// Display the result
echo "List 1: " . implode(', ', $list1) . "\n";
echo "List 2: " . implode(', ', $list2) . "\n";

$resultList = multiplyLists($list1, $list2);

if (is_array($resultList)) {
    echo "Result: " . implode(', ', $resultList);
} else {
    echo "Error: " . $resultList;
}
?>

</body>
</html>