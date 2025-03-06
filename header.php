<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .custom-shadow {
  box-shadow: 0 8px 20px rgba(var(--bs-dark-rgb), 1);
}
      </style>
      
</head>
<body class="bg-primary">
    <div id="asl">
   <header class="shadow">
    <div class="card m-1" >
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="./img/fitness-gym-logo-letter-m-260nw-2420954215.jpg" alt="Logo" width="50" height="50" class=" align-items-center">
            gym maa
          </a>
        </div>
      </nav>
    </div>

    <div class="card m-1" >
    <nav class="navbar navbar-expand-lg bg-dark" dir="ltr">
        <div class="container-fluid">
          
          <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-primary" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="index.php">Home</a>
              </li>
              <?php if(isset($_SESSION["login"])){ ?>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="logout.php">logout</a>
                </li>
                <?php }else{ ?>
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="login.php">login</a>       
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="signup.php">sign up</a>
              </li>
              <?php } ?>
              <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="admin.php">Admin</a>
              </li>
              <?php }else{ ?>
                <?php } ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" href="footer.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  about us
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#call">Call</a></li>                 
                  <li><a class="dropdown-item" href="#myemail">Email</a></li>
                </ul>
              </li>
              </div>
            
            
            </ul>
            <!-- <form class="d-flex" role="search" >
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
</header>

 <main id="div2" class="container  justify-content-evenly col-12 ">  <!-- align-items-start -->
    
    <div class="container">
        
        
       
   