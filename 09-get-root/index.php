<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get root document</title>
</head>
<body>
    <?php
// task 9

// Function to get the document root directory
function getDocumentRoot() {
    // Use $_SERVER['DOCUMENT_ROOT'] to retrieve the document root
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];

    // Display the result
    echo "Document Root: $documentRoot";
}

// Call the function
getDocumentRoot();
?>

</body>
</html>