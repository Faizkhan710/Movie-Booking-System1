<?php

// if(!isset($_SESSION['Adminid'])){
// header("location:Login.Php");
// } else {
//   $id=$_SESSION['Adminid'];
// }
    include "Shared/_Header.Php";
    include "Shared/_Sidebar.Php";
    include "Shared/Conn.Php";


    




    If (isset($_POST['EditProfile'])){
      $adabout = $_POST['About'];
      $adcompany = $_POST['Company'];
     
      $adcountry = $_POST['Country'];
      $adaddress = $_POST['Address'];
      $adphone = $_POST['Phone'];
      $adimg = $_FILES['Image']['name'];
      move_uploaded_file($_FILES['Image']['tmp_name'], "Images/".$adimg);
      $sql = "UPDATE Admin SET ad_image='$adimg', ad_about= '$adabout', ad_company='$adcompany', ad_country ='$adcountry', ad_address ='$adaddress', ad_phone_no ='$adphone' where ad_id= '$id'";
      $query = mysqli_query($conn , $sql);
      If(!$query){
          die();
      }
       else {
           echo "Error";
       }
  }



    
?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="Index.Php">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">
    <?php
$admin= "SELECT * from admin where ad_id='$id'";
$runadmin= mysqli_query($conn, $admin);
$row=mysqli_fetch_array($runadmin);
?>
      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="Images/<?php echo $row['ad_image']; ?>" alt="Profile" class="rounded-circle">
          <h2><?php echo $row['ad_name']; ?></h2>
          <h3><?php echo $row['ad_country']; ?></h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <!-- <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li> -->

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              <p class="small fst-italic"><?php echo $row['ad_about']; ?></p>

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['ad_name']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Company</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['ad_company']; ?></div>
              </div>


              <div class="row">
                <div class="col-lg-3 col-md-4 label">Country</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['ad_country']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['ad_address']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['ad_phone_no']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['ad_email']; ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form Method ="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><input type="file" name="Image" style="all:none;"><i class="bi bi-upload"></i></a>
                      <!-- <a href="" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea required name="About" class="form-control" id="about" style="height: 100px"><?php echo $row['ad_about'];?></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                  <div class="col-md-8 col-lg-9">
                    <input required name="Company" type="text" class="form-control" id="company" value="<?php echo $row['ad_company'];?>">
                  </div>
                </div>

              

                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                  <div class="col-md-8 col-lg-9">
                    <input required name="Country" type="text" class="form-control" id="Country" value="<?php echo $row['ad_country'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                  <div class="col-md-8 col-lg-9">
                    <input required name="Address" type="text" class="form-control" id="Address" value="<?php echo $row['ad_address'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                  <div class="col-md-8 col-lg-9">
                    <input required name="Phone" type="text" class="form-control" id="Phone" value="<?php echo $row['ad_phone_no'];?>">
                  </div>
                </div>


                <div class="text-center">
                  <button name = "EditProfile" type="submit" class="btn btn-primary"> Edit Profile </button>
                </div>
              </form>
              <!-- End Profile Edit Form -->

            </div>

         

           

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?php
include "Shared/_Footer.Php"
?>