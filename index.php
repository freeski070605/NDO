<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NDO Basketball Training</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="styles.css">
	<link href="./node_modules/ekko-lightbox/dist/ekko-lightbox.css" rel="stylesheet">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container">
			<a class="navbar-brand" href="#">NDO Basketball Training</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#training">Training</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#gallery">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Banner -->
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center">
					<h1 class="mt-5 mb-3 text-center">Train Like a Pro</h1>
					<p class="lead mb-3 text-center">Join NDO Basketball Training and take your skills to the next level.</p>
					<a class="btn  mb-3 " href="#contact">Sign Up Now</a>
				</div>
			</div>
		</div>
	</section>

	<!-- About -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="./imgs/317357697_1107027126554168_7308943639394481043_n.jpg" class="img-fluid" alt="Training Session">
				</div>
				<div class="col-lg-6 text-center">
					<h2 class="mt-5 mb-3">About NDO Basketball Training</h2>
					<p class="lead mb-5">NDO Basketball Training offers elite basketball training to athletes of all ages and skill levels. Our experienced coaches will work with you to develop your skills and take your game to the next level.</p>
				</div>
	</div>
</section>

<!-- Training -->
<section id="training">
	<div class="container">
		<h2 class="text-center mt-5 mb-3">Our Training Programs</h2>
		<p class="text-center lead mb-5">We offer a variety of training programs to meet the needs of athletes at all skill levels.</p>
		<div class="row">
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<img src="./imgs/326994940_716424760157978_7181242224660712577_n.jpg" class="card-img-top" alt="Individual Training">
					<div class="card-body">
						<h5 class="card-title">Individual Training</h5>
						<p class="card-text">Our one-on-one training sessions are designed to help athletes develop specific skills and improve their overall game.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<img src="./imgs/333047751_193495786631623_8203275054296658463_n.jpg" class="card-img-top" alt="Group Training">
					<div class="card-body">
						<h5 class="card-title">Group Training</h5>
						<p class="card-text">Our group training sessions offer a fun and competitive environment for athletes to improve their skills and work on team concepts.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<img src="./imgs/331260926_1832232603822259_7542420423486203496_n.jpg" class="card-img-top" alt="Team Training">
					<div class="card-body">
						<h5 class="card-title">Team Training</h5>
						<p class="card-text">Our team training sessions focus on developing team concepts and improving overall team performance.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Gallery -->
<section id="gallery">
	<div class="container">
		<h2 class="text-center mt-5 mb-3">Gallery</h2>
		<p class="text-center lead mb-5">Check out some of our photos and videos from past training sessions and events.</p>
		<div class="row">
			<div class="col-md-4 mb-4">
				<a href="./vid/NDO1.mp4" class="video-popup">
					<div class="card">
						<div class="card-body">
							<img src="./imgs/NDO1.mp4.00_00_27_52.Still001.png" class="img-fluid" alt="Video Thumbnail">
							<p class="card-text btn mt-3">Watch Now</p>
						</div>
					</div>
				</a>
			</div>
			<div id="galleryCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#galleryCarousel" data-slide-to="1"></li>
    <li data-target="#galleryCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./imgs/316027183_802726050809295_6871566195656122544_n.jpg" alt="Gallery Image 1">
    </div>

    <div class="item">
      <img src="./imgs/0M6A8736.MOV.04_17_56_56.Still001.png" alt="Gallery Image 2">
    </div>

    <div class="item">
      <img src="./imgs/0M6A8723.MOV.04_14_47_02.Still001.png" alt="Gallery Image 3">
    </div>

	<div class="item">
      <img src="./imgs/0M6A8673.MOV.04_03_32_24.Still001.png" alt="Gallery Image 4">
    </div>

	<div class="item">
      <img src="./imgs/326557518_568700744846923_1954152580668503792_n.jpg" alt="Gallery Image 5">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#galleryCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#galleryCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

			<!-- <div class="col-md-4 mb-4">
				<a href="./imgs/0M6A8723.MOV.04_14_47_02.Still001.png" data-toggle="lightbox" data-gallery="gallery">
				<img src="./imgs/0M6A8723.MOV.04_14_47_02.Still001.png" class="img-fluid" alt="Gallery Image">
				</a>
			</div>
			<div class="col-md-4 mb-4">
				<a href="./imgs/0M6A8736.MOV.04_17_56_56.Still001.png" data-toggle="lightbox" 					data-gallery="gallery">
					<img src="./imgs/0M6A8736.MOV.04_17_56_56.Still001.png" class="img-fluid" alt="Gallery Image">
				</a>
			</div>
			<div class="col-md-4 mb-4">
				<a href="./imgs/316027183_802726050809295_6871566195656122544_n.jpg" data-toggle="lightbox" data-gallery="gallery">
					<img src="./imgs/316027183_802726050809295_6871566195656122544_n.jpg" class="img-fluid" alt="Gallery Image">
				</a>
			</div>
			<div class="col-md-4 mb-4">
				<a href="./imgs/0M6A8673.MOV.04_03_32_24.Still001.png" data-toggle="lightbox" data-gallery="gallery">
					<img src="./imgs/0M6A8673.MOV.04_03_32_24.Still001.png" class="img-fluid" alt="Gallery Image">
				</a>
			</div>
			<div class="col-md-4 mb-4">
				<a href="./imgs/326557518_568700744846923_1954152580668503792_n.jpg" data-toggle="lightbox" data-gallery="gallery">
					<img src="./imgs/326557518_568700744846923_1954152580668503792_n.jpg" class="img-fluid" alt="Gallery Image">
				</a>
			</div> -->
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact">
	<div class="container">
		<h2 class="text-center mt-5 mb-3">Contact Us</h2>
		<p class="text-center lead mb-5">Get in touch with us to schedule a training session or ask any questions.</p>
		<div class="row">
			<div class="col-md-8 mx-auto">
				<form method="POST" action="./phpmailer/contact_phpmailer_smtp.php">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
					</div>
					<div class="form-group">
						<textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-lg mt-3">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer>
	<div class="container-fluid bg-dark text-white">
		<div class="row">
			<div class="col-md-6 text-center py-3">
				<p class="mb-0">&copy; 2015 NDO Basketball Training</p>
			</div>
			<div class="col-md-6 text-center py-3">
				<p class="mb-0">Follow us on social media</p>
				<a href="#"><i class="fab fa-facebook fa-lg mx-3"></i></a>
				<a href="#"><i class="fab fa-twitter fa-lg mx-3"></i></a>
				<a href="#"><i class="fab fa-instagram fa-lg mx-3"></i></a>
			</div>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Lightbox -->
<script src="./node_modules/ekko-lightbox/dist/ekko-lightbox.js"></script>

<script>
	$(document).on("click", '[data-toggle="lightbox"]', function (event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});
</script>
</body>
</html>








