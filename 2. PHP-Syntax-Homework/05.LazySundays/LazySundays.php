<?php
$currentDate= new DateTime();
$startDate=new DateTime($currentDate->format("Y-m-1"));
$month=$currentDate->format("m");
$year=$currentDate->format("Y");
$daysOfMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$endDate=new DateTime($currentDate->format('Y-'.$month.'-'.$daysOfMonth));
$endDate->add(new DateInterval('P1D'));
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($startDate, $interval ,$endDate);

foreach($daterange as $date){
    if($date->format("l")=="Sunday") {
        echo $date->format("jS F, Y").PHP_EOL;
    }
}