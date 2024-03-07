<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extract filename</title>
</head>
<body>
   <?php
// task 21

// Function to extract the filename component from a URL path
function extractFilenameFromURL($urlPath) {
    $pathParts = pathinfo($urlPath);
    return $pathParts['basename'];
}

// Example usage
$urlPath = '/path/to/folder/file.txt';
$filename = extractFilenameFromURL($urlPath);

echo "URL Path: $urlPath\n";
echo "Extracted Filename: $filename\n";
?>
 
</body>
</html>