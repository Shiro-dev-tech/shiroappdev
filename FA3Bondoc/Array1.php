<?php



$people = [

["name" => "Yi Sang", "image" => "images/Yi Sang.jpg", "age" => 21, "birthday" => "June 18", "contact" => "+82 10-2852-9998
"],

["name" => "Faust", "image" => "images/Faust.jpg", "age" => 48, "birthday" => "August 30", "contact" => "+49 170 1080814"],

["name" => "Don Quixote", "image" => "images/Don Quixote.jpg", "age" => 200, "birthday" => "November 12", "contact" => "+34 786 26 16 14"],

["name" => "Sinclair", "image" => "images/Sinclair.jpg", "age" => 15, "birthday" => "July 3", "contact" => "+81 80-1679-9740"],

["name" => "Meursault", "image" => "images/Meursault.jpg", "age" => 37, "birthday" => "January 28", "contact" => "+33 7 38 17 20 88"],

["name" => "Hong Lu", "image" => "images/Hong Lu.jpg", "age" => 23, "birthday" => "April 23", "contact" => "+86 174 0594 7914"],

["name" => "Heathcliff", "image" => "images/Heathcliff.jpg", "age" => 26, "birthday" => "February 19", "contact" => "+44 7459 086960"],

["name" => "Ishmael", "image" => "images/Ishmael.jpg", "age" => 24, "birthday" => "December 5", "contact" => "+1 472-716-1317"],

["name" => "Rodion", "image" => "images/Rodion.jpg", "age" => 38, "birthday" => "June 2", "contact" => "+7 992 918-70-98"],

["name" => "Outis", "image" => "images/Outis.jpg", "age" => 35, "birthday" => "March 25", "contact" => "+39 315 510 4603"],

];


usort($people, function ($a, $b) {

 return strcmp($a['name'], $b['name']);

});

?>



<!DOCTYPE html>

<html>

<head>

<title>Array Activity</title>

 <style>

body {
    font-family: Arial;
    background-color: #1a1a1a; 
    color: #d4af37; 
}
 
table {
    margin: 20px auto;
    border-collapse: collapse;
    width: 80%;
    background: #2b2b2b; 
    color: #d4af37; 
}
 
th, td {
    border: 1px solid #720000;
    padding: 10px;
    text-align: center;
    transition: background-color 0.3s, color 0.3s; 
}
 
th {
    background-color: #860303;
    color: #ffd700; 
}
 
img {
    border-radius: 50%;
}
 
h2 {
    text-align: center;
    color: #ffd700; 
}

.banner-container{
    width: 100%;
    margin: 0;
    padding: 0;
}

.banner {
    width: 100%
    height: auto;
    display: block;
    margin: 0 auto;
    border: none;
    border-radius: 0;
    box-shadow: none;
}
 

td:hover, th:hover {
    background-color: #444444; 
    color: #fffacd; 
    cursor: pointer;







 </style>

</head>

<body>



<div class="banner-container">
  <img src="images/limbus_logo.jpg" alt="Limbus Company Logo" class="banner">
</div>



<table>

 <tr>

 <th>No.</th>

 <th>Name</th>

 <th>Image</th>

 <th>Age</th>

 <th>Birthday</th>

 <th>Contact Number</th>

 </tr>



 <?php foreach ($people as $index => $person): ?>

 <tr>

<td><?php echo $index + 1; ?></td>

 <td><?php echo $person['name']; ?></td>

 <td><img src="<?php echo $person['image']; ?>" width="80"></td>

 <td><?php echo $person['age']; ?></td>

 <td><?php echo $person['birthday']; ?></td>

 <td><?php echo $person['contact']; ?></td>

 </tr>

 <?php endforeach; ?>



</table>



</body>

</html>