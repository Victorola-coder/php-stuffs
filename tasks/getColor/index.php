<?php
// task 4

// Function to change the color of the first character of a word
function colorizeFirstCharacter($text, $color) {
    // Check if the input is not empty
    if (!empty($text)) {
        // Extract the first character and the rest of the word
        $firstChar = substr($text, 0, 1);
        $remainingText = substr($text, 1);

        // Display the word with the first character in the specified color
        echo "<span style='color: $color;'>$firstChar</span>$remainingText";
    } else {
        // Display an error if the input is empty
        echo "Error: Input is empty.";
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputWord = $_POST["word"];
    $chosenColor = $_POST["color"];
} else {
    // Default values
    $inputWord = "PHP";
    $chosenColor = "red";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorize First Character</title>
</head>
<body>
    <h1>Colorize First Character</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="word">Enter a word:</label>
        <input type="text" id="word" name="word" value="<?php echo $inputWord; ?>" required>
        
        <label for="color">Choose a color:</label>
        <input type="color" id="color" name="color" value="<?php echo $chosenColor; ?>" required>
        
        <button type="submit">Submit</button>
    </form>

    <p>Result:</p>
    <?php
    // Display the colorized word
    colorizeFirstCharacter($inputWord, $chosenColor);
    ?>
</body>
</html>
