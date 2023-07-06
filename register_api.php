
<?php 

$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];


$query = "INSERT INTO  user VALUES(NULL,'$name','$email','$password','$mobile','$address')";


$query_run = mysqli_query($con,$query);

$con->close();
?>
<script  type="text/javascript">
alert ("Registration Sucessfully .... You may login now.");
window.location.href="login.php";
</script>