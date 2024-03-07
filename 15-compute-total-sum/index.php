<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compute total sum</title>
</head>
<body>
    <?php
// task 15

// Function to compute the sum of digits of a number
function sumOfDigits($number) {
    // Convert the number to a string to iterate through its digits
    $numString = (string)$number;

    // Initialize sum
    $sum = 0;

    // Iterate through each digit and add it to the sum
    for ($i = 0; $i < strlen($numString); $i++) {
        $sum += (int)$numString[$i];
    }

    return $sum;
}

// Example usage
$numberToSum = 12345;
$result = sumOfDigits($numberToSum);

echo "Sum of digits of $numberToSum: $result";
?>

</body>
</html>