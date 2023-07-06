<?php 
session_start();


  
$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");

$book_no = "";
$book_name = "";
$author_id = "";
$cat_id = "";
$book_price = "";

$query = "SELECT * from book where book_no=$_GET[bn]";
$query_run = mysqli_query($con, $query);
while($row=mysqli_fetch_assoc($query_run))
{
    $book_no = $row['book_no'];
    $book_name = $row['book_name'];
    $author_id = $row['author_id'];
    $cat_id = $row['cat_id'];
    $book_price =$row['book_price'];
}









?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/index_style.css">
  <title>LMS:Dashboard</title>

  <style>
      .dropdown-menu a{
          color:black;
        }
       #my
       {
        color:white;
       }
       .second_nav
       {
        background-color:#e3f3ff9c!important;
        color:black !important;
       }
       .style1_container1 a
       {
        color:black;
        font-size:1.1rem;
        
       }
      .nav-option a{
              color:black !important;
      }
      .nav-option a:hover
      {
        cursor:pointer;
      }
      
       
  </style>
</head>

<body>

  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid  style1_container">
      <a class="navbar-brand" href="login.php"> Library Management System(LMS)</a>
              <span  id="username"><strong >Welcome: <?php   echo   $_SESSION['name'];  ?></strong></span>
      <ul class="nav justify-content-end dropdowncolor">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >Profile</a>

          <div class="dropdown-menu">
          <a href="view_profile_admin.php" class="dropdown-item">View Profile</a>
            <a href="edit_profile_admin.php" class="dropdown-item">Edit Profile</a>
            <a href="change_password_admin.php" class="dropdown-item">Change password</a>

          </div>
          
        </li>

        <li class="nav-item">
          <a href="../logout.php" class="nav-link">Logout</a>
        </li>
        

      </ul>
    </div>
  </nav>
  
  <nav class=" nav navbar second_nav" >
    <div class="container-fluid  style1_container1">
      <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
      <ul class="nav  dropdowncolor">
        
  
              
        <li class="nav-item dropdown   nav-option">
          <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >Books</a>

          <div class="dropdown-menu nav-option">
            <a href="addbook.php" class="dropdown-item">Add Book</a>
            <a href="managebook.php" class="dropdown-item">Manage Books</a>

          </div>
          
        </li>

        <li class="nav-item dropdown nav-option">
          <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >Category</a>

          <div class="dropdown-menu nav-option">
            <a href="addcategory.php" class="dropdown-item">Add New Category</a>
            <a href="managecategory.php" class="dropdown-item">Manage Category</a>

          </div>
          
        </li>

        <li class="nav-item dropdown nav-option">
          <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >Author</a>

          <div class="dropdown-menu nav-option">
            <a href="addauthor.php" class="dropdown-item">Add New Author</a>
            <a href="manageauthor.php" class="dropdown-item">Manage Authors</a>

          </div>
          
        </li>

        
        <li class="nav-item dropdown nav-option">
        <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >Issue Book</a>
        <div class="dropdown-menu nav-option">
            <a href="issuebook.php" class="dropdown-item">Issue Book</a>
            <a href="viewissuebook.php" class="dropdown-item">View Issue Book</a>

          </div>
          
          
        </li>
      </ul>
    </div>
  </nav>
  
  <span>
    <marquee behavior="" direction="left"> <br> This is Library Management System opens at 8:00 AM and close at 8:00 PM
     </marquee>
  </span> <br> <br>

 <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">


    <form action=""  method ="post">

    <div class="form-group">
        <label for="">Book No:</label>
        <input type="text" class="form-control" name="bookno" id=""  required value="<?php  echo  $book_no; ?>" >
    </div>
    <div class="form-group">
        <label for="">Book Name:</label>
        <input type="text" class="form-control" name="bookname" id=""  value="<?php  echo  $book_name; ?>" >
    </div>
    <div class="form-group">
        <label for="">Author id:</label>
        <input type="text" class="form-control" name="authorid" id=""  value="<?php  echo  $author_id; ?>" >
    </div>
    <div class="form-group">
        <label for="">Category id:</label>
        <input type="text" class="form-control" name="categoryid" id=""  value="<?php  echo  $cat_id; ?>" >
    </div>
    <div class="form-group">
        <label for="">Book price:</label>
        <input type="text" class="form-control" name="bookprice" id=""  value="<?php  echo  $book_price; ?>" >
    </div>

    <button class="btn btn-primary" name="update">Update</button>
    </form>

    </div>
    <div class="col-md-4">


    </div>


 </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>


<?php  

if(isset($_POST['update']))
{

    $con  = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"LMS");
    $sql = "UPDATE `LMS`.`book` SET book_name = '$_POST[bookname]',
    author_id = '$_POST[authorid]',
    cat_id = '$_POST[categoryid]',
    book_price='$_POST[bookprice]'
     where book_no = $_GET[bn]";
    $sql_run = mysqli_query($con, $sql);
    


echo '<script type="text/JavaScript"> 
alert("Updated Successfully...");
window.location.href="admin_dashboard.php";
</script>'
;
}



?>