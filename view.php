<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container  mt-4">
    <table class="table table-hover text-center   table:hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Course</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php
           include("connection.php"); // Ensure this file contains the correct database connection
           $sql_select = "SELECT * FROM `tbl_Student` ORDER BY Id DESC";
           $sql = $con->query($sql_select);

            while ($row = mysqli_fetch_assoc($sql)) {
                echo '
                    <tr>
                        <td>' . $row['Id'] . '</td>
                        <td>' . $row['Name'] . '</td>
                        <td>' . $row['Gender'] . '</td>
                        <td>' . $row['Age'] . '</td>
                        <td>' . $row['Course'] . '</td>
                        <td>' . $row['Address'] . '</td>
                        <td>
                            <a href="./update.php?id=' . $row['Id'] . '" class="btn btn-primary">Edit</a>
                            <a href="./delete.php?id=' . $row['Id'] . '" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                ';
            }
        ?>

    </table>
</div>

</body>
</html>
