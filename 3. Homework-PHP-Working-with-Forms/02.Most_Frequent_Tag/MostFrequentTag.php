<form>
    Enter tags: <br>
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
if(isset($_GET['input'])) {
    $input=$_GET['input'];
    $pattern='[, ]+';
    $inputArray=mb_split($pattern, $input);
    foreach($inputArray as $currentInput) {
        if(isset($result[$currentInput])) {
            $result[$currentInput]++;
        } else {
            $result[$currentInput] = 1;
        }
    }
    arsort($result);
    $mostFrequentTagValue=0;
    foreach($result as $key => $value) {
        ?><p><?php echo htmlentities($key).":".htmlentities($value)." times!";?><?php
        if($value>$mostFrequentTagValue) {
            $mostFrequentTagValue=$value;
        }
    }
    ?><p><?php echo "Most Frequent Tag is: ";?><?php
    foreach($result as $key=>$value) {
        if($value==$mostFrequentTagValue) {
            echo " ".htmlentities($key);
        }
    }
}