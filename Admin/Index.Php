<?php
session_start();
if(!isset($_SESSION['Adminid'])){
header("location:Login.Php");
} else {
  $id=$_SESSION['Adminid'];
}
    include "Shared/_Header.Php";
    include "Shared/_Sidebar.Php";
    include "Shared/Conn.Php";
    
?>

    <!-- Start #main -->

<main id="main" class="main">

    <!-- Start Page Title -->

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="Index.Php">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>

    <!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->

    <div class="col-lg-8">
      <div class="row">

        <!-- Start Sales Card -->

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Movies<span>| All</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                <?php $sql = "Select count(m_id) as num From Movies "; 
          $query = mysqli_query($conn , $sql);
          $row = mysqli_fetch_array($query); ?>
                  <h6> <?Php echo $row['num']; ?></h6>
                  <?php $sqlm = "Select count(m_id) as num From Movies where date(m_created) = Curdate()"; 
          $querym = mysqli_query($conn , $sqlm);
          $rowm = mysqli_fetch_array($querym); ?>
                  <span class="text-success small pt-1 fw-bold"><?Php echo $rowm['num']; ?></span> <span class="text-muted small pt-2 ps-1">New</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        
        <!-- End Sales Card -->

        <!-- Revenue Card -->

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                <?php $sql1 = "Select count(th_id) as num From Theater "; 
          $query1 = mysqli_query($conn , $sql1);
          $row1 = mysqli_fetch_array($query1); ?>
                  <h6> <?Php echo $row1['num']; ?></h6>
                  <?php $sql2 = "Select count(th_id) as num From Theater where date(th_created) = Curdate()"; 
          $query2 = mysqli_query($conn , $sql2);
          $row2 = mysqli_fetch_array($query2); ?>
                  <span class="text-success small pt-1 fw-bold"><?Php echo $row2['num']; ?></span> <span class="text-muted small pt-2 ps-1">New</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        
        <!-- End Revenue Card -->

        <!-- Start Customers Card -->

        <div class="col-xxl-4 col-md-6">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div>
        
        <!-- End Customers Card -->
  <!-- Start Sales Card -->

  <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Movies<span>| All</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                <?php $sql = "Select count(mt_id) as num From types "; 
          $query = mysqli_query($conn , $sql);
          $row = mysqli_fetch_array($query); ?>
                  <h6> <?Php echo $row['num']; ?></h6>
                  <?php $sqlm = "Select count(mt_id) as num From Types where date(mt_created) = Curdate()"; 
          $querym = mysqli_query($conn , $sqlm);
          $rowm = mysqli_fetch_array($querym); ?>
                  <span class="text-success small pt-1 fw-bold"><?Php echo $rowm['num']; ?></span> <span class="text-muted small pt-2 ps-1">New</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        
        <!-- End Sales Card -->
    
        <!-- Start Tickets Content -->

        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#"> Today </a></li>
                <li><a class="dropdown-item" href="#"> This Month </a></li>
                <li><a class="dropdown-item" href="#"> This Year </a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title"> Tickets <span> | Tickets </span></h5>

              <table class="table table-borderless" id="example1">
                <thead>
                  <tr>

                    <th scope="col"> S.NO </th>
                    <th scope="col"> Ticket Class </th>
                    <th scope="col"> Number Of Tickets </th>
                    <th scope="col"> Price per Ticket </th>

                  </tr>
                </thead>
                <tbody>
              
            <?Php
          $sql = "Select * From Tickets"; 
          $query = mysqli_query($conn , $sql);
          while($row = mysqli_fetch_array($query)){
            ?>

         
              <tr>

                <td> <?Php echo $row['t_id'] ?> </td>
                <td> <?Php echo $row['t_class'] ?> </td>
                <td> <?Php echo $row['no_of_tickets'] ?> </td>
                <td> <?Php echo $row['t_price'] ?> </td>

                
              </tr>
              <?Php
            }
            ?>
            </tbody>
              </table>

            </div>

          </div>
        </div>
        
        <!-- End Tickets Content -->

        <!-- Start Ads Content -->

       
        <!-- End Ads content -->

        <!-- Start Movies Content -->

        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#"> Today </a></li>
                <li><a class="dropdown-item" href="#"> This Month </a></li>
                <li><a class="dropdown-item" href="#"> This Year </a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title"> Top Movies <span> | Movies </span></h5>

              <table class="table table-borderless" id="example1">
                <thead>
                  <tr>
                    <th scope="col"> S.NO </th>
                    <th scope="col"> Movies Name </th>
                    <th scope="col"> Movies Types </th>
                    <th scope="col"> Movies Poster </th>
                  </tr>
                </thead>
                <tbody>
              
            <?Php
          $sql = "Select * From Movies Join Types on Movies.m_type=types.mt_id"; 
          $query = mysqli_query($conn , $sql);
          while($row = mysqli_fetch_array($query)){
            ?>

         
              <tr>

                <td> <?Php echo $row['m_id'] ?> </td>
                <td> <?Php echo $row['m_name'] ?> </td>
                <td> <?Php echo $row['mt_name'] ?> </td>
                <td> <img src="images/<?Php echo $row['m_image'] ?>" alt="">  </td>
              
              </tr>
              <?Php
            }
            ?>
            </tbody>
              </table>

            </div>

          </div>
        </div>
        
        <!-- End Movies Content -->

        
       
      </div>
    </div>

       
    
    <!-- End Left side columns -->

    <!-- Start Right side columns -->

    <div class="col-lg-4">

  

     

    

      <!-- Start News & Updates Traffic -->

      <div class="card">
        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
          <?php $sql = "Select * From Ads limit 5"; 
          $query = mysqli_query($conn , $sql);
          while($row = mysqli_fetch_array($query)){
?> 
          <div class="news">
            <div class="post-item clearfix">
              <img src="Images/<?Php echo $row['ads_image'] ?> " alt="">
              <h4><a href=""><?Php echo $row['ads_trailer'] ?> </a></h4>
              <p><?Php echo $row['ads_descriptions'] ?> </p>
            </div>

           <?php

          } ?> 

          </div>
          
          <!-- End sidebar recent posts-->

        </div>
      </div>
      
      <!-- End News & Updates -->

    </div>
    
    <!-- End Right side columns -->

  </div>
</section>

</main>

    <!-- End #main -->

<?php
include "Shared/_Footer.Php"
?>