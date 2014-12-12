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
    for($i=0;$i<count($inputArray);$i++) {
        ?><p><?php echo $i.":".$inputArray[$i];?><?php
    }
}
