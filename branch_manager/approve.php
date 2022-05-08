<?php  
include_once "../auth.php";

if (isset($_POST['approved'])) {
    $uid = $_POST['approve_id'];
    $stat = 'Approved'; 
    $sql = "UPDATE user SET user_status = '$stat' WHERE user_id ='$uid'";
    $mysq = mysqli_query($con,$sql);
    if ($mysq) {
        header("location:account.php?Approved");
    }
    else {
        echo mysqli_error($con);
        //header ("location:account.php?error");
    }
    mysqli_close($con);

} 
?>