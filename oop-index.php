<?php

// Autoload function
function myAutoloader($className) {
    // Define the directory where your class files are located
    $directory = 'classes/';

    // Create the file path based on the class name
    $filePath = $directory . $className . '.php';

    // Check if the file exists, then include it
    if (file_exists($filePath)) {
        require_once $filePath;
    }
}

// Register the autoload function
spl_autoload_register('myAutoloader');

// Example usage
// Assuming you have a class named MyClass in classes/MyClass.php
$myObject = new MyClass();

?>
