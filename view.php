<?php
// Define the path to the temporary file

$tmpFile = '/tmp/floater.txt';

// Check if the file exists
if (file_exists($tmpFile)) {
    // Read the file contents
    $content = file_get_contents($tmpFile);
    
    // Display the contents
    // echo "<h1>Contents of $tmpFile:</h1>";
    echo $content;
    // echo "<pre>" . htmlspecialchars($content) . "</pre>"; // Using htmlspecialchars to prevent XSS
} else {
    echo "Error: The file $tmpFile does not exist.";
}
?>

