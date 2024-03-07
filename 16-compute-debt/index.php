<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debts</title>
</head>
<body>
<?php
// task 16

// Function to compute the debt amount over n months
function computeDebt($borrowingAmount, $interestRate, $months) {
    $debt = $borrowingAmount;

    for ($i = 1; $i <= $months; $i++) {
        // Add 5% interest to the debt
        $debt += $debt * ($interestRate / 100);

        // Round the debt to the nearest $1,000
        $debt = round($debt, -3);
    }

    return $debt;
}

// Example usage for n = 12 months
$initialAmount = 100000;
$interestRate = 5;
$loanDuration = 12;

$result = computeDebt($initialAmount, $interestRate, $loanDuration);

echo "Initial Borrowing Amount: $initialAmount\n";
echo "Interest Rate: $interestRate%\n";
echo "Loan Duration: $loanDuration months\n";
echo "Final Debt Amount after $loanDuration months: $result\n";
?>

</body>
</html>