<?Php
     
     
     include "Shared/Conn.Php"; 

     If (isset($_POST['Addtickets'])){
        $ttypes = $_POST['TClass'];
        $tclass = $_POST['NTickets'];
        $sql = "Insert Into Tickets(t_class, no_of_tickets) VALUES ('$ttypes', '$tclass')";
        $query = mysqli_query($conn , $sql);
        If(!$query){
            die();
        }
         else {
             header("location:Display Ticket Types.Php");
         }
    }

    include "Shared/_Header.Php";  
    include "Shared/_Sidebar.Php"; 

?>

    <!-- Start End #main -->

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
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- Start General Form Elements -->

              <form method = "POST" >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Ticket Type  </label>
                  <div class="col-sm-10">
                    <input type="text" name = "TClass" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label"> No Of Ticket </label>
                  <div class="col-sm-10">
                    <input type="text" name = "NTickets" class="form-control">
                  </div>
                </div>
                
        
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" name = "Addtickets" class="btn btn-primary"> Add Tickets </button>
                
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
     include "Shared/_Footer.Php";  
?>