<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "dogdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fields = ["name","breed","age","address","color","height","weight"];
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = ucfirst($field) . " is required.";
        }
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO dogs (name, breed, age, address, color, height, weight) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $_POST["name"], $_POST["breed"], $_POST["age"], $_POST["address"], $_POST["color"], $_POST["height"], $_POST["weight"]);
        $stmt->execute();
        $stmt->close();

        echo "<p style='color:#4a90e2;font-weight:bold;'>Dog information saved successfully!</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dog Information</title>
<style>
body {
   font-family: "Impact","Verdana","Arial Black",sans-serif;
   background: linear-gradient(to bottom, #0b1d3a, #1c2f5c);
   color: #e0e0e0;
}
.box {
   width: 420px;
   background-color: rgba(28,47,92,0.95);
   margin: auto;
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
input {
   width: 100%;
   margin-bottom: 12px;
   padding: 10px;
   border: 2px solid #4a90e2;
   border-radius: 6px;
   background-color: #0b1d3a;
   color: #e0e0e0;
   font-family: "Verdana", sans-serif;
}
button {
   width: 100%;
   padding: 12px;
   background: linear-gradient(to bottom, #4a90e2, #357ABD);
   color: white;
   border: none;
   border-radius: 6px;
   cursor: pointer;
   font-size: 14px;
   font-weight: bold;
   text-transform: uppercase;
}
button:hover { background: #1c2f5c; }
.error { color: #ff6b6b; font-weight: bold; }
</style>
</head>
<body>
<div class="box">
<h2>Dog Information</h2>

<?php if (!empty($errors)): ?>
   <div class="error">
     <?php foreach ($errors as $err) echo "<p>$err</p>"; ?>
   </div>
<?php endif; ?>

<form method="post">
   Name: <input type="text" name="name">
   Breed: <input type="text" name="breed">
   Age: <input type="text" name="age">
   Address: <input type="text" name="address">
   Color: <input type="text" name="color">
   Height: <input type="text" name="height">
   Weight: <input type="text" name="weight">
   <button type="submit">Save</button>
</form>
</div>
</body>
</html>
