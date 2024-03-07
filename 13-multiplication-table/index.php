<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <?php
// task 13

// Function to print the multiplication table up to 12 * 12
function printMultiplicationTable() {
    echo "<table border='1'>";
    echo "<tr><th>*</th>";

    // Display column headers
    for ($i = 1; $i <= 12; $i++) {
        echo "<th>$i</th>";
    }

    echo "</tr>";

    // Display rows and cells with multiplication results
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr><th>$i</th>";

        for ($j = 1; $j <= 12; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

// Call the function to print the multiplication table
printMultiplicationTable();
?>

</body>
</html>