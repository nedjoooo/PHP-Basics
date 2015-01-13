<form method="post">
    <textarea name="inputText"></textarea><br>
    <input type="submit" name="submit" value="Count words">
</form>
<?php

if(isset($_POST['submit'],$_POST['inputText'])) {
    $input=$_POST['inputText'];
    $pattern='/[a-zA-Z]+/';
    preg_match_all($pattern, $input, $results, PREG_SET_ORDER);
    foreach ($results as $result) {
        $current=strtolower($result[0]);
        if(!isset($outputs[$current])) {
            $outputs[$current]=1;
        } else {
            $outputs[$current]++;
        }
    }
    ?><table border="1"><?php
    foreach ($outputs as $output => $value) {

        ?><tr>
            <td><?=htmlentities($output)?></td>
            <td><?=htmlentities($value)?></td>
        </tr><?php
    }
    ?></table><?php
}