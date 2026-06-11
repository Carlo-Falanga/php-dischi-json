<?php 

$json_string = file_get_contents("./musicRecords.json");
// var_dump($file);

$musicRecords = json_decode($json_string, true);
// var_dump($musicRecords);

?>

