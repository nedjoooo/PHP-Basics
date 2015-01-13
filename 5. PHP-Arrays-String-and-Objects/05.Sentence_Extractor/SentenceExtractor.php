<?php
$text='This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)';
$word='is';
$pattern='/[A-Z]([\w+\s+,\'’:()\–])+([.!?])+/';
preg_match_all($pattern,$text,$newTextArray,PREG_SET_ORDER);
foreach ($newTextArray as $sentence) {
    $pattern='/\s+is\s+/';
    preg_match_all($pattern, $sentence[0], $currentSentence, PREG_SET_ORDER);
    if(isset($currentSentence[0])) {
        ?><p><?=htmlentities($sentence[0])?></p><?php
    }
}
