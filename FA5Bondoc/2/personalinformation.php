<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$errors = [];
foreach (["firstName","middleName","lastName","dob","address"] as $field) {
   if (empty($_POST[$field])) {
     $errors[] = ucfirst($field) . " is required.";
   }
}
 
if (empty($errors)) {
   setcookie("firstName", $_POST["firstName"], time() + 10);
   setcookie("middleName", $_POST["middleName"], time() + 20);
   setcookie("lastName", $_POST["lastName"], time() + 30);
   setcookie("dob", $_POST["dob"], time() + 20);
   setcookie("address", $_POST["address"], time() + 30);
   header("Location: personalinformation.php");
   exit();
}
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Personal Information</title>
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
.output { margin-top: 20px; }
.error { color: #ff6b6b; font-weight: bold; }
 
@keyframes fadeOut {
   from { opacity: 1; }
   to { opacity: 0; }
}
</style>
</head>
<body>
<div class="box">
<h2>Personal Information</h2>
 
<?php if (!empty($errors)): ?>
   <div class="error">
     <?php foreach ($errors as $err) echo "<p>$err</p>"; ?>
   </div>
<?php endif; ?>
 
<form method="post">
   First Name: <input type="text" name="firstName">
   Middle Name: <input type="text" name="middleName">
   Last Name: <input type="text" name="lastName">
   Date of Birth: <input type="text" name="dob">
   Address: <input type="text" name="address">
   <button type="submit">Submit</button>
</form>
 
<script>
   // Block special characters
   function allowLettersOnly(e) {
     const char = String.fromCharCode(e.which);
     if (!/[A-Za-z]/.test(char)) {
       e.preventDefault();
     }
   }
 
   function allowAddressChars(e) {
     const char = String.fromCharCode(e.which);
     if (!/[A-Za-z0-9\s,.\-]/.test(char)) {
       e.preventDefault();
     }
   }
 
   document.querySelector("[name=firstName]").addEventListener("keypress", allowLettersOnly);
   document.querySelector("[name=middleName]").addEventListener("keypress", allowLettersOnly);
   document.querySelector("[name=lastName]").addEventListener("keypress", allowLettersOnly);
   document.querySelector("[name=address]").addEventListener("keypress", allowAddressChars);
</script>
 
<div class="output">
   <h3>Cookies Output</h3>
   <?php
   $fields = ["firstName","middleName","lastName","dob","address"];
   foreach ($fields as $index => $field) {
     if (isset($_COOKIE[$field])) {
       $delay = ($index+1) * 5; // fade one by one, every 5s
       echo "<p style='animation: fadeOut 3s forwards; animation-delay: {$delay}s;'>$field: " . htmlspecialchars($_COOKIE[$field]) . "</p>";
     }
   }
   ?>
</div>
</div>
</body>
</html>