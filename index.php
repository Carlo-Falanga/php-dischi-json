<?php

$json_string = file_get_contents("./musicRecords.json");
// var_dump($file);

$musicRecords = json_decode($json_string);
var_dump($musicRecords);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Dischi</title>
</head>

<body>

</body>

</html>