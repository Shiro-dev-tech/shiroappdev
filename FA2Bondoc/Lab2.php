<!DOCTYPE html>
<html>
<head>
    <Title> Grade Ranking Program </Title>
    <style>
        body {
            font-family: Courier New, monospace; margin: 20px;}
            .card {
                border: 1px solid #333;
                padding: 15px;
                width: 300px;
                background-color: #f9f9f9;
                text-alight: center;
            }
            h2 {color : darkbluee; }
            img {width: 80px margin-top: 10px; }
    </style>
</head>
<body>
    <h2> Grade Ranking Program </h2>
    <div class="card">
        <?php
        $grade = 60; /// You can change this value to test different grades
        $rank = "";
        $picture = "";

        // Ranking Logic and Picture Logic
        if($grade >= 93){
            $rank = "A";
            $picture = "A.jpg";
        } elseif ($grade >= 90) {
            $rank = "A-";
            $picture = "A-.jpg";
        } elseif ($grade >= 87) {
            $rank = "B+";
            $picture = "B+.jpg";
        } elseif ($grade >= 83) {
            $rank = "B";
            $picture = "B.jpg";
        } elseif ($grade >= 80) {
            $rank = "B-";
            $picture = "B-.jpg";
        } elseif ($grade >= 77) {
            $rank = "C+";
            $picture = "C+.jpg";
        } elseif ($grade >= 73) {
            $rank = "C";
            $picture = "C.jpg";
        } elseif ($grade >= 70) {
            $rank = "C-";
            $picture = "C-.jpg";
        } elseif ($grade >= 67) {
            $rank = "D+";
            $picture = "D+.jpg";
        } elseif ($grade >= 63) {
            $rank = "D";
            $picture = "D.jpg";
        } elseif ($grade >= 60) {
            $rank = "D-";
            $picture = "D-.jpg";
        } else {
            $rank = "F";
            $picture = "F.jpg";
        }
        // Output
        echo "<div class= 'card'>";
        echo "<h3> Grade: $grade </h3>";
        echo "<h3> Rank: $rank </h3>";
        echo "<img src='$picture' alt='Rank Picture'>";
        echo "</div>";
        ?>
