<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "dogdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Dog Records</title>
<style>
body {
   font-family: "Impact","Verdana","Arial Black",sans-serif;
   background: linear-gradient(to bottom, #0b1d3a, #1c2f5c);
   color: #e0e0e0;
}
.box {
   width: 500px;
   background-color: rgba(28,47,92,0.95);
   margin: 20px auto;
   padding: 20px;
   border: 3px solid #4a90e2;
   border-radius: 12px;
   box-shadow: 0px 0px 15px #4a90e2;
}
h2 {
   text-align: center;
   color: #4a90e2;
   text-shadow: 2px 2px #000;
}
.record {
   border: 2px solid #4a90e2;
   border-radius: 8px;
   padding: 12px;
   margin-bottom: 15px;
   background-color: #0b1d3a;
}
.record h3 {
   margin: 0 0 10px 0;
   color: #4a90e2;
}
</style>
</head>
<body>
<div class="box">
<h2>Dog Records</h2>

<?php
if ($result->num_rows > 0) {
    $count = 1;
    while($row = $result->fetch_assoc()) {
        echo "<div class='record'>";
        echo "<h3>Dog {$count}</h3>";
        echo "Name: " . htmlspecialchars($row["name"]) . "<br>";
        echo "Breed: " . htmlspecialchars($row["breed"]) . "<br>";
        echo "Age: " . htmlspecialchars($row["age"]) . "<br>";
        echo "Address: " . htmlspecialchars($row["address"]) . "<br>";
        echo "Color: " . htmlspecialchars($row["color"]) . "<br>";
        echo "Height: " . htmlspecialchars($row["height"]) . "<br>";
        echo "Weight: " . htmlspecialchars($row["weight"]) . "<br>";
        echo "</div>";
        $count++;
    }
} else {
    echo "<p>No dog records found.</p>";
}
$conn->close();
?>
</div>
</body>
</html>
