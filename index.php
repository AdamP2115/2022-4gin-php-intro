<?php
$content = file_get_contents('https://www.lipsum.com/feed/html');
$array = explode(' ', $content);
var_dump($array);
?>