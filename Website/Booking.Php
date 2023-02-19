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
    include "Shared/_Header.Php";
  $getmovies="select * from movies";
  $gettheater="select * from theater";
  $gettickets="select * from tickets";
  $gettime="select * from time";
  $getday="select * from days";
  $runmovies=mysqli_query($conn,$getmovies);
  $runtheater=mysqli_query($conn,$gettheater);
  $runtickets=mysqli_query($conn,$gettickets);
  $runtime=mysqli_query($conn,$gettime);
  $runday=mysqli_query($conn,$getday);
 




    If (isset($_POST['book'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $movieid=$_POST['movie'];
    $theatreid=$_POST['theater'];
    $classid=$_POST['class'];
    $tickets=$_POST['tkt'];
    $time=$_POST['time'];
    $day=$_POST['day'];
    $age=$_POST['people'];
    $total=$_POST['doc'];

 
      $sql = "INSERT INTO `booking`( `b_useridfk`, `b_movieid`, `b_theateridfk`, `b_time`, `b_day`, `b_ticket`, `b_nofticket`, `b_total`, `b_ageidfk`) VALUES ('$uid','$movieid','$theatreid','$time','$day','$classid','$tickets','$total','$age')";
      $query = mysqli_query($conn , $sql);
      If(!$query){
          die();
      }
       else {
           header("location:invoice.php");
       }
  }

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Booking Form/style.css">
    <title> Booking </title>
</head>
<!-- breadcrumb area start -->
<section >
			<div class="container">
				<div class="row" style="height:10%;">
				
				</div>
			</div>
		</section><!-- breadcrumb area end -->
<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <h1><span><img src="art-1.png" alt=""></span> Book Now <span><img src="art-1.png" alt=""></span></h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit. </p>
        </div>
        <div class="main-form">

            <form Method="POST" >

                <div>
                    <span> Your full name ? </span>
                    <input type="text" name="name" id="name" value="<?php echo $row['u_name']; ?>" placeholder="Write your name here..." required>
                </div>

                <div>
                    <span> Your email address ? </span>
                    <input type="email" name="email" id="name" value="<?php echo $row['u_email']; ?>" placeholder="Write your email here..." required> 
                </div>

                <div>
                    <span> Movie Name : </span> 
                    <select name="movie" id="" required>

                    <?php while($rowm=mysqli_fetch_array($runmovies)){
                    ?>
 <option value="<?php echo $rowm['m_id']; ?>"><?php echo $rowm['m_name']; ?></option>
                    
               <?php
                    }
                    ?> 
                    </select>
                  </div>
                
                <div>
                    <span> Theater Name : </span>
                    <select name="theater" id="" required>
                    <?php while($rowth=mysqli_fetch_array($runtheater)){
                    ?>
                    <option value="<?php echo $rowth['th_id']; ?>"><?php echo $rowth['th_name']; ?></option>
                 
                        <?php
                    }
                    ?> 
                    </select>
                </div>

                <div>
                    <span> Class : </span>
                    <select name="class" id="ticket" required>
                    <?php while($rowtc=mysqli_fetch_array($runtickets)){
                    ?>
                        <option value="<?php echo $rowtc['t_id']; ?>"> <?php echo $rowtc['t_class']; ?> </option>
                   
                        <?php
                    }
                    ?> 
                    </select>
                </div>
                
                <div>
                    <span> No. of Tickets : </span> 
                    <input type="number" min="1" max="20" name="tkt" id="num" placeholder="" required> 
                </div>
                
                
                <div>
                <span> Day : </span>
                    <select name="day" id="people" required>
                    <?php while($rowtday=mysqli_fetch_array($runday)){
                    ?>
                        <option value="<?php echo $rowtday['day_id']; ?>"> <?php echo $rowtday['day_value']; ?> </option>
                    
                        <?php
                    }
                    ?> 
                    </select>
                </div>

                <div>
                <span> Time : </span>
                    <select name="time" id="people" required>
                    <?php while($rowtime=mysqli_fetch_array($runtime)){
                    ?>
                        <option value="<?php echo $rowtime['time_id']; ?>"> <?php echo $rowtime['time_value']; ?> </option>
                  
                        <?php
                    }
                    ?> 
                    </select>
                </div>

                <div>
                    <span> Age Group </span> 
                    <select name="people" id="people" required>
                        <option value=""> <--- Age group... ---> </option>
                        <option value="1"> under 5 </option>
                        <option value="2"> 5 to 12 years </option>
                        <option value="3"> above 12 </option>
                </div>
                <input type="text" name="doc" id="doc">
                <div id="submit">
                    <input type="submit" name="book" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <!-- Jquery validate cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $("#ticket").change(function(){
   var num=$("#num").val();
    var tkt= $(this).val();
    $.ajax({
      url:"getamount.php",
      datatype:"json",
      data:{
        tkt:tkt,
      },
      success:function(response){
        $("#doc").val(response * num);
       
      },
      error:function(response){
        console.log(response);
      }
    })
  })
  

  
</script>
</body>

</html>