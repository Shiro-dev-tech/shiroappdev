<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table</title>

    <style>

        body{
            font-family: Arial;
            text-align: center;
        }

        table{
            border-collapse: collapse;
            margin: auto;
            width: 80%;
        }

        td{
            border: 1px solid black;
            padding: 15px;
            font-size: 20px;
        }

        .white{
            background-color: white;
            color: black;
        }

        .black{
            background-color: black;
            color: white;
        }

    </style>

</head>

<body>

<h1>Multiplication Table</h1>

<table>

<?php

for($row = 0; $row <= 10; $row++){

    echo "<tr>";

    for($col = 0; $col <= 10; $col++){

        $answer = $row * $col;

        if(($row + $col) % 2 == 0){
            $color = "white";
        }
        else{
            $color = "black";
        }

        echo "<td class='$color'>$answer</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>

</html>