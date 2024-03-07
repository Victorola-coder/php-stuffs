<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>

<?php
// task 25
class MyCalculator {
    private $value1;
    private $value2;

    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function add() {
        return $this->value1 + $this->value2;
    }

    public function subtract() {
        return $this->value1 - $this->value2;
    }

    public function multiply() {
        return $this->value1 * $this->value2;
    }

    public function divide() {
        if ($this->value2 != 0) {
            return $this->value1 / $this->value2;
        } else {
            return "Cannot divide by zero";
        }
    }
}

// Example usage
$calculator = new MyCalculator(10, 5);

echo "Addition: " . $calculator->add() . "\n";
echo "Subtraction: " . $calculator->subtract() . "\n";
echo "Multiplication: " . $calculator->multiply() . "\n";
echo "Division: " . $calculator->divide() . "\n";
?>

</body>
</html>