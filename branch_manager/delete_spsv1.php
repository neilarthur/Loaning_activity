<?php
include_once '../auth.php';

if (isset($_POST['deletedata'])) {
	
	$id = $_POST['delete_id'];

	$query = "DELETE FROM customer WHERE customer_id = '$id'";

	$query_run = mysqli_query($con, $query);

	if($query_run){

    	header("location:spsv1.php");
    	exit;
    }
    else{
    	echo "Error deleting record";
    }	
}
?>