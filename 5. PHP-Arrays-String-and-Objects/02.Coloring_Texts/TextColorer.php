<form method="post">
    <textarea name="inputText"></textarea><br>
    <input type="submit" name="submit" value="Color Text">
</form>
<?php
if(isset($_POST['submit'],$_POST['inputText'])) {
    $text=$_POST['inputText'];
    for($i=0;$i<strlen($text);$i++) {
        $letter=$text[$i];
        $asciiOfLetter=ord($letter);
        if($asciiOfLetter%2==0) {
            ?><span style="color: red"><?=htmlentities($letter)?></span><?php
        } else {
            ?><span style="color: blue"><?=htmlentities($letter)?></span><?php
        }

    }
}