<?Php
     
      
     include "Shared/Conn.Php"; 

     If (isset($_POST['Addtheater'])){
        $theatername = $_POST['TName'];
        $theaterlocation = $_POST['TLocation'];
        $sql = "Insert Into Theater(th_name, th_location ) VALUES ('$theatername', '$theaterlocation')";
        $query = mysqli_query($conn , $sql);
        If(!$query){
            die();
        }
         else {
          header("Location:Display Theater.Php");
         }
    }

    include "Shared/_Header.Php";  
    include "Shared/_Sidebar.Php"; 

?>

<main id="main" class="main">

    <!-- Start Page Title -->

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Index.Php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div>
    
     <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- Start General Form Elements -->

              <form method = "POST" >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Theater Name : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "TName" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label"> Theater Location : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "TLocation" class="form-control">
                  </div>
                </div>
                
        
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" name = "Addtheater" class="btn btn-primary"> Add Theater : </button>
                  </div>
                </div>

              </form>
              
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