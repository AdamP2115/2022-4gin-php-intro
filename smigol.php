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
renderHTMLTable($array, $kolumny, 5, "a");

// function renderCSV($array, $kolumny){
//     $delimiter = ',';
//     $enclosure = '"';
    
//     $file = fopen('file.csv', 'w+');
//     foreach ($array as $data_line) {
//     fputcsv($file, $data_line, $delimiter, $enclosure);
//     }

//     $data_read="";
//     rewind($file);
    
//     while (!feof($file)) {
//         $data_read .= fread($file, 8192); 
//     }
//     fclose($file);
//     echo $data_read;
// };
// renderCSV()
?>