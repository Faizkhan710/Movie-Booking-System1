<?Php
     
    
     include "Shared/Conn.Php"; 

     If (isset($_POST['Addcategory'])){
        $mtypes = $_POST['MTypes'];
      
        $sql = "Insert Into Types(mt_name) VALUES (' $mtypes ')";
        $query = mysqli_query($conn , $sql);
        If(!$query){
            die();
        }
         else {
          header("Location:Display Category Page.Php");
         }
    }

    include "Shared/_Header.Php";  
    include "Shared/_Sidebar.Php"; 

?>

    <!-- Start #main -->

<main id="main" class="main">

    <!-- Start Page Title -->

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Index.Php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Add Genres</li>
        </ol>
      </nav>
    </div>
    
     <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Movie Genres</h5>

              <!-- Start General Form Elements -->

              <form method = "POST" >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Movie Genres : </label>
                  <div class="col-sm-10">
                    <input required type="text" name = "MTypes" class="form-control">
                  </div>
                </div>
                
                
        
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" name = "Addcategory" class="btn btn-primary"> Add Genre </button>
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