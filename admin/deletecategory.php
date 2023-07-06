<?php   



  
$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");



$query = "DELETE FROM category where cat_id=$_GET[cid]";
$query_run = mysqli_query($con, $query);



?>
<script type="text/JavaScript"> 
alert("Deleted  Successfully...");
window.location.href="managecategory.php";
</script>
