<?php
$arr=["hello",15,1.234,array(1,2,3),(object)[2,34]];

foreach($arr as $variable) {
    if(is_numeric($variable)) {
        var_dump($variable).PHP_EOL;
        echo "<br>";
    } else {
        echo gettype($variable).PHP_EOL;
        echo "<br>";
    }
}

