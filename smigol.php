<?php
$content = file_get_contents('https://www.loripsum.net/api');
$array = explode(' ', $content);
$kolumny = 1;
function renderHTMLTable($array, $kolumny, $liczba, $znajdz){
    foreach($array as $znajdz){
        if(preg_match('/\b(\w*e\w*)\b/', $znajdz) == true){
        }
    }
    echo "<table>";
    foreach($array as $word){
        if($kolumny<=$liczba){
        if ($kolumny%$liczba==1){
            echo "<tr><th>$word</th>";
        } else if ($kolumny%$liczba==0){
            echo "<th>$word</th></tr>";
        } else {
            echo "<th>$word</th>";
        }} else {
        if ($kolumny%$liczba==1){
            echo "<tr><td>$word</td>";
        } else if ($kolumny%$liczba==0){
            echo "<td>$word</td></tr>";
        } else {
            echo "<td>$word</td>";
        }}
        $kolumny ++;
    };
    echo "</table>";
};
renderHTMLTable($array, $kolumny, $_POST["liczba"], $_POST["znajdz"]);
?>