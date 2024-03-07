<?php
// task 11

// Function to check if a number is an Armstrong number
function isArmstrongNumber($number) {
    // Convert the number to a string to calculate the number of digits
    $numString = (string)$number;
    $numDigits = strlen($numString);

    // Calculate the sum of each digit raised to the power of the number of digits
    $sum = 0;
    for ($i = 0; $i < $numDigits; $i++) {
        $sum += pow((int)$numString[$i], $numDigits);
    }

    // Check if the sum is equal to the original number
    return $sum == $number;
}

// Example usage
$numberToCheck = 153;
// Display the result
if (isArmstrongNumber($numberToCheck)) {
    echo "$numberToCheck is an Armstrong number.";
} else {
    echo "$numberToCheck is not an Armstrong number.";
}
?>
