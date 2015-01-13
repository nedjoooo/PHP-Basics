<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Square Root Sum</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
        <?php $sum=0;
        for($i=0; $i<=100; $i+=2) :
            $sqrt=sqrt($i);
            $sqrtRounded=round($sqrt,2);
            $sum+=$sqrt;
            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$sqrtRounded?></td>
        </tr>
        <?php endfor; ?>
        <tr>
            <th>Total</th>
            <th><?=round($sum,2)?></th>
        </tr>
    </table>
</body>
</html>

<?php
