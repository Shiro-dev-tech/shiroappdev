<!DOCTYPE html>
<html>
<head>
<title>Personal Information (GET)</title>
<style>
body {
   font-family: "Impact", "Verdana", "Arial Black", sans-serif;
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
input[type=submit] {
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
input[type=submit]:hover { background: #1c2f5c; }
.output { margin-top: 20px; }
</style>
</head>
<body>
<div class="box">
<h2>Personal Information (GET)</h2>
<form action="" method="get">
   First Name: <input type="text" name="firstname"><br>
   Middle Name: <input type="text" name="middlename"><br>
   Last Name: <input type="text" name="lastname"><br>
   Date of Birth: <input type="text" name="dob"><br>
   Address: <input type="text" name="address"><br>
   <input type="submit" name="submit" value="Submit">
</form>
 
<div class="output">
<?php
if (isset($_GET['submit'])) {
   $firstname = htmlspecialchars($_GET['firstname']);
   $middlename = htmlspecialchars($_GET['middlename']);
   $lastname = htmlspecialchars($_GET['lastname']);
   $dob = htmlspecialchars($_GET['dob']);
   $address = htmlspecialchars($_GET['address']);
 
   echo "<p>First Name: $firstname</p>";
   echo "<p>Middle Name: $middlename</p>";
   echo "<p>Last Name: $lastname</p>";
   echo "<p>Date of Birth: $dob</p>";
   echo "<p>Address: $address</p>";
}
?>
</div>
</div>
 
<script>
function allowLettersOnly(e) {
   const char = String.fromCharCode(e.which);
   if (!/[A-Za-z]/.test(char)) e.preventDefault();
}
function allowAddressChars(e) {
   const char = String.fromCharCode(e.which);
   if (!/[A-Za-z0-9\s,.\-]/.test(char)) e.preventDefault();
}
 
document.querySelector("[name=firstname]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=middlename]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=lastname]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=address]").addEventListener("keypress", allowAddressChars);
</script>
</body>
</html>