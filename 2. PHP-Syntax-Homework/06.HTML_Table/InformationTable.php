<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, td, tr {
            border: 1px solid black;
            padding: 2px;
        }
        td:first-child {
            background-color: #ff9c00;
        }
        td:last-child {
            text-align: right;
        }
    </style>
</head>
<?php
$infoArray=["Name", "Phone Number", "Age", "Address"];
$persons=[["Gosho", "0882-321-423", 24, "Hadji Dimitar"], ["Pesho", "0884-888-888", 67, "Suhata Reka"]];


for($j=0;$j<count($persons);$j++) {
    ?><table><tbody><?php
    for($i=0;$i<count($persons[$j]);$i++){
        ?>
        <tr>
            <td><?php echo $infoArray[$i] ?></td>
            <td><?php echo $persons[$j][$i] ?></td>
        </tr>
        <?php
    }
    ?></tbody></table><br><?php
}

