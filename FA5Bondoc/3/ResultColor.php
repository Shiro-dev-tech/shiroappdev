<!DOCTYPE html>
<html>
<head>
 <title>Result Colors</title>
 <style>
 body {
   font-family: "Impact", "Verdana", "Arial Black", sans-serif;
   background: linear-gradient(to bottom, #0b1d3a, #1c2f5c);
   color: #e0e0e0;
   text-align: center;
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
 .color-box {
   margin: 10px auto;
   padding: 10px;
   border-radius: 6px;
   color: #fff;
   font-weight: bold;
   text-shadow: 1px 1px #000;
 }
 </style>
</head>
<body>
<div class="box">
 <h2>My Favorite Colors</h2>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   for ($i = 1; $i <= 5; $i++) {
     $color = htmlspecialchars($_POST["color$i"]);
     echo "<div class='color-box' style='background-color: {$color};'>Favorite Color $i: {$color}</div>";
   }
 } else {
   echo "<p>No colors submitted. Please go back and enter them.</p>";
 }
 ?>
</div>
</body>
</html>
 