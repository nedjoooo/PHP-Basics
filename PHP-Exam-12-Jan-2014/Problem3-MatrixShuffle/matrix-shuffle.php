<?php
$resultString = $_GET['text'];
$matrixSize = $_GET['size'];

function declareA($m, $n, $value = 0) {
    return array_fill(0, $m, array_fill(0, $n, $value));
}
$matrix = declareA($matrixSize, $matrixSize, " ");

$startRowPos = 1;
$endRowPos = $matrixSize - 1;
$startColPos = 0;
$endColPos = $matrixSize - 1;
$rowPos = 0;
$colPos = 0;
$movingPos = "right";
for($i=0; $i<strlen($resultString); $i++) {
    $char = $resultString[$i];
    if($movingPos == "right") {
        if($colPos != $endColPos) {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $colPos++;
        } else {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $endColPos--;
            $rowPos++;
            $movingPos = "down";
        }
    } elseif($movingPos == "down") {
        if($rowPos != $endRowPos) {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $rowPos++;
        } else {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $endRowPos--;
            $colPos--;
            $movingPos = "left";
        }
    } elseif($movingPos == "left") {
        if($colPos != $startColPos) {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $colPos--;
        } else {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $startColPos++;
            $rowPos--;
            $movingPos = "up";
        }
    } elseif($movingPos == "up") {
        if($rowPos != $startRowPos) {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $rowPos--;
        } else {
            if(isset($matrix[$rowPos][$colPos])) {
                $matrix[$rowPos][$colPos] = $char;
            } else {
                $matrix[$rowPos][$colPos]=" ";
            }
            $startRowPos++;
            $colPos++;
            $movingPos="right";
        }
    }
}

$resultString2="";
$resultString1="";
for($i=0; $i<count($matrix); $i++) {
    for($j=0; $j<count($matrix[0]); $j++) {
        if(($i + $j) % 2 == 1) {
            $resultString2 .= $matrix[$i][$j];
        } else {
            $resultString1 .= $matrix[$i][$j];
        }
    }
}

$resultString = $resultString1.$resultString2;

if(is_palindrome($resultString)) {
    echo "<div style='background-color:#4FE000'>".$resultString."</div>";
} else {
    echo "<div style='background-color:#E0000F'>".$resultString."</div>";
}

function is_palindrome($string)
{
    $a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$string));
    return $a==strrev($a);
}