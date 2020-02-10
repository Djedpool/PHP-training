<?php

include 'db.php';
session_start();

if (isset($_POST['login'])) {
    $pass = $_POST['pass'];
    $username = $_POST['username'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $select_user = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user)) {
        $db_id = $row['id'];
        $db_pass = $row['pass'];
        $db_username = $row['username'];
    }

    if(password_verify($pass, $db_pass)) {
        $_SESSION['user_id'] = $db_id;
        $_SESSION['username'] = $db_username;
        
        die('Yes you are sucker!');
        
    }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <form action="" method="post">
                <h1 class="m-5">Please login madafaka!</h1>
                <div class="form-group">
                    <label for="pass">Enter your username!?</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Enter your pass!?</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <input type="submit" name="login" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>