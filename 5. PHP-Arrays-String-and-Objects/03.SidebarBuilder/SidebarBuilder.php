<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sidebar Builder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="post">
    <label for="categories">Categories</label>
    <input type="text" name="categories" id="categories"><br>
    <label for="tags">Tags</label>
    <input type="text" name="tags" id="tags"><br>
    <label for="months">Months</label>
    <input type="text" name="months" id="months"><br>
    <input type="submit" name="submit" value="Generate">
</form>

<?php
if(isset($_POST['submit'], $_POST['categories'], $_POST['tags'], $_POST['months'])) {
    $inputArray[]=$_POST['categories'];
    $listName[]='Categories';
    $inputArray[]=$_POST['tags'];
    $listName[]='Tags';
    $inputArray[]=$_POST['months'];
    $listName[]='Months';
    for($i=0;$i<count($inputArray);$i++) {
        buildSidebar($inputArray[$i],$listName[$i]);
    }

}

function buildSidebar($text, $listName) {
    $sidebar=preg_split("/,/", $text, -1, PREG_SPLIT_NO_EMPTY);
    ?><ul><h3><?=$listName?></h3><hr><?php
    foreach ($sidebar as $list) {
        ?><li><a href="#"><?=trim(htmlentities($list))?></a></li><?php
    }
    ?></ul><?php
}

?>

</body>
</html>
<?php