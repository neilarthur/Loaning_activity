<?php
include_once("../auth.php"); 

if (isset($_POST['save'])) {

    $lastname = $_POST['lastname'];
    $mid_name = $_POST['mid_name'];
    $name = $_POST['name'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $p_address = $_POST['p_address'];
    $birthday = $_POST['birthday'];
    $t_number = $_POST['t_number'];
    $educational = $_POST['educational'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $position = $_POST['position'];


    $sql = "INSERT INTO account (email_address,password) VALUES('$email_address','$password')";
    $result = mysqli_query($con,$sql);

    if ($result) {
        header("location:account.php"); 
    }
    else {
        header("location:account.php");
    }

    $sql1 = "INSERT INTO user (user_id,name,lastname,mid_name,p_address,birthday,t_number,educational,age,gender,civil_status,position) VALUES (LAST_INSERT_ID(),'$name','$lastname','$mid_name','$p_address','$birthday','$t_number','$educational','$age','$gender','$civil_status','$position')";
    $result1 = mysqli_query($con,$sql1);

    if ($result1) {
        header("location:account.php"); 
    }
    else {
        header("location:account.php");
    }
}
?>