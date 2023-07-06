<?php   



  
$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");



$query = "DELETE FROM book where book_no=$_GET[bn]";
$query_run = mysqli_query($con, $query);



?>
<script type="text/JavaScript"> 
alert("Deleted  Successfully...");
window.location.href="managebook.php";
</script>
