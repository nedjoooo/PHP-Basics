<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Primes In Range</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="post">
    Starting index:
    <input type="text" name="startIndex">
    End:
    <input type="text" name="endIndex">
    <input type="submit"><br>
</form>
<div>
<?php

function isPrime($num) {
    for($i=2; $i<=sqrt($num);$i++) {
        if($num%$i==0) {
            return false;
        }
    }
    return true;
}

if(isset($_POST['startIndex'], $_POST['endIndex'])) {
    $startIndex=$_POST['startIndex'];
    $endIndex=$_POST['endIndex'];
    for($i=$startIndex;$i<=$endIndex;$i++) {
        if(isPrime($i)) {
            ?><strong><?=htmlentities($i)?></strong><?php
        } else {
            ?><?=htmlentities($i)?><?php
        }
        if($i!=$endIndex) {
            ?>,&nbsp<?php
        }
    }
}

?>
</div>
</body>
</html>


