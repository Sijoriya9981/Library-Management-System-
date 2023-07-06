<?php 
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
        color:white !important;
        font-size:1.1rem;
        
       }
      .nav-option a{
              color:black !important;
      }
      .nav-option a:hover
      {
        cursor:pointer;
      }
     .mainheading
     {
      color:white !important
     }
      
      
       
  </style>
</head>

<body>

  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid  style1_container">
      <a class="navbar-brand  mainheading" href="dashboard.php"> Library Management System(LMS)</a>
              <span  id="username" class=" mainheading"><strong >Welcome: <?php   echo   $_SESSION['name'];  ?></strong></span>
      <ul class="nav justify-content-end dropdowncolor">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="my" data-toggle="dropdown" >Profile</a>

          <div class="dropdown-menu">
          <a href="view_profil.php" class="dropdown-item">View Profile</a>
            <a href="edit_profil.php" class="dropdown-item">Edit Profile</a>
            <a href="change_passwor.php" class="dropdown-item">Change password</a>

          </div>
          
        </li>

        <li class="nav-item ">
          <a href="../logout.php" class="nav-link  mainheading">Logout</a>
        </li>
        

      </ul>
    </div>
  </nav>
  
  
  
  <span>
    <marquee behavior="" direction="left"> <br> This is Library Management System opens at 8:00 AM and close at 8:00 PM
     </marquee>
  </span> <br> <br>

 <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">


    <table class="table  table-bordered table-hover table-striped">

   <thead>
    <tr>
    <td>Book Name: </td>
    <td>Book No:</td>
    <td>Book Author:</td>
    <td>Issued Date:</td>
    </tr>
   </thead>
<?php 


$con  = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"LMS");


$query = "SELECT *  from issuebook  where student_id = $_SESSION[id]";
$query_run = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($query_run))
{

    ?>
  <tr>

<td> <?php     echo  $row['book_name']?></td>
<td> <?php     echo  $row['book_no']?></td>
<td> <?php     echo  $row['book_author']?></td>

<td> <?php     echo  $row['issue_date']?></td>
                  
    
</tr>
   <?php
}







  ?>

    </table>


    </div>    
    <div class="col-md-2">



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

