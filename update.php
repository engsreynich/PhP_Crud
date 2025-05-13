<?php
   $Id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body  class="bg-dark  text-white">

<div class="container  w-50   mt-3">
    <h1  class="text-center">Update Form</h1>

    <?php
        include("connection.php");
        $sql_select = "SELECT * FROM tbl_Student WHERE Id = $Id";
        $result = $con->query($sql_select);
        $row = mysqli_fetch_assoc($result);

        echo '
            <form action=""   method="post"   >
                <label for=""   class="h5  mt-4">Name</label>
                <input type="text"  value="'.$row['Name'].'"  name="txtname"   class="form-control">

                <label for=""  class="h5  name="gender"  mt-3">Gender</label>  <br>
            ';
            if($row['gender'] == "male" || $row['gender'] == "Male"){
                echo '
                    <input type="radio" name="gender"  class="form-check-input" checked  value="Male"> Male
                    <input type="radio" name="gender"  class="form-check-input"  value="Female"> Female  <br>
                            
                ';
            } else{
                echo '
                <input type="radio" name="gender"  class="form-check-input"  value="Male"> Male
                <input type="radio" name="gender"  class="form-check-input" checked  value="Female"> Female  <br>
                            
            ';
        }

        echo '
            <label for=""  class="h5  mt-3">Age</label>
            <input type="text"  value="'.$row['Age'].'" name="txtage" class="form-control">

            <label for=""  class="h5 mt-3">Course</label>
            <input type="text"  value="'.$row['Course'].'" name="txtcourse"  class="form-control">

             <label for=""  class="h5  mt-3">Address</label>
            <textarea  name="txtaddress"  class="form-control"  cols="30"   rows="2" id="">'.$row['Address'].'</textarea>

            <button  type="submit"  name="btn_update"  class="btn btn-success  mt-3">Update</button>
            </form>
        ';

    ?>
</div> 
</body>
</html>


<?php
    if(isset($_POST['btn_update'])){
        $name = $_POST['txtname'];
        $gender = $_POST['gender'];
        $age = $_POST['txtage'];
        $course = $_POST['txtcourse'];
        $address = $_POST['txtaddress'];


        $sql_select = " UPDATE tbl_Student SET name='$name', gender='$gender', age='$age', course='$course', address= '$address' WHERE Id = $Id ";
        $result = $con->query($sql_select);
        header("location:view.php");
    }

?>