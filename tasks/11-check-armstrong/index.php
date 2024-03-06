<?php
// task11.php

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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberToCheck = $_POST["number"];
} else {
    // Default value
    $numberToCheck = 153;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" value="<?php echo $numberToCheck; ?>" required>
        
        <button type="submit">Check</button>
    </form>

    <p>Result:</p>
    <?php
    // Display the result of Armstrong number check
    if (isArmstrongNumber($numberToCheck)) {
        echo "$numberToCheck is an Armstrong number.";
    } else {
        echo "$numberToCheck is not an Armstrong number.";
    }
    ?>
</body>
</html>
    