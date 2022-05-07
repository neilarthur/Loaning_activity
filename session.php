<?php
session_start();

if(isset($_SESSION['uid'])) {

   $userdata = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$uid'");

   while($rows = mysqli_fetch_array($userdata)) {
      $_SESSION['name'] = $rows['name'];
      $_SESSION['position'] = $rows['position'];
   }
}

else {
   header("location: ../index.php?msg=loginfirst");
}
?>