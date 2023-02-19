<?Php 
     session_start();
     if(!isset($_SESSION['Adminid'])){
      header("location:Login.Php");
      } else {
        $id=$_SESSION['Adminid'];
      }
     If(isset($_POST['Logout'])){
       session_destroy();
       header("location:Login.Php");
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/r-2.4.0/datatables.min.css"/>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../Ismail/Index.Php" target="_blank" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block"> Movie Portal </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
<!-- 
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>End Search Icon -->

       <!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <?php
            include "Conn.php";
            $faq="SELECT count(uc_id) as num  from comments";
            $runfaq= mysqli_query($conn,$faq);
            $rowfaq=mysqli_fetch_array($runfaq);
            ?>
            <span class="badge bg-success badge-number"><?php echo $rowfaq['num']; ?></span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have <?php echo $rowfaq['num']; ?> new messages.
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
          <?php  $comments= "SELECT  * from comments ORDER BY uc_id DESC LIMIT 4";
          $runcomments=mysqli_query($conn,$comments);
            while($rowcomm= mysqli_fetch_array($runcomments)){

          
            ?>
            <li class="message-item">
              <a href="reply.php?id=<?php echo $rowcomm['uc_id']; ?>">
                <div>
                  <h4><?php echo $rowcomm['uc_name']; ?></h4>
                  <p><?php echo $rowcomm['uc_user_massage']; ?></p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          <?php } ?>


          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">
        <?php
          include "Conn.Php";
$admin= "SELECT * from admin where ad_id='$id'";
$runadmin= mysqli_query($conn, $admin);
$row=mysqli_fetch_array($runadmin);
?>

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $row['ad_name']; ?></span>
          </a><!-- End Profile Iamge Icon -->
        
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $row['ad_name']; ?></h6>
              <span><?php echo $row['ad_country']; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Profile.Php">
                <i class="bi bi-person"></i>
                <span> My Profile </span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="Profile.Php">
                <i class="bi bi-gear"></i>
                <span> Account Settings </span>
              </a>
            </li>
            <li> -->
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
              <Form action="logout.php" method = "POST">
              <input type="submit" name = "Logout" value="Sign Out">
              </Form>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->