<?php  
include_once "../auth.php";

if (isset($_POST['reject'])) {
    $uid = $_POST['reject_id'];
    $stat = 'Rejected'; 
    $sql = "UPDATE user SET user_status = '$stat' WHERE user_id ='$uid'";
    $mysq = mysqli_query($con,$sql);
    if ($mysq) {
        header("location:account.php?Rejected");
    }
    else {
        echo mysqli_error($con);
        //header ("location:account.php?error");
    }
    mysqli_close($con);

} 
?>