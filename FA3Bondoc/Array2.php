<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 10];
 
$sum = array_sum($numbers);
 
$subtraction = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $subtraction -= $numbers[$i];
}
 
$product = array_product($numbers);
 
$division = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] != 0) {
        $division /= $numbers[$i];
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }
        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 50%;
            background: white;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
 
<h2>Array List: <?php echo implode(", ", $numbers); ?></h2>
 
<table>
    <tr>
        <th>Operation</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $subtraction; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $division; ?></td>
    </tr>
</table>
 
</body>
</html>