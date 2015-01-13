<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Annual Expenses</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="post">
    Enter number of years
    <input type="text" name="years">
    <input type="submit" value="Show costs">
</form>
<?php
if(isset($_POST['years']) && !empty($_POST['years'])) {
    ?>
    <table>
        <tr>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total</th>
        </tr>
    <?php
    $currentYear=new DateTime();
    $year=$currentYear->format('Y');
    $period=$_POST['years'];
    for($i=$year;$i>$year-$period;$i--) {
        $annual=[];
        ?>
        <tr>
        <td><?=$i?></td>
        <?php
        for($j=0;$j<12;$j++) {
            $expenses=rand(0,999);
            array_push($annual, $expenses);
            ?>
            <td><?=$expenses?></td>
            <?php
        }
        $total=array_sum($annual);
        ?>
            <td><?=$total?></td>
        </tr><?php
    }
}
?>
    </table>
</body>
</html>