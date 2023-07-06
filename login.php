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
  <title>LMS</title>
</head>

<body>

  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid  style1_container">
      <a class="navbar-brand" href="login.php"> Library Management System(LMS)</a>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="admin/admin_login.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

      </ul>
    </div>
  </nav>
  <span>
    <marquee behavior="" direction="left"> <br> This is Library Management System opens at 8:00 AM and close at 8:00 PM
    </marquee>
  </span> <br> <br>


  <div class="row  ">
    <div class="col-md-3" id="side_bar">

      <h5>Library Timing</h5>

      <ul>

        <li>Opening Timing : 8:00 AM</li>
        <li>Closing Timing : 8:00 PM</li>
        <li>(Sunday off)</li>
      </ul>
      <h5>What we provide ?</h5>
    
      <ul>
        <li>Full Furniture</li>
        <li>Free Wi-fi</li>
        <li>News Paper</li>
        <li>Discussion Room</li>
        <li>RO Water</li>
        <li>Peaccefull Environment</li>
      </ul>
    </div>

    <div class="col-md-8" id="main_content">
      <center>

        <h3>User Login form</h3>
        <br>

      </center>


      <form action="login.php" method="post">




        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" id="form6Example5" class="form-control" required autocomplete="off"/>
          <label class="form-label" for="form6Example5">Email</label>
        </div>

        <div class="form-outline mb-4">
          <input type="password" name="password" id="form6Example4" class="form-control" required autocomplete="off"/>
          <label class="form-label" for="form6Example4">Password</label>
        </div>




        <!-- Submit button -->
        <button type="submit" name="login" class="btn btn-primary">Login</button>

      </form>


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

// isset fucntion  is used for knowing button is pressed or not

session_start();

if(isset($_POST['login']))
{

    $con  = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($con,"LMS");
    

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $query = "SELECT * FROM `LMS`. `user`  WHERE email='$email'";

    $query_run = mysqli_query($con,$query);

    while($row = mysqli_fetch_assoc($query_run))
    {
        if($row['email']==$email)
        {

              if($row['password']==$password)
              {
                $_SESSION['name']=$row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['id']=$row['id'];
               


                header("location: dashboard.php");

             
               
             


              }
              else{
                ?>
                <br><br> <center><span class="alert-danger"> <b> Invalid Credentials  </b></span></center>
                 
               <?php
                  
              }
        }
       
    }
    $con->close();
}

?>
