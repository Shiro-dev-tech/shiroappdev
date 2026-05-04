<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Combinations</title>
    <style>
        body {
            font-family: Courier New, monospace;
            margin: 20px;}
</style>
</head>
<body>
    <h1>Two-Digit Combinations</h1>
    <p>Here are all the possible two-digit combinations from 00 to 99:</p>
    <?php
        for ($i = 0; $i <= 99; $i++) {
            printf("%02d<br>", $i);
            if ($i < 99) echo ",";}
    ?>
    </body>
</html>