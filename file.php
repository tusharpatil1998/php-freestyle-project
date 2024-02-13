<?php

echo "Hello, Jenkins!\n";

// Example: Read a file
$fileName = 'example.txt';
$fileContent = file_get_contents($fileName);
if ($fileContent === false) {
    die("Error reading file: $fileName\n");
}
echo "File content: $fileContent\n";

// Example: Writing to a file
$outputFileName = 'output.txt';
$contentToWrite = 'This is a sample content.';
if (file_put_contents($outputFileName, $contentToWrite) === false) {
    die("Error writing to file: $outputFileName\n");
}
echo "Content written to $outputFileName\n";

// Example: Exiting with a status code
exit(0);

?>
