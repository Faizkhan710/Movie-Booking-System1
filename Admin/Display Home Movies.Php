<?Php
     session_start();
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
      <li class="breadcrumb-item active">Movies</li>
    </ol>
  </nav>
</div>

   <!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Movie List </h5>

          <!-- Start Default Table -->

          <table class="table table-bordered table-striped responsive" id="example1">
                <thead>
                  <tr>

                    <th scope="col"> S.NO </th>
                    <th scope="col"> Name </th>
                    <th scope="col"> Description </th>
                    <th scope="col"> Genre </th>
                    <th scope="col"> Writer </th>
                    <th scope="col"> Director </th>
                    <th scope="col"> Release Date </th>
                    <th scope="col"> Language </th>
                    <th scope="col"> Movies Poster </th>
                    <th scope="col">  </th>
                    <th scope="col">  </th>
                    
          
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
                <td> <?Php echo $row['m_description'] ?> </td>
                <td> <?Php echo $row['mt_name'] ?> </td>
                <td> <?Php echo $row['m_writer'] ?> </td>
                <td> <?Php echo $row['m_director'] ?> </td>
                <td> <?Php echo $row['m_release_date'] ?> </td>
                <td> <?Php echo $row['m_language'] ?> </td>
                <td> <img  height="200px" width="200" src="images/<?Php echo $row['m_image'] ?> " alt="">  </td>
                <td> <a href="Edit%20Movies%20Page.Php?id=<?Php echo $row['m_id'] ?>"> <button type="button" class="btn btn-secondary"> Edit Movies </button> </a> </td>
                <td>  <a href="Delete Page.Php?id=<?Php echo $row['m_id'] ?>"> <button type="button" class="btn btn-secondary"> Delete Movies </button>  <a> </td>
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