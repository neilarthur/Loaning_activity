<?php

include_once ("../auth.php");

if (isset($_POST['submit'])) {
    
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $category = $_POST['category'];
    $permanent_address = $_POST['permanent_address'];
    $email = $_POST['email'];
    $date_birth = $_POST['date_birth'];
    $mobile_no = $_POST['mobile_no'];
    $id_number = $_POST['id_number'];
    $mother_name = $_POST['mother_name'];
    $mother_no = $_POST['mother_no'];
    $father_name = $_POST['father_name'];
    $father_no = $_POST['father_no'];
    $spouse_name = $_POST['spouse_name'];
    $spouse_no = $_POST['spouse_no'];
    $company_affiliated = $_POST['company_affiliated'];
    $company_address = $_POST['company_address'];
    $company_position = $_POST['company_position'];
    $company_no = $_POST['company_no'];
    $company_status = $_POST['company_status'];


    $query = "INSERT INTO customer(lname,fname,mname,category,permanent_address,email,date_birth,mobile_no,id_number,mother_name,mother_no,father_name,father_no,spouse_name,spouse_no,company_affiliated,company_address,company_no,company_position,company_status)VALUES('$lname','$fname','$mname','$category','$permanent_address','$email','$date_birth','$mobile_no','$id_number','$mother_name','$mother_no','$father_name','$father_no','$spouse_name','$spouse_no','$company_affiliated','$company_address','$company_no','$company_position','$company_status')";

    $results = mysqli_query($con,$query);

    if ($results) {

        header("location:add_costumer.php");
    }
    else{
        echo '<div class="alert alert-danger" role="alert">You have a problem in database</div>';
    }

  }  
?>
