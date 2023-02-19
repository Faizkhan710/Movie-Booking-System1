<?Php
        include "Shared/_Header.Php";
		include "Shared/conn.Php";
?>
<!-- breadcrumb area start -->
    <section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1>Top Movie Page</h1>
						</div>
					</div>
				</div>
			</div>
		</section><!-- breadcrumb area end -->
		<!-- portfolio section start -->
		<section class="portfolio-area pt-60">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-6 text-center text-lg-left">
					    <div class="section-title">
							<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
					    <div class="portfolio-menu">
							<ul>
								<li data-filter="*" class="active">Latest</li>
								<li data-filter=".soon">Comming Soon</li>
								<li data-filter=".top">Top Rated</li>
								<li data-filter=".released">Recently Released</li>
							</ul>
						</div>
					</div>
				</div>
				<hr/>
				<div class="row portfolio-item">
					
				<?php
						$getmovie="SELECT * from movies m join  types t ON m.m_type = t.mt_id";
						$rungetmovie = mysqli_query($conn, $getmovie);
						while($row=mysqli_fetch_array($rungetmovie)){

					
							?>
							
					<div class="col-lg-3 col-md-4 col-sm-6 soon released">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="../iz/images/<?php echo $row['m_image'] ?>" alt="portfolio" />
								<a href="<?php echo $row['m_trailer'] ?>" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> <a href="movies details.php?id=<?php echo $row['m_id'] ?>"><?php echo $row['m_name'] ?></a></h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4><?php echo $row['mt_name'] ?></h4>
								</div>
							</div>
						</div>
					</div>
					
         <?php
						}
						 ?>









					<!-- <div class="col-lg-3 col-md-4 col-sm-6 top">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio2.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=5GwYCoL5vws" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> Bhool Bhulaiya 3 </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 soon">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio3.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=9stDegqm9pQ" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> Fidaa </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 top released">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio4.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=x-sgnhYJGOA" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> Thank God </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 released">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio5.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=owPuQjInzO8" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> 2.O </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 soon top">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio6.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=ZFHyPLaENRE" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> Gost Rider 2 </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 soon">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio3.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=yqGDNvX1F4g" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> The Lost City of Z </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 top released">
						<div class="single-portfolio">
							<div class="single-portfolio-img">
								<img src="assets/img/portfolio/portfolio4.png" alt="portfolio" />
								<a href="https://www.youtube.com/watch?v=BUjXzrgntcY" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="portfolio-content">
								<h2> Brahmastra </h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section><!-- portfolio section end -->
		<!-- video section start -->
		
		<section class="video ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="section-title pb-20">
							<h1><i class="icofont icofont-film"></i> Trailers & Videos </h1>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
                    <div class="col-md-12">
						<div class="video-slider mt-20">
							<div class="video-area">
								<img src="assets/img/video/video2.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=wd7QDIIQsFA" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video3.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=IRsFc2gguEg" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video4.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=yNQPwB1NyIw" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video5.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=Mt1OmFL3O34" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video2.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=tbbveDpUZv4" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video3.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=CvhJnD-AHOo" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video4.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=Ke1Y3P9D0Bc" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
							<div class="video-area">
								<img src="assets/img/video/video5.png" alt="video" />
								<a href="https://www.youtube.com/watch?v=DsdT3D_zKF0" class="popup-youtube">
									<i class="icofont icofont-ui-play"></i>
								</a>
							</div>
						</div>
                    </div>
				</div>
			</div>
        </section>
		
		<!-- video section end -->
        <?Php
        include "Shared/_Footer.Php";
        ?>