<?Php
     
     include "Shared/_Header.Php";  
     include "Shared/_Sidebar.Php"; 
     include "Shared/Conn.Php"; 

$id=$_GET['id'];

     If (isset($_POST['Addmovies'])){

      $mname = $_POST['MName'];
      $mtrailer = $_POST['MTrailer'];
      $mmovietypes = $_POST['CategoryId'];
      If(isset($_FILES['Image'])){
           $image = $_FILES['image'];
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
      $sql = "Update Movies set m_name='$mname', m_trailer='$mtrailer', m_type='$mmovietypes', m_image='$image' ";
      $query = mysqli_query($conn , $sql);
      If(!$query){
          die(mysqli_error($conn));
      }
       else {
           echo "Please Add Image";
       }
  }

     

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
      <?php
      $sql1= "Select * From Movies where m_id='$id'";
      $sqli=mysqli_query($conn, $sql1);
      $row=mysqli_fetch_array($sqli);
      ?>
              <Form method = "POST" enctype = "multipart/form-data">
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Movie Name : </label>
                  <div class="col-sm-10">
                    <input required type="text" value=<?php echo $row['m_name'] ;?> name = "MName" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Movie Trailer : </label>
                  <div class="col-sm-10">
                    <input required type="text" value=<?php echo $row['m_trailer'] ;?> name = "MTrailer" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"> Select Movies Category : </label>
                  <div class="col-sm-10">
                    <select required class="form-select" name = "CategoryId"  aria-label="multiple select example">
                     <?Php
                     $selmoviestypes = 'Select * from Types';
                     $query = mysqli_query($conn, $selmoviestypes);
                     while($row=mysqli_fetch_array($query)){
                      ?>
                      <option value="<?Php echo $row['mt_id']; ?>"> <?Php echo $row['mt_name']; ?></option>
                     <?php
                     }
                     ?>
                    </select>
                  </div>

                <div class="mb-3">
                 <label class="col-sm-2 col-form-label">Small file input example</label>
                 <input required class="form-control" name = "Image" id="formFileSm" type="file">
                </div>



                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" name = "Addmovies" class="btn btn-primary" > Edit Movies : </button>
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