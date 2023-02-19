<?php
session_start();
include "Shared/Conn.Php";
if(isset($_SESSION['userid'])){
$uid=$_SESSION['userid'];
$getuser="SELECT * from user where u_id ='$uid'";
$runuser=mysqli_query($conn,$getuser);
$row=mysqli_fetch_array($runuser);
}
else {
  header("location:sign up page.php");
}
    
$sql= "SELECT * FROM `booking` b JOin user u ON b.b_useridfk = u.u_id JOIN days d ON b.b_day=d.day_id JOIN time ON time.time_id= b.b_time JOIN movies m ON m.m_id =b.b_movieid where b.b_useridfk= '$uid';";
  $runquery= mysqli_query($conn, $sql);
  $row=mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Booking Form/style.css">
    <title> Invoice </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/r-2.4.0/datatables.min.css"/>
</head>
<body class="main_bg">
<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="Index.Php" target="_blank"><img src="assets/img/logo.png" style="position:absolute; top:5%; left:5%;" alt="logo" /></a>
					</div>


<!-- breadcrumb area start -->
<section >
	<div class="container bg-dark text-white">
	    <div class="row" style="height:10%;">
			<div class="card col-lg-11 bg-dark text-white">
                <div class="card-header bg-dark text-white">Invoice</div>
                <div class="card-body">
                    <h5 class="card-title">Booking Ticket</h5>
                    <table class="responsive table text-white" id="example1"> 
                        <tr>
                        <th>Name</th>
                        <th>Movie</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>No of tickets</th>
                        <th>Total</th>
                        </tr>
                        <tr>
                            <td><?php echo $row['u_name']; ?></td>
                            <td><?php echo $row['m_name']; ?></td>
                            <td><?php echo $row['day_value']; ?></td>
                            <td><?php echo $row['time_value']; ?></td>
                            <td><?php echo $row['b_nofticket']; ?></td>
                            <td><?php echo $row['b_total']; ?></td>
                        </tr>
                    </table>
                    
                </div>
            </div>
	    </div>
	</div>
		</section><!-- breadcrumb area end -->
        </div>
   

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <!-- Template Main JS File -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
     $(document).ready(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
  </script>   
</body>

</html>