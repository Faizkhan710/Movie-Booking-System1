<?Php
     session_start();
     
      
     include "Shared/Conn.Php"; 

     If (isset($_POST['AddAds'])){
      $adstrailer = $_POST['Adstrailer'];
      $adsdescription = $_POST['Adsdiscription'];
      $newDate = $_POST['Adsdate'];
      $adsdate = date("Y-m-d", strtotime($newDate));
      If(isset($_FILES['Image'])){
           $image = $_FILES['Image'];
           $imagesize = $_FILES['Image']['size'];
           $imagetype = $_FILES['Image']['type'];
           $imagename = $_FILES['Image']['name'];
           $imagetmp =  $_FILES['Image']['tmp_name'];
           $imagerror = $_FILES['Image']['error'];
           $imageblob = addslashes(file_get_contents($imagetmp));


           $allowedext = array("png", "jpg", "jpeg", "gif", "jfif");
           $ext = explode('.', $imagename);
           $imagextension = strtolower(end($ext)); 
          
           
           If(in_array($imagextension, $allowedext)=== FALSE){
            $errors = "This Extensions Isn't Allowed";
           }


           If($imagesize > 123455432178909854 ){
            $errors = "This File Size Isn't Allowed";
           }


           If(empty($errors)){
            $imageblob = addslashes(file_get_contents($imagetmp));
            move_uploaded_file($imagetmp, "images/". $imagename);
           }




      }
      $sql = "Insert Into Ads(ads_trailer,ads_image, ads_descriptions, ads_date, ads_image_blobing) VALUES ('$adstrailer','$imagename', '$adsdescription', '$adsdate', '$imageblob')";
      $query = mysqli_query($conn , $sql);
      If(!$query){
          die();
      }
       else {
           header("Location:Display Ads.Php");
       }
  }

  include "Shared/_Header.Php";  
  include "Shared/_Sidebar.Php";  

?>
<!-- Start #main -->

 <main id="main" class="main">

<!-- Start Page Title -->

  <div class="pagetitle">
    <h1> Form Elements </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Index.Php"> Home </a></li>
        <li class="breadcrumb-item"> Forms </li>
        <li class="breadcrumb-item active"> Elements </li>
      </ol>
    </nav>
  </div>
  
  <!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-10">
      

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> General Form Elements </h5>

            <!-- Start General Form Elements -->
    
            <Form method = "POST" enctype = "multipart/form-data">
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label"> Add Ads Trailer </label>
                <div class="col-sm-10">
                  <input required type="text" name = "Adstrailer" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label"> Add Ads Discription : </label>
                <div class="col-sm-10">
                  <input required type="text" name = "Adsdiscription" class="form-control">
                </div>
              </div>
 
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label"> Add Ads Date : </label>
                <div class="col-sm-10">
                  <input required type="Date" name = "Adsdate" class="form-control">
                </div>
              </div>
 
            

              <div class="mb-3">
               <label class="col-sm-2 col-form-label"> Uplode Image </label>
               <input required class="form-control" name = "Image" id="formFileSm" type="file">
              </div>





         

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" name = "AddAds" class="btn btn-primary" > Add Ads : </button>
                </div>
              </div> 
           </Form>

            <!-- End General Form Elements -->

   </div>
  </div>
  </div>
  </section>

</main>

            <!-- End #main -->
<?Php
 include "Shared/_Footer.Php"  
?>