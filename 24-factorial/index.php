<?php
// task 24

// Class to calculate the factorial of an integer
class FactorialCalculator {
    // Method to calculate the factorial
    public static function calculateFactorial($number) {
        if ($number < 0) {
            return "Factorial is undefined for negative numbers";
        } elseif ($number == 0 || $number == 1) {
            return 1;
        } else {
            $result = 1;
            for ($i = 2; $i <= $number; $i++) {
                $result *= $i;
            }
            return $result;
        }
    }
}

// Example usage
$number = 5;
$factorial = FactorialCalculator::calculateFactorial($number);

echo "Number: $number\n";
echo "Factorial: $factorial\n";
?>
