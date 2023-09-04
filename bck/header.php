<?php 
    require('backend/db-con.php');

    $sql = "SELECT * FROM social_contacr";
    $result_social = $db->query($sql);
    $social = $db->fetchAll($result_social);

    $sql = "SELECT * FROM logos";
    $result_logos = $db->query($sql);
    $logos = $db->fetchAll($result_logos);

    $sql_scripts = "SELECT * FROM scripts";
    $result_sql = $db->query($sql_scripts);
    $scripts = $db->fetchAll($result_sql);
    // print($social[0]['id']);
    // exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dial247Security - Official Website</title>
    <!-- CSS source file -->
    <link rel="stylesheet" href="index.css">

     <!-- REMIXICONS -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

     <!-- FONTAWESOME -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $logos[0]['small'] ?>">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&display=swap" rel="stylesheet">

    <!-- Monserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Ionic.io -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <?php
    foreach ($scripts as $script) {
      echo $script['code'];
   
  }
  
  ?>

    <!-- Bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Dial Safe</title>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-sticky top-0" style="z-index: 1;">
        <div class="container-fluid">
  
          <a class="navbar-brand" href="./">
            <img src="<?php echo $logos[0]['medium'] ?>" alt="logo" style="height: 100px; width: 98px;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
              <li class="nav-item ms-sm-5">
                <a class="nav-link active" aria-current="page" href="about-us.php">About Us</a>
              </li>

              <li class="nav-item ms-sm-5">
                <a class="nav-link active" href="./#services">Services</a>
              </li>

              <li class="nav-item dropdown ms-sm-5">
                <a class="nav-link dropdown-toggle active" href="industry.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Industries
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Primary Sector</a></li>
                  <li><a class="dropdown-item" href="#">Law Enforcement Agency</a></li>
                  <li><a class="dropdown-item" href="#">Mining Oil & Gas</a></li>
                  <li><a class="dropdown-item" href="#">Construction & Engineering</a></li>
                  <li><a class="dropdown-item" href="#">Manufacturing</a></li>
                  <li><a class="dropdown-item" href="#">Utilities</a></li>
                  <li><a class="dropdown-item" href="industry.php" style="color: blue;">View all Industries</a></li>
                </ul>
              </li>

              
              <li class="nav-item dropdown ms-sm-5">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Solutions
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="enterprise-safety.php">Enterprise Safety Platform</a></li>
                  <li><a class="dropdown-item" href="personal-safety-app.php">Personal App Safety</a></li>
                  <li><a class="dropdown-item" href="journey-management.php">Journey Management</a></li>
                  <li><a class="dropdown-item" href="dial.php">Dial 24/7 Risk Assessment</a></li>
                  <li><a class="dropdown-item" href="monitoring.php">24/7 Monitoring</a></li>
                  <li><a class="dropdown-item" href="lone.php">Lone Worker</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fw-bold" href="iot" style="color: red;">Deep learning IoT and Data</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">DIALSAFE</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">I-Secure</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">I-Dial</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">I-Track</a></li>
                  <li><a class="dropdown-item" href="#" style="color: blue;">Dial-ThreatHunter</a></li>
            

                </ul>
              </li>

              <li class="nav-item ms-sm-5">
                <a class="nav-link active" href="./#contact">Contact</a>
              </li>
              

            </ul>

            <div class="ms-auto">
                
                <button class="req-btn px-4 py-2 me-3" style="background-color: black; border: 1px solid lightgray;
                border-top-left-radius: 9px;
                border-top-right-radius: 9px;
                border-bottom-left-radius: 9px;">
                    <a href="#" >Request Demo</a>
                </button>
             
                <button class="req-btn px-4 py-2 me-5" style="background-color: black; border: 1px solid lightgray;
                border-top-left-radius: 9px;
                border-top-right-radius: 9px;
                border-bottom-left-radius: 9px;">
                    <a href="https://dial24-7portal.com/login" >Log In</a>
                </button>
            </div>
          </div>
        </div>
    </nav>