<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>

    <!-- Compiled and minified Bootstrap 3 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>

<!-- container -->
<div class="container">
    <div class="page-header">
        <h1>Create Product</h1>
    </div>
    <?php
        if(isset($_POST['submit'])) {
            include 'config/database.php';

            // posted values
            $post_name = (strip_tags($_POST['name']));
            $post_description = htmlspecialchars(strip_tags($_POST['description']));
            $post_price = htmlspecialchars(strip_tags($_POST['price']));
            $post_created = date('Y-m-d H:i:s');

            try {
                $query = "INSERT INTO products SET ";
                $query .= "name=:name, ";
                $query .= "description=:description, ";
                $query .= "price=:price, ";
                $query .= "created=:created";

                // prepare query for execution
                $stmt = $con->prepare($query);

                // bind the parameters
                $stmt->bindParam(':name', $post_name);
                $stmt->bindParam(':description', $post_description);
                $stmt->bindParam(':price', $post_price);
                $stmt->bindParam(':created', $post_created);

                // Execute th query
                if($stmt->execute()) {
                    echo "<div class='alert alert-success'>Record was saved.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Unable to save record.</div>";
                }
            } catch (PDOException $e) {
                die('ERROR: ' . $e->getMessage());
            }

        }
    ?>
    <!-- html form here where the product information will be entered -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table class="table table-hover table-responsive table-bordered">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" class="form-control"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                    <a href="index.php" class="btn btn-danger">Back to read product</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified Bootstrap 3 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>