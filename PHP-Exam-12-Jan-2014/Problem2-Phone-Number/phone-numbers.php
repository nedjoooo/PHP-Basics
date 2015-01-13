<?php
$inputText = $_GET['numbersString'];
$pattern = "/([A-Z][a-z]*)([^A-Za-z\d]*?)([\+]*[^A-Za-z]+\d+[\(\)\/\.\-\s]*\d+)/";

preg_match_all($pattern, $inputText, $matches);

if(!empty($matches[1])) {
    $names = $matches[1];
    $phones = $matches[3];
    echo "<ol>";
    for($i=0; $i<count($names); $i++) {
        preg_match_all("/[\+\d]+/", $phones[$i], $currentPhone);
        $currentPhone=$currentPhone[0];
        $phone = "";
        foreach ($currentPhone as $resultPhone) {
            $phone .=$resultPhone;
        }
        $name = trim($names[$i]);
        echo "<li><b>".$name.":</b> ".$phone."</li>";
    }
    echo "</ol>";
} else {
    echo "<p>No matches!</p>";
}