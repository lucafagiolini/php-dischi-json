<?php

$discListString = file_get_contents('./dischi.json');

$discListArray = json_decode($discListString, true);

header('Content-Type: application/json');
echo json_encode($discListArray);




