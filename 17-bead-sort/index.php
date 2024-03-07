<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
// task 17

// Function to perform Bead-Sort on an array of positive integers
function beadSort($arr) {
    $max = max($arr);
    $output = array_fill(0, $max, 0);

    foreach ($arr as $num) {
        for ($i = 0; $i < $num; $i++) {
            $output[$i]++;
        }
    }

    $sortedArr = [];
    for ($i = 0; $i < $max; $i++) {
        for ($j = 0; $j < $output[$i]; $j++) {
            $sortedArr[] = $i + 1;
        }
    }

    return $sortedArr;
}

// Example usage
$unsortedArray = [5, 2, 8, 3, 1, 7, 4, 6];
$sortedArray = beadSort($unsortedArray);

echo "Unsorted Array: " . implode(', ', $unsortedArray) . "\n";
echo "Sorted Array: " . implode(', ', $sortedArray) . "\n";
?>
 
</body>
</html>