<?Php
     
     include "Shared/_Header.Php";  
     include "Shared/_Sidebar.Php";
     include "Shared/Conn.Php";
?>

     <!-- Start #main -->

     <main id="main" class="main">

     <!-- Start Page Title -->

<div class="pagetitle">
  <h1>General Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="Index.Php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div>

     <!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Default Table</h5>

          <!-- Start Default Table -->

          <table class="table" id="example1">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> Ticket Class  </th>
                <th scope="col"> Number Of Tickets  </th>
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

                <td scope="row">  <?Php echo $row['t_id'] ?></th>

                <td> <?Php echo $row['t_class'] ?> </td>
                <td> <?Php echo $row['no_of_tickets'] ?> </td>
                <td> <?Php echo $row['t_price'] ?> </td>
              
              </tr>
              <?Php
            }
            ?>
            </tbody>
          </table>

          <!-- End Default Table Example -->

        </div>
      </div>

  </div>
</section>

</main>

         <!-- End #main -->

<?Php
include "Shared/_Footer.Php";
?>