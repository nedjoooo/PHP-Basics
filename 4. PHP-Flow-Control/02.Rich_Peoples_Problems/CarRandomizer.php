<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Car Randomizer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form method="post">
    Enter cars:
    <input type="text" name="cars">
    <input type="submit" value="Show results">
</form>
<?php
if(isset($_POST['cars']) && !empty($_POST['cars'])) {
    $carsList=$_POST['cars'];
    $cars=preg_split('/[ ,]+/', $carsList);
    ?>
    <table>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
        <?php
            $colors=['red', 'green', 'blue', 'orange', 'yellow', 'silver', 'white'];
            foreach($cars as $carName) {
                $count=rand(1,5);
                $randColor=array_rand($colors);
                ?>
                    <tr>
                        <td><?=$carName?></td>
                        <td><?=$colors[$randColor];?></td>
                        <td><?=$count?></td>
                    </tr>
                <?php
            }
        ?>
        </table>
    <?php
}
    ?>

</body>
</html>