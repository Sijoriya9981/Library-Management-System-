<?php 
require('function.php');
session_start();


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
      .mar4 , .mar2 , .mar3{
         margin-left:-22px
      }
      .mar1 , .mar5
      {
          margin-left:40px
      }
      .mar5
      {
        margin-top:30px;
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



</ul>
  
  <span>
    <marquee behavior="" direction="left"> <br> This is Library Management System opens at 8:00 AM and close at 8:00 PM
     </marquee>
  </span> <br> <br>

 <div class="row">
    <div class="col-md-3  mar1">
       <div class="card text-bg-light mb-3" style="max-width: 18rem;">
           <div class="card-header">Registered Users:</div>
       <div class="card-body"> 
       <h5 class="card-title">No. of total users:  <?php   echo  get_user_count(); ?></h5>
       <br>
       <a href="registered_user.php"  target="_blank" class="btn btn-primary btn-danger">View Registered users</a>

      </div>
        </div>

        
    </div>
    <div class="col-md-3 mar2">
       <div class="card text-bg-light mb-3" style="max-width: 18rem;">
           <div class="card-header">Registered Books:</div>
       <div class="card-body">
       <h5 class="card-title">No. of available books:    <?php   echo  get_books_count(); ?> </h5>       <br>

       <a href="registered_books.php" class="btn btn-primary   btn-success" target="_blank">View Registered Books</a>
       </div>
        </div>

        
    </div>
    <div class="col-md-3 mar3">
       <div class="card text-bg-light mb-3" style="max-width: 18rem;">
           <div class="card-header">Registered Category:</div>
       <div class="card-body">
       <h5 class="card-title">No.of book's category:    <?php   echo  get_category_count(); ?></h5>        <br>

       <a href="registered_category.php" class="btn btn-primary btn-warning" target="_blank">View Category</a>

      </div>
        </div>

        
    </div>
    <div class="col-md-3  mar4">
       <div class="card text-bg-light mb-3" style="max-width: 18rem;">
           <div class="card-header">Registerd Authors:</div>
       <div class="card-body">
       <h5 class="card-title">No. of available authors:    <?php   echo   get_author_count(); ?></h5>        <br>

       <a href="registered_author.php" target="_blank" class="btn btn-primary btn-info">View Registered Authors</a>

       </div>
        </div>

        
    </div>
    <br>
    <div class="col-md-3 mar5">
       <div class="card text-bg-light mb-3" style="max-width: 18rem;">
           <div class="card-header">Issue Books:</div>
       <div class="card-body">
       <h5 class="card-title">No. of issue book:    <?php   echo get_issuebook_count(); ?> </h5>        <br>

       <a href="registered_issue_book.php" target="_blank"  class="btn btn-primary btn-secondary">View issue book</a>

       </div>
        </div>

        
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