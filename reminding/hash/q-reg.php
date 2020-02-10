<?php

    include 'db.php';

    if(isset($_POST['submit'])) {
        $pass = $_POST['pass'];
        $username = $_POST['username'];

        $pass = password_hash($pass, PASSWORD_ARGON2I);

        
        $query = "INSERT INTO users(username, pass) ";
        $query.= "VALUES ('{$username}', '{$pass}')";

        $make_users = mysqli_query($connection, $query);

        if(!$make_users) {
            die('Query bla bla:'.mysqli_error($connection));
        }

        // exit;
        
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
                <h1 class="m-5">Please register madafaka!</h1>
                <div class="form-group">
                    <label for="pass">Enter your username!?</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Enter your pass!?</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.
    slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>