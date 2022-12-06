<?php
require_once("../functions/getCatgory.php");
require_once("../functions/getOrders.php");
require_once("../admin/productTable.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

	<!-- title -->
	<title>FruitOnWheels</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>

	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>
	<!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index_2.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.php">Static Home</a></li>
										<li><a href="index_2.php">Slider Home</a></li>
									</ul> -->
								</li>
								<li><a href="about.php">About</a></li>
								<!-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.php">404 page</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="shop.php">Shop</a></li>
									</ul>
								</li> -->
								<li><a href="news.php">News</a>
									<!-- <ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul> -->
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a>
									<!-- <ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="single-product.php">Single Product</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul> -->
								</li>
								<li>
									<div class="header-icons">
										<a class='shopping-cart' href='../admin/privilleges.php?Logout=Logout'>Logout</i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>

									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->



	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Fresh & Organic</p>
							<h1>Delicious Seasonal Fruits</h1>
							<div class="hero-btns">
								<a href="shop.php" class="boxed-btn">Fruit Collection</a>
								<a href="contact.php" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<a href='#addbrandModal' data-toggle='modal' class="boxed-btn">Add Categories</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync-alt"></i>
						</div>
						<div class="content">
							<a href='#productModal' data-toggle='modal' class="boxed-btn">Add Product</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<a href='#tipModal' data-toggle='modal' class="boxed-btn">Create Blog</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->



	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
		<div class="container">
			<div class="row clearfix">
				<!--Image Column-->
				<div class="image-column col-lg-6">
					<div class="image">
						<div class="price-box">
							<div class="inner-price">
								<span class="price">
									<strong>30%</strong> <br> off per kg
								</span>
							</div>
						</div>
						<img src="assets/img/a.jpg" alt="">
					</div>
				</div>
				<!--Content Column-->
				<div class="content-column col-lg-6">

					<!--Countdown Timer-->
					<div class="time-counter">
						<div class="time-countdown clearfix" data-countdown="2020/2/01">
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Days</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Hours</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Mins</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Secs</div>
							</div>
						</div>
					</div>
					<a href="cart.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<?php myproductViewTable_fnc(); ?>

			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<?php if (isset($_GET['message'])) : ?>

		<div class='alert' data-id="<? $_GET['message']; ?>"></div>

	<?php endif; ?>




	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 1999</p>
						<h2>We are <span class="orange-text">Fruitkha</span></h2>
						<p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
						<a href="about.php" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	<!-- shop banner -->
	<section class="shop-banner">
		<div class="container">
			<h3>Decem<br> with big <span class="orange-text">Discount...</span></h3>
			<div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
			<a href="shop.php" class="cart-btn btn-lg">Shop Now</a>
		</div>
	</section>
	<!-- end shop banner -->

	<?php if (isset($_GET['message2'])) : ?>

		<div class='alert' data-id="<? $_GET['message2']; ?>"></div>

	<?php endif; ?>

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Customer</span> Orders</h3>
						<p>View All Customer Orders here.</p>
					</div>
				</div>
			</div>
			<!-- product section -->
			<div class="cart-section mt-150 mb-150">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="cart-table-wrap">

								<?php orderedViewTable_fnc(); ?>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- end product section -->

		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<a href="news.php" class="boxed-btn">More News</a>
			</div>
		</div>
	</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Healthy and affordable fruits and assorted is our hallmark</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Ashesi University</li>
							<li>fruitwheels@gmail.com</li>
							<li>+233 27 078 8253</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Shop</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.php">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->


	<!-- Add Category -->
	<div id="addbrandModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../admin/addcategory.php" method="POST">
					<div class="modal-header">
						<h4 class="modal-title" style="color: #051922; font-weight: bolder;">Add Product Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body"></div>
					<div class="form-group">
						<label class="form-label" style="color: #051922;font-weight: bold;">Catgory Name</label>
						<input type="text" class="form-control" name="categoryName" required>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" style="color: #051922;font-weight: bold;" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btnAdd btn-primary" name="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End category -->

	<!-- Add product  Modal -->
	<div id="productModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../admin/addproduct.php" method="POST" style="margin:5% 10%;" enctype="multipart/form-data">
					<div class="modal-header">
						<h4 class="modal-title" style="color: #051922; font-weight: bolder;">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body"></div>
					<div class="form-outline mb-4">
						<label class="form-label" for="ptitle" style="color: #051922;font-weight: bold;">Product Name</label>
						<input type="text" id="ptitle" name="pname" class="form-control" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="mycat" style="color: #051922;font-weight: bold;">Product Category</label>
						<?php getAllCategoryDropdown(); ?>
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pprice" style="color: #051922;font-weight: bold;">Product Price</label>
						<input type="number" name="pprice" id="pprice" class="form-control" placeholder="Price" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pdesc" style="color: #051922;font-weight: bold;">Product Description</label>
						<input type="text" name="pdesc" id="pdesc" class="form-control" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pkeyword" style="color: #051922;font-weight: bold;">Product Keywords</label>
						<input type="text" name="pkeyword" id="pkeyword" class="form-control" placeholder="Keyword" />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="pImage" style="color: #051922;font-weight: bold;">Product Imgae</label>
						<input type="file" name="pImage" id="pImage" class="form-control" accept="image/*" required />
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" style="color: #051922;font-weight: bold;" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btnAdd btn-primary" name="submit" value="Add Product">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End of Product Modal -->

	<!-- Add tips -->
	<div id="tipModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../admin/addtips.php" method="POST" style="margin:5% 10%; " enctype="multipart/form-data">
					<div class="modal-header">
						<h4 class="modal-title" style="color: #051922;; font-weight: bolder;">Create Blog</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body"></div>
					<div class="form-outline mb-4">
						<label class="form-label" for="ptitle" style="color: #051922;font-weight: bold;">Blog Title</label>
						<input type="text" id="ptitle" name="tipname" class="form-control" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="mycat" style="color: #051922;font-weight: bold;">Product Image</label>
						<?php getAllProductDropdown(); ?>
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="blogdate" style="color: #051922;font-weight: bold;">Blog Date</label>
						<input type="date" name="blogdate" id="blogdate" class="form-control" placeholder="Price" required />
					</div>
					<div class="form-outline mb-4">
						<label class="form-label" for="message" style="color: #051922;font-weight: bold;">Blog Message</label><br>
						<textarea name="message" id="message" cols="50" rows="10" placeholder="Blog Message"></textarea>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" style="color: #051922;font-weight: bold;" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btnAdd btn-primary" name="submit" value="Add Product">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End of tips Modal -->

	<script>
		const message2 = $(".alert").data("id")

		if (message2) {
			Swal.fire({
				icon: 'success',
				title: 'Update.',
				text: 'Product Updated Successfully!',
			})
		}
		console.log(message2)
	</script>


	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script>
		const message = $(".alert").data("id")

		if (message) {
			Swal.fire({
				icon: 'warning',
				title: 'Deleted.',
				text: 'Cart Item Has Been Deleted!',
			})
		}
		console.log(message)
	</script>

</body>

</html>