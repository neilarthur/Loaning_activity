
<?php
include_once('auth.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email_address = mysqli_real_escape_string($con,$_POST["email_address"]);
    $password = mysqli_real_escape_string($con,$_POST["password"]);

    $sql = "SELECT user_id FROM account WHERE email_address = '$email_address' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    $uid = $row['user_id'];
    
    $_SESSION['uid'] = $uid;

    if($count == 1) {

        $userdata = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$uid'");

        while($rows = mysqli_fetch_array($userdata)) {
            $_SESSION['name'] = $rows['name'];
            $_SESSION['position'] = $rows['position'];
            $_SESSION['islogin'] = true;
        }


        $query = mysqli_query($con, "SELECT position FROM user WHERE user_id = '$uid'");

        while($rows = mysqli_fetch_array($query)) {
            $priv = $rows['position'];

            if ($priv == "admin") {
                header("location: admin/dashboard.php");
            }
            else if ($priv == "branch manager") {
                header("location: branch_manager/dashboard.php");
            }
            else if ($priv == "staff") {
                header("location: staff/dashboard.php");
            }
            else {
                header("location: login.php?msg=invalid");
            }
            
            mysqli_close($con);
        }

    }
    else {
       header("location: login.php?invalid");
    }
}

?>