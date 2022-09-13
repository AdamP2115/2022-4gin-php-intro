<?php
$content = file_get_contents('https://www.loripsum.net/api');
$array = explode(' ', $content);

echo("Slowa zawierajace litere e: ");
foreach($array as $slowanae){
    if(preg_match('/\b(\w*e\w*)\b/', $slowanae, $match) == true){
    echo "$match[0] </br>";
    }
}
?>