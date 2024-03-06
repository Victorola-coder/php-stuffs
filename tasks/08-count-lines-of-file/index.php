<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count files line</title>
</head>
<body>
    <?php
// task 8

// Function to count the number of lines in a file
function countLinesInFile($filename) {
    // Check if the file exists
    if (file_exists($filename)) {
        // Read the file into an array of lines
        $lines = file($filename);

        // Count the number of lines
        $lineCount = count($lines);

        // Display the result
        echo "Number of lines in $filename: $lineCount";
    } else {
        // Display an error if the file doesn't exist
        echo "Error: File $filename does not exist.";
    }
}

// Example usage
$filenameToCount = "example.txt";
countLinesInFile($filenameToCount);
?>

</body>
</html>