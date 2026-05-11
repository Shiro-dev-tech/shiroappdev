<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>

    <style>

        body{
            font-family: Arial;
            background-color: lightgray;
        }

        .box{
            width: 400px;
            background-color: white;
            margin: auto;
            padding: 20px;
        }

        input{
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }

        button{
            width: 100%;
            padding: 8px;
        }

    </style>

</head>

<body>

<div class="box">

<h2>Student Registration Form</h2>

<form method="POST">

    Student Number:
    <input type="text" name="studentNo">

    First Name:
    <input type="text" name="firstName">

    Last Name:
    <input type="text" name="lastName">

    Course:
    <input type="text" name="course">

    Year Level:
    <input type="text" name="year">

    Age:
    <input type="number" name="age">

    Address:
    <input type="text" name="address">

    <button type="submit">Submit</button>

</form>

<?php

if(isset($_POST['studentNo'])){

    $studentNo = $_POST['studentNo'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    echo "<h3>Student Information</h3>";

    echo "Student Number: " . $studentNo . "<br>";
    echo "Full Name: " . strtoupper($firstName) . " " . strtoupper($lastName) . "<br>";
    echo "Name in Proper Case: " . ucwords($firstName . " " . $lastName) . "<br>";
    echo "Course: " . strtoupper($course) . "<br>";
    echo "Year Level: " . $year . "<br>";
    echo "Age: " . number_format($age) . "<br>";
    echo "Address: " . ucwords($address) . "<br>";

}

?>

</div>

</body>

</html>