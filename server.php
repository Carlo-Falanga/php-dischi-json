<?php

$json_string = file_get_contents("./musicRecords.json");
$musicRecords = json_decode($json_string, true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $musicRecords[] = [
        "titolo"  => $_POST["titolo"],
        "artista" => $_POST["artista"],
        "cover"   => $_POST["cover"],
        "anno"    => $_POST["anno"],
        "genere"  => $_POST["genere"],
    ];

    $json_txt_updated = json_encode($musicRecords);
    file_put_contents("./musicRecords.json", $json_txt_updated);
}
