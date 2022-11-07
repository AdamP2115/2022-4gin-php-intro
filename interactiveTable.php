<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMIgol</title>
    <script>
    function tlo(x) {
    x.style.background = "yellow";
    }
    function tlo2(x) {
    x.style.background = "white";
    }
    </script>
</head>
<body>
    <?php
    $content = file_get_contents('lorem.txt');
    $array = explode(' ', $content);
    $kolumny = 1;
    function renderHTMLTable($array, $kolumny, $liczba, $znajdz){
        echo "<table>";
        foreach($array as $znajdz){
            if(preg_match('/\b(\w*e\w*)\b/', $znajdz) == true);
            if($kolumny<=$liczba){
            if ($kolumny%$liczba==1){
                echo "<tr><td onmouseon='tlo(this)'>$znajdz</td>";
            } else if ($kolumny%$liczba==0){
                echo "<td onmouseon='tlo(this)'>$znajdz</td></tr>";
            } else {
                echo "<td onmouseon='tlo(this)'>$znajdz</td>";
            }} else {
            if ($kolumny%$liczba==1){
                echo "<tr><td onmouseon='tlo(this)'>$znajdz</td>";
            } else if ($kolumny%$liczba==0){
                echo "<td onmouseon='tlo(this)' onmouseover='tlo2(this)'>$znajdz</td></tr>";
            } else {
                echo "<td onmouseon='tlo(this)' onmouseover='tlo2(this)'>$znajdz</td>";
            }}
            $kolumny ++;
        };
        echo "</table>";
    };
    renderHTMLTable($array, $kolumny, 5, " ");
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>