<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

//Opening and Reading from a File:

$file = fopen("example.txt", "r") or die("Unable to open file!");
$data = fread($file, filesize("example.txt"));
fclose($file);
echo $data;



//Writing to a File:

$file = fopen("example.txt", "w") or die("Unable to open file!");
$text = "Hello, World!";
fwrite($file, $text);
fclose($file);


//Appending to a File:

$file = fopen("example.txt", "a") or die("Unable to open file!");
$text = "This is a new line.";
fwrite($file, $text);
fclose($file);


//Checking File Existence:

$file = "example.txt";
if (file_exists($file)) {
    echo "$file exists.";
} else {
    echo "$file does not exist.";
}


//Renaming a File:

$old_name = "old_name.txt";
$new_name = "new_name.txt";
if (rename($old_name, $new_name)) {
    echo "File renamed successfully.";
} else {
    echo "Error renaming file.";
}



//Deleting a File:
$file = "example.txt";
if (unlink($file)) {
    echo "$file deleted successfully.";
} else {
    echo "Error deleting $file.";
}

?>





</body>
</html>