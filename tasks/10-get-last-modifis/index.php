<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>last modification</title>
</head>
<body>
    <?php
// task 10

// Function to get the time of last modification of the current page
function getLastModificationTime() {
    // Use filemtime() to retrieve the last modification time of the current script
    $lastModificationTime = filemtime(__FILE__);

    // Format the time for display
    $formattedTime = date("F j, Y, g:i a", $lastModificationTime);

    // Display the result
    echo "Last Modification Time: $formattedTime";
}

// Call the function
getLastModificationTime();
?>

</body>
</html>