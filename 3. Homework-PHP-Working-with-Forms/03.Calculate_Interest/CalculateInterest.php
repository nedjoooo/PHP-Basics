<form method="post">
    <p><label>Enter amount<input type="number" name="amount"></label></p>
    <p>
        <label>
            <input type="radio" name="currency" value="usd">USD
            <input type="radio" name="currency" value="eur">EUR
            <input type="radio" name="currency" value="bgn">BGN
        </label>
    </p>
    <p><label>Compount Interest Amount <input type="text" name="interest"></label></p>
    <p>
        <label>
            <select name="period">
                <option value="months6">6 months</option>
                <option value="months12">1 year</option>
                <option value="months24">2 years</option>
                <option value="months60">5 years</option>
            </select>
        </label>
        <input type="submit" value="Calculate" name="submit">
    </p>
</form>
<?php
function calculateInterest($amount, $interest, $period) {
    return $amount*pow((1+$interest/100), $period);
}

if(isset($_POST['submit'])) {
    if(isset($_POST['amount'])&&isset($_POST['currency'])&&isset($_POST['period'])&&isset($_POST['interest'])) {
        $periodText=$_POST['period'];
        switch($periodText) {
            case 'months6': $period=6; break;
            case 'months12': $period=12; break;
            case 'months24': $period=24; break;
            case 'months60': $period=60; break;
        }
        $interest=$_POST['interest']/12;
        $result=calculateInterest($_POST['amount'], $interest, $period);
        echo round($result, 2);
    } else {
        echo "Incorrect inputs! Please enter all fields!";
    }
}
