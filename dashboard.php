<?php 
session_start();

function getuser_issue_book_count()
{

$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");
$user_issue_book_count="";

$query = "SELECT  count(*) as user_issue_book_count from issuebook where student_id = $_SESSION[id]";
$query_run = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($query_run))
{
  $user_issue_book_count = $row['user_issue_book_count'];
}
return( $user_issue_book_count);

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


    <link rel="stylesheet" href="./css/index_style.css">
  <title>LMS:Dashboard</title>

  <style>
      .dropdown-menu a{
          color:black;
        }
       #my
       {
        color:white;
       }
  </style>
</head>

<body>

  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid  style1_container">
      <a class="navbar-brand" href="dashboard.php"> Library Management System(LMS)</a>
              <span  id="username"><strong >Welcome: <?php   echo   $_SESSION['name'];  ?></strong></span>
      <ul class="nav justify-content-end dropdowncolor">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >My Profile</a>

          <div class="dropdown-menu">
            <a href="view_profile.php" class="dropdown-item">View Profile</a>
            <a href="edit_profile.php" class="dropdown-item">Edit Profile</a>
            <a href="change_profile.php" class="dropdown-item">Change password</a>

          </div>
          
        </li>

        <li class="nav-item">
          <a href="logout.php" class="nav-link">Logout</a>
        </li>
        

      </ul>
    </div>
  </nav>
  <span>
    <marquee behavior="" direction="left"> <br> This is Library Management System opens at 8:00 AM and close at 8:00 PM
     </marquee>
  </span> <br> <br>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 ">
       <div class="card text-bg-light mb-3" style="max-width: 18rem;">
           <div class="card-header">Issued Books:</div>
          <div class="card-body"> 
          <h5 class="card-title">No. of issued books:  <?php  echo getuser_issue_book_count();   ?></h5>
         <br>
            <a href="viewissuebook.php"  target="_blank" class="btn btn-primary">View Issue Book</a>

        </div>
        </div>

        
    </div>
   
    <div class="col-md-3"></div>

   
    
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

