<?php

const FILENAME = "./Aetherfel.json";

$fileContent = file_get_contents(FILENAME);
$jsonContent = json_decode($fileContent, true);

$jsonContent['_meta']['dateAdded'] = "1721000060";
$jsonContent['_meta']['dateLastModified'] = "" . time();
$jsonContent['_meta']['_dateLastModifiedHash'] = md5($fileContent);

file_put_contents(FILENAME, json_encode($jsonContent, JSON_PRETTY_PRINT));