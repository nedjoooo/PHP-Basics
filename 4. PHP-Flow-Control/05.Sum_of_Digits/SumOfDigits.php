<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sum of Digits</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="post">
    Input string:
    <input type="text" name="inputString">
    <input type="submit">
</form>

<?php
if(isset($_POST['inputString'])) {
    $input=$_POST['inputString'];
    $digitsList=preg_split('/[ ,]+/', $input);
    ?>
    <table>
    <?php
    for($i=0; $i<count($digitsList);$i++) {
        if(is_numeric($digitsList[$i])) {
            ?>
            <tr>
                <td><?= $digitsList[$i] ?></td>
                <td><?= htmlentities(array_sum(str_split($digitsList[$i]))) ?></td>
            </tr>
            <?php
        } else {
            ?>
            <tr>
                <td><?= $digitsList[$i] ?></td>
                <td>I cannot sum that</td>
            </tr>
        <?php
        }
    }
    ?>
    </table>
    <?php
}

?>

</body>
</html>

