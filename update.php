<?php 

session_start();
$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");

$id="";
$query = "SELECT * FROM `user` WHERE email='$_SESSION[email]'";


$query_run = mysqli_query($con,$query);




while($row = mysqli_fetch_assoc($query_run))
{
    $id= $row['id'];

}





$sql = "UPDATE user SET name = '$_POST[name]' , email = '$_POST[email]',  mobile= '$_POST[mobile]',address = '$_POST[address]'  where email='$_SESSION[email]' ";

$sql_run = mysqli_query($con,$sql);





$con->close();

?>


<script type="text/javascript">

alert("Updated Successfully...");
window.location.href="view_profile.php";


</script>