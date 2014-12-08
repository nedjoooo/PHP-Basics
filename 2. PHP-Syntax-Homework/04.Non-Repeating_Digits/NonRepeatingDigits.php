<?php
function numsInNumber($num) {
    $arr=[];
    while($num!=0) {
        $digit=$num%10;
        array_push($arr,$digit);
        $num=(int)($num/10);
    }
    return $arr;
}

function isRepetingDigits($ar) {
    for($i=0;$i<count($ar)-1;$i++) {
        for($j=$i+1;$j<count($ar);$j++) {
            if($ar[$i]==$ar[$j]) {
                return false;
            }
        }
    }
    return true;
}

$arr=[1234,145,15,247];
for($i=0;$i<count($arr);$i++) {
    $isValid=false;
    if($arr[$i]>101) {
        $border;
        if($arr[$i]>=1000) {
            $border=1000;
        } else {
            $border=$arr[$i];
        }
        for($j=102;$j<=$border;$j++) {
            $digits=numsInNumber($j);
            if(isRepetingDigits($digits)) {
                echo $j." ";
                $isValid=true;
            }
        }
        echo PHP_EOL;
    }
    if(!$isValid) {
        echo "no".PHP_EOL;
    }
}
