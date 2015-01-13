<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>String Modifier</title>
</head>
<body>
<form method="post">
    <input type="text" name="inputString">
    <input type="radio" name="string" id="checkPalindrome" value="checkPalindrome" checked="checked">
    <label for="checkPalindrome">Check Palindrome</label>
    <input type="radio" name="string" id="reverseString" value="reverseString">
    <label for="reverseString">Reverse String</label>
    <input type="radio" name="string" id="splitString" value="splitString">
    <label for="splitString">Split</label>
    <input type="radio" name="string" id="hashString" value="hashString">
    <label for="hashString">Hash String</label>
    <input type="radio" name="string" id="shuffleString" value="shuffleString">
    <label for="shuffleString">Shuffle String</label>
    <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $string=$_POST['inputString'];
    $stringLower=strtolower($string);
    $check=$_POST['string'];
    switch($check) {
        case 'checkPalindrome': {
            if (checkPalindrome($stringLower)) {
                ?>
                <p><?= htmlentities($string) ?>&nbsp;is a palindrome</p>
            <?php
            } else {
                ?>
                <p><?= htmlentities($string) ?>&nbsp;is not a palindrome</p>
                <?php
            }
        } break;
        case 'reverseString': {
            ?>
            <p><?= htmlentities(strrev($string)) ?></p>
            <?php
        } break;
        case 'splitString': {
            $output=str_split($string);
            ?>
                <p><?= htmlentities(implode(' ',$output)) ?></p>
            <?php
        } break;
        case 'hashString': {
            $hashString=md5($string);
            ?>
                <p><?= htmlentities($hashString) ?></p>
            <?php
        } break;
        case 'shuffleString': {
            $shuffleString=str_shuffle($string);
            ?>
                <p><?= htmlentities($shuffleString) ?></p>
            <?php
        } break;
    }
}

function checkPalindrome($string) {
    $revString=strrev($string);
    if($revString==$string) {
        return true;
    }
    return false;
}
?>
</body>
</html>

