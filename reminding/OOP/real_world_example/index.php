<?php

include "UserValidator.php";

if(isset($_POST['submit'])) {
    // Validate Entries
    $userValidator = new UserValidator($_POST);
    $errors = $userValidator->validateForm();

    // save data to database
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Some Simple CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="new-user">
        <h2>Create New User</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <label>Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? ''; ?>">
            <div class="error">
                <?php echo $errors['username'] ?? ''; ?>
            </div>

            <label>Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? ''; ?>">
            <div class="error">
                <?php echo $errors['email'] ?? ''; ?>
            </div>

            <input type="submit" value="submit" name="submit">
            
        </form>
    </div>

</body>
</html>