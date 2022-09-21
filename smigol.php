<?php
$content = file_get_contents('https://www.loripsum.net/api');
$array = explode(' ', $content);
$kolumny = 1;
function renderHTMLTable($array, $kolumny, $liczba, $znajdz){
    echo "<table>";
    foreach($array as $znajdz){
        if(preg_match('/\b(\w*e\w*)\b/', $znajdz) == true);
        if($kolumny<=$liczba){
        if ($kolumny%$liczba==1){
            echo "<tr><th>$znajdz</th>";
        } else if ($kolumny%$liczba==0){
            echo "<th>$znajdz</th></tr>";
        } else {
            echo "<th>$znajdz</th>";
        }} else {
        if ($kolumny%$liczba==1){
            echo "<tr><td>$znajdz</td>";
        } else if ($kolumny%$liczba==0){
            echo "<td>$znajdz</td></tr>";
        } else {
            echo "<td>$znajdz</td>";
        }}
        $kolumny ++;
    };
    echo "</table>";
};
renderHTMLTable($array, $kolumny, $_POST["liczba"], $_POST["znajdz"]);

function renderCSV($array, $filename = "export.csv", $delimiter=";") {
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    $f = fopen('php://output', 'w');

    foreach ($array as $line) {
        fputcsv($f, $line, $delimiter);
    }
}
?>