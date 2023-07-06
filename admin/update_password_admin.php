<?php
session_start();


$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");

$password ="";
$query = "SELECT * FROM `LMS`.`admin` WHERE email='$_SESSION[email]'";

$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run))
{
    $password = $row['password'];

}

if($password == $_POST['oldpassword'])
{
    $query = "UPDATE user SET password = '$_POST[newpassword]'  where email = '$_SESSION[email]'";
    $query_run = mysqli_query($con,$query);

}


$con->close();
?>



<script type="text/javascript">

alert("Updated Successfully...");
window.location.href="admin_dashboard.php";


</script>