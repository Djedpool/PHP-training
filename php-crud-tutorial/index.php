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

    <!-- Custom CSS -->
    <style>
        .m-r-1em{ margin-right: 1em; }
        .m-b-1em{ margin-bottom: 1em; }
        .m-l-1em{ margin-left: 1em; }
        .mt0{ margin-top: 0; }
    </style>
</head>
<body>

<!-- container -->
<div class="container">
    <div class="page-header">
        <h1>Read Product</h1>
    </div>
    <?php
        include 'config/database.php';

        // delete message prompt will be here

        // select all data
        $query = "SELECT id, name, description, price FROM products ORDER BY id DESC";
        $stmt = $con->prepare($query);
        $stmt->execute();

        // this is how get number of rows returned
        $num = $stmt->rowCount();

        // link is create record form
        echo  "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";

        if($num>0) {
            echo "<table class='table table-hover table-responsive table-bordered'>";//start table
            // retrieve our table contents
            // fetch() is faster than fetchAll()
            // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                // extract row
                // this will make $row['name'] to
                // just $name only
                extract($row);

                // creating new table row per record
                echo "<tr>";
                echo "<td>{$id}</td>";
                echo "<td>{$name}</td>";
                echo "<td>{$description}</td>";
                echo "<td>&#36;{$price}</td>";
                echo "<td>";
                // read one record
                echo "<a href='read_one.php?id={$id}' class='btn btn-info m-r-1em'>Read</a>";

                // we will use this links on next part of this post
                echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'>Edit</a>";

                // we will use this links on next part of this post
                echo "<a href='#' onclick='delete_user({$id});'  class='btn btn-danger'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<div class='alert alert-danger'>No records found.</div>";
        }
        // end table
        echo "</table>";
    ?>
</div>
<!-- end .container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Compiled and minified Bootstrap 3 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>