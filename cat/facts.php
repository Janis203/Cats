<?php
$link = "https://cat-fact.herokuapp.com/facts";
$file = file_get_contents($link);
if ($file === false) {
    die("Failed to fetch data from the API.");
}
$fact = json_decode($file);
$factNr = rand(0, 4);
echo $fact[$factNr]->text;