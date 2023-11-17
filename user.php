<?php
include 'connect.php';

if(isset($_POST["submit"])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql="insert into `crudtb` (name,email,mobile,password)
    values('$name', '$email', '$mobile', '$password')";

    $result= mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   

    <div class="container my-4">

    <form method="POST">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"  placehoder="Enter your name" name="name" >
   </div>
   <div class="mb-3">

   <label  class="form-label">Email</label>
    <input type="email" class="form-control"  placehoder="Enter your email" name="email" >
   </div>

   <div class="mb-3">
   <label  class="form-label">Mobile</label>
    <input type="text" class="form-control"  placehoder="Enter your mobile number" name="mobile" >
   </div>

   <div class="mb-3">
   <label  class="form-label">Password</label>
    <input type="text" class="form-control"  placehoder="Enter your password" name="password" >
   </div>



  
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->


  <button type="submit"name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>





    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  </body>
</html>