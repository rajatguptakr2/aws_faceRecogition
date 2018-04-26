<?php 

require 'vendor/autoload.php';

$client = new Aws\Rekognition\RekognitionClient([
    'version'  =>  'latest',
    'region'  =>  'us-east-1',
    'credentials'   =>  [
        'key'   =>  'AKIAIUPZYGSSXJ7JDENQ',
        'secret'   =>  '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',
    ]
]);

$result = $client->recognizeCelebrities([
    'Image' => [
        'Bytes' =>  file_get_contents("1.jpg"),
    ],
    'MaxLabels' =>  10,
    'MinConfidence' =>  20
]);


echo "<pre>";
print_r($result);
echo "</pre>";