<?php
date_default_timezone_set('Europe/Sofia');
$inputList = $_GET['list'];
$currDate = $_GET['currDate'];

$inputDatesList = preg_split("/[\n\r]+/", $inputList);

$dates = [];
foreach ($inputDatesList as $inputDates) {
    $timeString = trim($inputDates);
    if(strtotime($timeString)) {
        $time = strtotime($timeString);
        $currentDate = date('d/m/Y', $time);
        $date = DateTime::createFromFormat("d/m/Y", $currentDate, timezone_open("Europe/Sofia"));
        $dates[] = $date;
    }
}

usort($dates, function($date1, $date2) {
    return $date1 > $date2;
});

$timeString = trim($currDate);
$time = strtotime($timeString);
$currentDate = date('d/m/Y',$time);
$compareDate = DateTime::createFromFormat("d/m/Y", $currentDate, timezone_open("Europe/Sofia"));

echo "<ul>";
if(!empty($dates)) {
    foreach ($dates as $date) {
        if($date <= $compareDate) {
            echo "<li><em>".$date->format("d/m/Y")."</em></li>";
        } else {
            echo "<li>".$date->format("d/m/Y")."</li>";
        }
    }
}
echo "</ul>";