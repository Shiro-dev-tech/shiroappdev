<!DOCTYPE html>
<html>
<head>
    <title>String Functions</title>
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #f4f4f4;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Part 2: String Functions on 20 Different Names</h2>

<?php
$names = [
    "Naoya Toudou",     
    "Maki Sonomura",    
    "Tatsuya Suou",     
    "Maya Amano",       
    "Makoto Yuki",      
    "Yukari Takeba",    
    "Junpei Iori",      
    "Aigis",            
    "Yu Narukami",      
    "Yosuke Hanamura",  
    "Chie Satonaka",    
    "Yukiko Amagi",     
    "Kanji Tatsumi",    
    "Rise Kujikawa",    
    "Ren Amamiya",      
    "Ryuji Sakamoto",   
    "Ann Takamaki",     
    "Yusuke Kitagawa",  
    "Makoto Niijima",   
    "Futaba Sakura"     
];

echo "<table>";
echo "<tr>
        <th>Original</th>
        <th>Length</th>
        <th>Uppercase First</th>
        <th>Replace Vowels</th>
        <th>Position of 'a'</th>
        <th>Reverse</th>
      </tr>";

foreach ($names as $name) {
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>" . strlen($name) . "</td>";
    echo "<td>" . ucfirst($name) . "</td>";
    echo "<td>" . str_replace(['a','e','i','o','u','A','E','I','O','U'], '@', $name) . "</td>";
    echo "<td>" . strpos(strtolower($name), 'a') . "</td>";
    echo "<td>" . strrev($name) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
