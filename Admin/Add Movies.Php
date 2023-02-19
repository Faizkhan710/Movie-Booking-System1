<?Php
     
   
     include "Shared/Conn.Php"; 

     If (isset($_POST['Addmovies'])){
      $mname = $_POST['MName'];
      $descriptions = $_POST['MDescriptions'];
      $mtrailer = $_POST['MTrailer'];
      $mmovietypes = $_POST['MCategoryId'];
      $mwriter = $_POST['MWriter'];
      $mdirector = $_POST['MDirector'];
      $newdate = $_POST['MRDate'];
      $mreleasedate = date("Y-m-d", strtotime($newdate));
      $mlanguage = $_POST['MLanguage'];
      If(isset($_FILES['Image'])){
           $image = $_FILES['Image'];
           $imagesize = $_FILES['Image']['size'];
           $imagetype = $_FILES['Image']['type'];
           $imagename = $_FILES['Image']['name'];
           $imagetmp =  $_FILES['Image']['tmp_name'];
           $imagerror = $_FILES['Image']['error'];


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
      $sql = "Insert Into Movies(m_name, m_description, m_trailer, m_type, m_writer, m_director, m_release_date, m_language, m_image) VALUES ('$mname', ' $descriptions ', '$mtrailer', '$mmovietypes', '$mwriter', '$mdirector', '$mreleasedate', '$mlanguage', '$imagename')";
      $query = mysqli_query($conn , $sql);
      If(!$query){
          die();
      }
       else {
        header("Location:Display Home Movies.Php");
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
                  <label for="inputText" class="col-sm-2 col-form-label"> Movie Name : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MName" Placeholder="Add Movie Name" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label"> Movie Descriptios : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MDescriptions" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Add Movie Trailer : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MTrailer" Placeholder="Add Movie Trailer" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"> Select Movies Category : </label>
                  <div class="col-sm-10">
                    <select required class="form-select" name = "MCategoryId" Placeholder="Add Movie Category"  aria-label="multiple select example">
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

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Add Movie Writer : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MWriter" Placeholder="Add Movie Writer" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Add Movie Director : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MDirector" Placeholder="Add Movie Director" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Add Movie Release Date : </label>
                  <div class="col-sm-10">
                    <input required type="date" name = "MRDate" Placeholder="Add Movie Release Date" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Add Movie Language : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MLanguage" Placeholder="Add Movie Language" class="form-control">
                  </div>
                </div>

                <div class="mb-3">
                 <label class="col-sm-2 col-form-label">Small file input example</label>
                 <input required class="form-control" name = "Image" Placeholder="Add Movie Picture" id="formFileSm" type="file">
                </div>



                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" name = "Addmovies" class="btn btn-primary" > Add Movies : </button>
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