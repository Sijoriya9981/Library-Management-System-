<?php   



  
$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");



$query = "DELETE FROM author where author_id=$_GET[aid]";
$query_run = mysqli_query($con, $query);



?>
<script type="text/JavaScript"> 
alert("Deleted  Successfully...");
window.location.href="manageauthor.php";
</script>
