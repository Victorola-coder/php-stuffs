<?php
// task 6

// Function to redirect the user to a different page
function redirectToPage($page) {
    // Use header() function to redirect
    header("Location: $page");
    exit; // Ensure that no further code is executed after the redirect
}

// Example usage: redirect to Google's homepage
redirectToPage("https://www.google.com");
?>
