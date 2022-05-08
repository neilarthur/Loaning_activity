<?php
include_once '../auth.php';

if (isset($_POST['deletedata'])) {
	
	$id = $_POST['delete_id'];

    $sql = "DELETE FROM user WHERE user_id = '$id' ";
    $sql_run = mysqli_query($con, $sql);

    if ($sql_run) {

        $query = "DELETE FROM account WHERE user_id = '$id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            header("location:account.php");
        }
        else {
        }
       
        exit;
    }
    else{
         echo "Error deleting record";
    }
}
?>