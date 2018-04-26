
<?php 

// require 'vendor/autoload.php';

// $client = new Aws\Rekognition\RekognitionClient([
//     'version'  =>  'latest',
//     'region'  =>  'us-east-1',
//     'credentials'   =>  [
//         'key'   =>  'AKIAIUPZYGSSXJ7JDENQ',
//         'secret'   =>  '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',
//     ]
// ]);

// $result = $client->compareFaces([
//     'SimilarityThreshold'  =>  80,
//     'SourceImage'   =>  [
//         'Bytes' =>  file_get_contents("3.jpg"),
//     ],
//     'TargetImage'   =>  [
//         'Bytes' =>  file_get_contents("5.jpg"),
//     ]
// ]);

// echo "<pre>";
// // print_r($result->toArray()['FaceMatches']);
// if(!empty($result->toArray()['FaceMatches'])){
//     foreach($result->toArray()['FaceMatches'] as $key => $val){
//         if($val['Similarity'] > 50){
            
//             print_r("Possible image Match:- ".$val['Similarity']."%");
//             echo "<br>";
    
//         }else{
//             echo "Not Found Any Match";
//         }
//     }
// }else{
//     echo "Not Found Any Match";
// }

// echo "</pre>";

$dir = "C:\Users\Rajat\Downloads\Photos-Test-20180425T170809Z-001\Photos-Test";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
        if($file !== '.' && $file !== '..'){
            
            echo "filename:" . $file . "<br>";
        }
    }
    closedir($dh);
  }
}
