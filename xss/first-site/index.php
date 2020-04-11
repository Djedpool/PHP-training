<?php
 session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS Attack Example</title>
</head>
<body>
<form action="search.php">
    <label>What is your name?</label>
    <input type="text" name="query">
    <input type="submit" value="Go">
</form>
</body>
</html>