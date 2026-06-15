<!DOCTYPE html>
<html>
<head>
<title>Favorite Colors</title>
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
</style>
</head>
<body>
<div class="box">
<h2>Enter Your Favorite Colors</h2>
<form action="ResultColor.php" method="post">
   <input type="text" name="color1" placeholder="Favorite color 1" required>
   <input type="text" name="color2" placeholder="Favorite color 2" required>
   <input type="text" name="color3" placeholder="Favorite color 3" required>
   <input type="text" name="color4" placeholder="Favorite color 4" required>
   <input type="text" name="color5" placeholder="Favorite color 5" required>
   <button type="submit">Send Colors</button>
</form>
</div>
 
<script>
// Restrict input to letters only for color fields
function allowLettersOnly(e) {
   const char = String.fromCharCode(e.which);
   if (!/[A-Za-z]/.test(char)) {
     e.preventDefault();
   }
}
document.querySelector("[name=color1]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=color2]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=color3]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=color4]").addEventListener("keypress", allowLettersOnly);
document.querySelector("[name=color5]").addEventListener("keypress", allowLettersOnly);
</script>
</body>
</html>