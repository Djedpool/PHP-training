<!doctype html>
<html lang="`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="calc.php" method="POST">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="cal">
        <option value="add">Add</option>
        <option value="sub">Substract</option>
        <option value="mul">Multiply</option>
    </select>
    <button type="submit">Calculate</button>
</form>
<?php



?>
</body>
</html>