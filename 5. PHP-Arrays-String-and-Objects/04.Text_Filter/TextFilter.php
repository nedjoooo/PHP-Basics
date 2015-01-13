<?php
$text='It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux!
Sincerely, a Windows client';
$banlist=['Linux','Windows'];

$newText=str_replace($banlist[0], '*****', $text);
$text="";
$text=str_replace($banlist[1], '*******', $newText);

?><p><?=htmlentities($text);?></p>