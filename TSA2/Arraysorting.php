<!DOCTYPE html>
<html>
<head>
    <title>My favorite Persona Characters</title>
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
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
        img {
            max-width: 120px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">My favorite Persona Characters</h2>

<?php
$characters = [
    ["img"=>"images/aigis.jpg", "name"=>"Aigis", "desc"=>"Android with emotions", "fact"=>"She is a key member of SEES in Persona 3."],
    ["img"=>"images/ann.jpg", "name"=>"Ann Takamaki", "desc"=>"Stylish and kind", "fact"=>"She is a Phantom Thief in Persona 5."],
    ["img"=>"images/junpei.jpg", "name"=>"Junpei Iori", "desc"=>"Easygoing classmate", "fact"=>"He fights Shadows alongside SEES in Persona 3."],
    ["img"=>"images/kanji.jpg", "name"=>"Kanji Tatsumi", "desc"=>"Tough but caring", "fact"=>"He struggles with identity in Persona 4."],
    ["img"=>"images/makoto.jpg", "name"=>"Makoto Yuki", "desc"=>"Calm leader", "fact"=>"He is the protagonist of Persona 3."],
    ["img"=>"images/makoto_niijima.jpg", "name"=>"Makoto Niijima", "desc"=>"Smart strategist", "fact"=>"She is the Phantom Thieves’ advisor in Persona 5."],
    ["img"=>"images/naoya.jpg", "name"=>"Naoya Toudou", "desc"=>"Quiet student", "fact"=>"He is the protagonist of Persona 1."],
    ["img"=>"images/ren.jpg", "name"=>"Ren Amamiya", "desc"=>"Phantom Thief Joker", "fact"=>"He is the protagonist of Persona 5."],
    ["img"=>"images/rise.jpg", "name"=>"Rise Kujikawa", "desc"=>"Idol and navigator", "fact"=>"She supports the Investigation Team in Persona 4."],
    ["img"=>"images/tatsuya.jpg", "name"=>"Tatsuya Suou", "desc"=>"Serious and burdened", "fact"=>"He is the protagonist of Persona 2."],
    ["img"=>"images/yu.jpg", "name"=>"Yu Narukami", "desc"=>"Transfer student", "fact"=>"He is the protagonist of Persona 4."],
    ["img"=>"images/yukari.jpg", "name"=>"Yukari Takeba", "desc"=>"Cheerful archer", "fact"=>"She is a SEES member in Persona 3."]
];


usort($characters, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});

echo "<table>";
echo "<tr><th>Image</th><th>Name</th><th>Description</th><th>Facts</th></tr>";

foreach ($characters as $char) {
    echo "<tr>";
    echo "<td><img src='".$char["img"]."' alt='".$char["name"]."'></td>";
    echo "<td>".$char["name"]."</td>";
    echo "<td>".$char["desc"]."</td>";
    echo "<td>".$char["fact"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
