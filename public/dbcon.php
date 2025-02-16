<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('dohoangduc20225286-firebase-adminsdk-fbsvc-4462e4f8db.json')
    ->withProjectId('dohoangduc20225286')
    ->withDatabaseUri('https://dohoangduc20225286-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
?>