<!DOCTYPE html>
<html>
<head>
    <title>Lab Activities Menu</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        h1 { color: darkblue; }
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        button {
            padding: 15px 25px;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #333;
            background-color: #f0f0f0;
        }
        button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>PHP Lab Activities</h1>
    <div class="menu">
        <form action="lab1.php">
            <button type="submit">Lab Activity 1</button>
        </form>
        <form action="lab2.php">
            <button type="submit">Lab Activity 2</button>
        </form>
        <form action="lab3.php">
            <button type="submit">Lab Activity 3</button>
        </form>
    </div>
</body>
</html>