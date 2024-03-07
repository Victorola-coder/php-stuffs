<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get characters from url pathinfo</title>
</head>
<body>
    <?php
// task 23

// Function to get the characters after the last '/' in a URL
function getCharactersAfterLastSlash($url) {
    $lastSlashPosition = strrpos($url, '/');

    if ($lastSlashPosition !== false) {
        $result = substr($url, $lastSlashPosition + 1);
        return $result;
    } else {
        return "No '/' found in the URL";
    }
}

// Example usage
$url = 'https://example.com/path/to/resource/file.txt';
$result = getCharactersAfterLastSlash($url);

echo "URL: $url\n";
echo "Characters after the last '/': $result\n";
?>

</body>
</html>