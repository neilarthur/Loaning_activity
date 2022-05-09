<?php

include_once("../auth.php");

if (isset($_POST['edit'])) {
	$update_id 		   = $_POST['update_id'];
    $category          = $_POST['category'];
    $permanent_address = $_POST['permanent_address'];
    $email             = $_POST['email'];
    $mobile_no         = $_POST['mobile_no'];
    $id_number         = $_POST['id_number'];
    $mother_name       = $_POST['mother_name'];
    $father_name       = $_POST['father_name'];
    $spouse_name       = $_POST['spouse_name'];
    $mother_no         = $_POST['mother_no'];
    $father_no         = $_POST['father_no'];
    $spouse_no         = $_POST['spouse_no'];
    $company_affiliated= $_POST['company_affiliated'];
    $company_address   = $_POST['company_address'];
    $company_no        = $_POST['company_no'];
    $company_position  = $_POST['company_position'];
    $company_status    = $_POST['company_status'];

    $loan_account = $_POST['loan_account'];
    $loan_amount = $_POST['loan_amount'];
    $loan_payment = $_POST['loan_payment'];
    $loan_balance = $_POST['loan_balance']; 



    $query_run = "UPDATE customer SET category='$category', permanent_address='$permanent_address',email='$email', mobile_no='$mobile_no', id_number='$id_number', mother_name='$mother_name', father_name ='$father_name', spouse_name='$spouse_name',mother_no = '$mother_no', father_no = '$father_no', spouse_no = '$spouse_no', company_affiliated = '$company_affiliated', company_address = '$company_address', company_no = '$company_no', company_position = '$company_position',company_status = '$company_status' WHERE customer_id='$update_id'";

    $query = mysqli_query($con,$query_run);


    if ($query_run) {


    	echo '<script> alert("Data Updated");</script>';
    	header("Location:atm.php");
    }

    else {
    	echo '<script?> alert ("Data Not Updated"); </script';
    	header("Location:atm.php");
    }

    $sql = "UPDATE loan_info SET loan_account='$loan_account',loan_amount='$loan_amount',loan_payment='$loan_payment',loan_balance='$loan_balance' WHERE customer_id='$update_id'";

    $sql_run = mysqli_query($con,$sql);
}
?>