<?Php
        include "Shared/_Header.Php";
        include "Shared/Conn.Php";


		
		If (isset($_POST['Usercomment'])){
			$ucname = $_POST['UCName'];
			$ucemail = $_POST['UCEmail'];
			$ucphonenumber = $_POST['UCPhone'];
			$ucmassage = $_POST['UCMassage'];
			$sql = "Insert Into Comments(uc_name, uc_email, uc_phone_number, uc_user_massage) VALUES ('$ucname', '$ucemail', '$ucphonenumber', '$ucmassage')";
			$query = mysqli_query($conn , $sql);
			If(!$query){
				die();
			}
			 else {
				 echo "Ho Gaya";
			 }
		}
?>
    <!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1> Contact Us </h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
	
		<section class="details-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="details-content">
							<div class="details-overview">
								<h2>Overview</h2>
								<p>Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the future lies buried in the secrets of the past and the hidden history of Transformers on Earth. Now it's up to the unlikely alliance of inventor Cade Yeager, Bumblebee, a n English lord and an Oxford professor to save the world. Transformers: The Last Knight has a deeper mythos and bigger spectacle than its predecessors, yet still ends up being mostly hollow and cacophonous. The first "Transformers" movie that could actually be characterized as badass. Which isn't a bad thing. It may, in fact, be better.</p>
							</div>
							<div class="details-reply">
								<h2>Leave a Reply</h2>
								<form Method="POST">
									<div class="row">
										<div class="col-lg-4">
											<div class="select-container">
												<input required name="UCName" type="text" placeholder="Name"/>
												<i class="icofont icofont-ui-user"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="select-container">
												<input required name="UCEmail" type="email" placeholder="Email"/>
												<i class="icofont icofont-envelope"></i>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="select-container">
												<input required name="UCPhone" type="text" placeholder="Phone"/>
												<i class="icofont icofont-phone"></i>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="textarea-container">
												<textarea required name="UCMassage" type="text" placeholder="Type Here Message"></textarea>
												
											</div>
										</div>
									</div>
									<div class="details-comment">
									<button type="submit" name="Usercomment"> Post Comment </button>
								<p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You may use these HTML tags and attributes: </p>
							</div>
							</form>
							</div>
							
							<div class="details-thumb">
								<div class="details-thumb-prev">
									<div class="thumb-icon">
										<i class="icofont icofont-simple-left"></i>
									</div>
									<div class="thumb-text">
										<h4>Previous Post</h4>
										<p>Standard Post With Gallery</p>
									</div>
								</div>
								<div class="details-thumb-next">
									<div class="thumb-text">
										<h4>Next Post</h4>
										<p>Standard Post With Preview Image</p>
									</div>
									<div class="thumb-icon">
										<i class="icofont icofont-simple-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 text-center text-lg-left">
					    <div class="portfolio-sidebar">
							<img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar2.png" alt="sidebar" />
							<img src="assets/img/sidebar/sidebar4.png" alt="sidebar" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- details area end -->
<?Php
        include "Shared/_Footer.Php";
?>