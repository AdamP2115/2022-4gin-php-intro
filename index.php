<?php
$content = file_get_contents('https://www.loripsum.net/api');
$array = explode(' ', $content);

echo("Slowa zawierajace litere e: ");
echo "<br>";
foreach($array as $slowa_z_e){
    if(preg_match('/\b(\w*e\w*)\b/', $slowa_z_e, $match) == true){
    echo "$match[0] </br>";
    }
}
?>