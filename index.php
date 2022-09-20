<?php
$content = file_get_contents('https://www.loripsum.net/api');
$array = explode(' ', $content);
$e = 1;
echo "<table>";
foreach($array as $word){
    if($e<=4){
    if ($e%4==1){
        echo "<tr><th>$word</th>";
    } else if ($e%4==0){
        echo "<th>$word</th></tr>";
    } else {
        echo "<th>$word</th>";
    }} else {
    if ($e%4==1){
        echo "<tr><td>$word</td>";
    } else if ($e%4==0){
        echo "<td>$word</td></tr>";
    } else {
        echo "<td>$word</td>";
    }}
    $e ++;
}
echo "</table>";
?>