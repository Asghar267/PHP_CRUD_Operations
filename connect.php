<?php
 

$con =new mysqli("localhost", "root","", "cruddb");

if($con){
    // echo "Connection Successfull";

}else{
    die(mysqli_error($con));
}


?>