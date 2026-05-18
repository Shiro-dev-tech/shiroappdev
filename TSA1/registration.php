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

        .output{
            margin-top: 20px;
        }
    </style>

</head>

<body>

<div class="box">

<h2>Student Registration Form</h2>

<form>

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

    <button type="button">Submit</button>

</form>

<div class="output">
    <h3>Student Information (Sample Display Only)</h3>

    Student Number: 202411034 <br>
    Full Name: Marqi Enzo M. Bondoc <br>
    Name in Proper Case: Marqi Bondoc <br>
    Course: BSITCST <br>
    Year Level: 2 <br>
    Age: 20 <br>
    Address: Quezon City <br>

</div>

</div>

</body>

</html>