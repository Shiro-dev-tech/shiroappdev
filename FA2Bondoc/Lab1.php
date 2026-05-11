<!DOCTYPE html>
<html>
<head>
    <title> Length Conversion Table</title>
    <style>
        body {
            font-family: Courier New, monospace;
            margin: 20px;}
        table {
            border-collapse: collapse;
            width: 70%; margin-bottom: 20px;}
            th, td {border: 1px solid #333; padding: 6px; text-align: center;}
            th{background-color: #f0e67c;}
            h2{color: darkblue;}
    </style>
</head>
<body>
    <h2> Length Conversion Table</h2>

<?php
// Metric Conversions
echo "<table>";
echo "<tr><th colspan='2'>Metric Conversions</th></tr>";
echo "<tr><td> 1 centimetre</td><td>".(1*10)." millimetres</td></tr>";
echo "<tr><td> 1 decimetre</td><td>" .(1*10)." centimetres</td></tr>";
echo "<tr><td> 1 metre</td><td>" .(1*100)." centimetres</td></tr>";
echo "<tr><td> 1 kilometre</td><td>" .(1*1000)." metres</td></tr>";
echo "</table>";
// Imperial Conversions
echo "<table>";
echo "<tr><th colspan='2'>Imperial Conversions</th></tr>";
echo "<tr><td> 1 foot</td><td>" .(1*12)." inches</td></tr>";
echo "<tr><td> 1 yard</td><td>" .(1*3)." feet</td></tr>";
echo "<tr><td> 1 chain</td><td>" .(1*22)." yards</td></tr>";
echo "<tr><td> 1 furlong</td><td>" .(1*220)." yards</td></tr>";
echo "<tr><td> 1 mile</td><td>" .(1*1760)." yards</td></tr>";
echo "</table>";
// Metric to Imperial Conversions
echo "<table>";
echo "<tr><th colspan='2'>Metric to Imperial Conversions</th></tr>";
echo "<tr><td> 1 milimetre</td><td>0.03937 inches</td></tr>";
echo "<tr><td> 1 centimetre</td><td>0.3937 inches</td></tr>";
echo "<tr><td> 1 metre</td><td>39.37008 inches</td></tr>";
echo "<tr><td> 1 metre</td><td>3.28084 feet</td></tr>";
echo "<tr><td> 1 metre</td><td>1.09361 yards</td></tr>";
echo "<tr><td> 1 kilometre</td><td>1093.6133 yards</td></tr>";
echo "<tr><td> 1 kilometre</td><td>0.62137 miles</td></tr>";
echo "</table>";
// Imperial to Metric Conversions
echo "<table>";
echo "<tr><th colspan='2'>Imperial to Metric Conversions</th></tr>";
echo "<tr><td> 1 inch</td><td>25.4 centimetres</td></tr>";
echo "<tr><td> 1 foot</td><td>30.48 centimetres</td></tr>";
echo "<tr><td> 1 yard</td><td>91.44 centimetres</td></tr>";
echo "<tr><td> 1 yard</td><td>0.9144 metres</td></tr>";
echo "<tr><td> 1 mile</td><td>1609.344 metres</td></tr>";
echo "<tr><td> 1 mile</td><td>1.609344 kilometres</td></tr>";
echo "</table>";
?>
</body>
</html>

                    