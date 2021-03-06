<!DOCTYPE html>
<html lang="es" >

<head>
	<meta charset="UTF-8">
	<title>Slideshow Parallax with TweenMax</title>

	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic'>
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/slide.css">
</head>

<body>
	<main class="main-content">
		<section class="slideshow">
			<div class="slideshow-inner">
				<div class="slides">

					<!-- Slide 1 -->

					<div class="slide is-active ">
						<div class="slide-content">
							<div class="caption">
								<div class="title">
									Slide title 1
								</div>
								<div class="text">
									<p>Slide description 1</p>
								</div> 
								<a href="#" class="btn">
									<span class="btn-inner">Learn More</span>
								</a>
							</div>
						</div>
						<div class="image-container"> 
							<img src="IMG/slide/slide1.png" alt="" class="image" />
						</div>
					</div>

					<!-- Slide 2 -->

					<div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">
									Slide title 2
								</div>
								<div class="text">
									<p>Slide description 2</p>
								</div> 
								<a href="#" class="btn">
									<span class="btn-inner">Learn More</span>
								</a>
							</div>
						</div>
						<div class="image-container">
							<img src="IMG/slide/slide2.png" alt="" class="image" />
						</div>
					</div>

					<!-- Slide 3 -->

					<div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">
									Slide title 3
								</div>
								<div class="text">
									<p>Slide description 3</p>
								</div> 
								<a href="#" class="btn">
									<span class="btn-inner">Learn More</span>
								</a>
							</div>
						</div>
						<div class="image-container">
							<img src="IMG/slide/slide3.png" alt="" class="image" />
						</div>
					</div>

					<!-- Slide 4 -->

					<div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">
									Slide title 4
								</div>
								<div class="text">
									<p>Slide description 4</p>
								</div> 
								<a href="#" class="btn">
									<span class="btn-inner">Learn More</span>
								</a>
							</div>
						</div>
						<div class="image-container"> 
							<img src="IMG/slide/slide4.png" alt="" class="image" />
						</div>
					</div>
				</div>

				<!-- Paginación -->
				
				<div class="pagination">
					<div class="item is-active"> 
						<span class="icon">1</span>
					</div>
					<div class="item">
						<span class="icon">2</span>
					</div>
					<div class="item">
						<span class="icon">3</span>
					</div>
					<div class="item">
						<span class="icon">4</span>
					</div>
				</div>
				
				<!-- Flechas -->

				<div class="arrows">
					<div class="arrow prev">
						<span class="svg svg-arrow-left">
							<svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
							<span class="alt sr-only"></span>
						</span>
					</div>

					<div class="arrow next">
						<span class="svg svg-arrow-right">
							<svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
							<span class="alt sr-only"></span>
						</span>
					</div>
				</div>
			</div> 
		</section>
	</main>

<script src='js/jQuery_3.1.1.min.js'></script>
<script src='js/TweenMax.min.js'></script>
<script  src="js/slide.js"></script>

</body>
</html>
