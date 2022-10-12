<?php
require_once "tableTool.interface.php";

class tableTool implements tableToolInterface{
    var $table_data;
    public function __construct($data)
    {
        $this->table_data=$data;
    }
    public function SortSearch($filterString) {
        if("" == trim($filterString)){
          sort($this->table_data, SORT_NATURAL | SORT_FLAG_CASE);
          foreach($this->table_data as $slowo){
                $result[] = $slowo;
          }
          return $result;
        } else {
          foreach($this->table_data as $slowo){
            sort($this->table_data, SORT_NATURAL | SORT_FLAG_CASE);
            if( strpos($slowo, $filterString) !== false){
                $result[] = $slowo;
            }
          }
          return $result;
      }
      }
    public function renderHTMLTable($kolumny, $filterString = ''){
        $table = '';
        $table .= '<table>';
        foreach($this->table_data as $slowo){
            if($kolumny<=$liczba){
            if ($kolumny%$liczba==1){
                $table .= '<tr><th>'.$slowo.'</th>';
            } else if ($kolumny%$liczba==0){
                $table .= '<th>'.$slowo.'</th></tr>';
            } else {
                $table .= '<th>'.$slowo.'</th>';
            }} else {
            if ($kolumny%$liczba==1){
                $table .= '<tr><td>'.$slowo.'</td>';
            } else if ($kolumny%$liczba==0){
                $table .= '<td>'.$slowo.'</td></tr>';
            } else {
                $table .= '<td>'.$slowo.'</td>';
            }}
            $kolumny ++;
        };
        $table .= '</table>';
        return $table;
    }
}

// NIE DOTYKAĆ KODU PONIŻEJ TEJ LINIJKI

$array = explode(' ', file_get_contents('lorem.txt'));

$table = new tableTool($array);

// Tests
echo $array->renderHTMLTable(3);
echo $array->renderHTMLTable(10);
echo $array->renderHTMLTable(5,'id');
// echo $array->renderCSV(3);
// echo $array->renderCSV(10);
// echo $array->renderCSV(5,'id');
// echo $array->renderMD(3);
// echo $array->renderMD(10);
// echo $array->renderMD(5,'id');