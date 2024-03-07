<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Instructions -->
    <!-- Write a PHP script to get the PHP version and configuration information -->
    <?php
// task1

// Get PHP version
$phpVersion = phpversion();

// Get PHP configuration information
$phpInfo = phpinfo();

// Display the results
echo "PHP Version: $phpVersion\n\n";
echo "PHP Configuration:\n";
echo $phpInfo;
?>

</body>
</html> 