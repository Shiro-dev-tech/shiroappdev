<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #f4f4f4;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Volume of Shapes</h2>

<?php

function volumeCube($s) {
    return pow($s, 3); 
}

function volumeRectPrism($l, $w, $h) {
    return $l * $w * $h; 
}

function volumeCylinder($r, $h) {
    return pi() * pow($r, 2) * $h; 
}

function volumeCone($r, $h) {
    return (pi() * pow($r, 2) * $h) / 3; 
}

function volumeSphere($r) {
    return (4/3) * pi() * pow($r, 3); 
}


$cubeSide = 5;
$rectL = 4; $rectW = 3; $rectH = 6;
$cylR = 3; $cylH = 7;
$coneR = 3; $coneH = 7;
$sphereR = 4;

echo "<table>";
echo "<tr><th>Values</th><th>Formula</th><th>Answer</th></tr>";

echo "<tr><td>s = $cubeSide</td><td>V = s³</td><td>" . volumeCube($cubeSide) . "</td></tr>";
echo "<tr><td>l=$rectL, w=$rectW, h=$rectH</td><td>V = l × w × h</td><td>" . volumeRectPrism($rectL,$rectW,$rectH) . "</td></tr>";
echo "<tr><td>r=$cylR, h=$cylH</td><td>V = πr²h</td><td>" . round(volumeCylinder($cylR,$cylH),2) . "</td></tr>";
echo "<tr><td>r=$coneR, h=$coneH</td><td>V = (πr²h)/3</td><td>" . round(volumeCone($coneR,$coneH),2) . "</td></tr>";
echo "<tr><td>r=$sphereR</td><td>V = (4/3)πr³</td><td>" . round(volumeSphere($sphereR),2) . "</td></tr>";

echo "</table>";
?>

</body>
</html>
