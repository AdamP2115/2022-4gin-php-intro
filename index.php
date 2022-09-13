<?php
$content = file_get_contents('https://www.loripsum.net/api');
$array = explode(' ', $content);

echo("W porządku alfabetycznym: ");
$i=1;
$search = "";
sort($array, SORT_NATURAL | SORT_FLAG_CASE);
foreach($array as $word){
    if(preg_match("/\b(\w*$search\w*)\b/", $word, $match) == true){
    echo "[$i] $match[0] </br>";
    $i ++;
    }
}
?>