<?php
function calculate($a, $b, $c) {
    $sum = $a + $b + $c;
    $difference = $a - $b - $c;
    $product = $a * $b * $c;

    if ($b != 0 && $c != 0) {
        $quotient = $a / $b / $c;
    } else {
        $quotient = "Undefined";
    }

    return [
        "sum" => $sum,
        "difference" => $difference,
        "product" => $product,
        "quotient" => $quotient
    ];
}

$a = 67;
$b = 420;
$c = 41;

$result = calculate($a, $b, $c);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 50%;
            background: #fff;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>My Parameter values: <?php echo "$a, $b, $c"; ?></h2>

<table>
    <tr>
        <th>Operation</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $result['sum']; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $result['difference']; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $result['product']; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $result['quotient']; ?></td>
    </tr>
</table>

</body>
</html>
