<?php
    include("connection.php");

    $id = $_GET['id'];

    $sql_delete = " DELETE FROM `tbl_Student`  WHERE id = $id";
    $con->query($sql_delete);


    header("location:view.php")
?>