<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body  class="bg-dark  text-white">

<div class="container  w-50   mt-3">
    <h1  class="text-center">Insert Form</h1>
    <form action=""   method="post"   >
        <label for=""   class="h5  mt-4" >Name</label>
        <input type="text"  name="txtname"   class="form-control">
        <label for=""  class="h5  mt-3">Gender</label>  <br>
        <input type="radio" name="gender"  class="form-check-input"  value="Male"> Male
        <input type="radio" name="gender"  class="form-check-input"  value="Female"> Female  <br>
        <label for=""  class="h5  mt-3">Age</label>
        <input type="text" name="txtage" class="form-control">
        <label for=""  class="h5 mt-3">Course</label>
        <input type="text"  name="txtcourse"  class="form-control">
        <label for=""  class="h5  mt-3">Address</label>
        <textarea  name="txtaddress"  class="form-control"  cols="30"   rows="2" id=""></textarea>

        <button  type="submit"  name="btnsubmit"  class="btn btn-success  mt-3">Submit</button>
    </form>
</div> 
</body>
</html>





<!-- PHP -->
<?php
   include("connection.php");
   if(isset($_POST['btnsubmit'])){
    $name = $_POST['txtname'];
    $gender = $_POST['gender'];
    $age = $_POST['txtage'];
    $course =$_POST['txtcourse'];
    $address = $_POST['txtaddress'];

        $sql_insert = "INSERT INTO tbl_Student  VALUES(NULL, '$name', '$gender', '$age', '$course', '$address')";
        $result = $con->query($sql_insert);
        if($result == true){
            echo "INSERT SUCCESSFULL";
        }else{
            echo "NO INSERT";
        }

        header("location:view.php");
    }
?>