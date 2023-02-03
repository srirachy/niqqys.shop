<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package niqqys
 */
get_header();
?>

	<main id="primary" class="site-main">
		<section class="container pb-5 pt-4">
			<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/doggo-one-1600-500.png" class="d-block w-100" alt="dog apparel sale 25% off items"></a>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/doggo-two-1600-500.png" class="d-block w-100" alt="dog toys sale 50% off items"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/doggo-three-1600-500.png" class="d-block w-100" alt="dog spring deals 2023"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/doggo-four-1600-500.png" class="d-block w-100" alt="dog food sale 25% off items"></a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container">
			<h1 class="text-center pt-5">Popular Products</h1>
			<p class="text-center">We offer a number of high quality toys to help keep<br> your pets healthy and spoiled!</p>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products columns=4 limit=4]')?>
			</div>
		</section>

		<section class="categories pb-5 pt-4">
			<div class="categories__container">
				<h1 class="text-center">Categories</h1>
				<p class="text-center">We offer a number of high quality toys to help keep<br> your pets healthy and spoiled!</p>
				<div class="row_container">
					<div class="row d-flex justify-content-center">
						<div class="categories__col rounded overflow-hidden">
							<a href="#" class="category__link"> <!-- might be better for <a href> in <h2></h2> -->
								<img class="category__img" src="<?php echo get_template_directory_uri(); ?>/img/categories/doggo-toys-backup-800-600.jpg" alt="..." loading="lazy">
								<h2 class="category__text text-center bg-primary-opacity-8 text-white">Toys</h2>
							</a>
						</div>
						<div class="categories__col rounded overflow-hidden">
							<a href="#" class="category__link">
								<img class="category__img" src="<?php echo get_template_directory_uri(); ?>/img/categories/doggo-food-800-600.jpg" alt="..." loading="lazy">
								<h2 class="category__text text-center bg-primary-opacity-8 text-white">Food</h2>
							</a>
						</div>
						<div class="categories__col rounded overflow-hidden">
							<a href="#" class="category__link">
								<img class="category__img" src="<?php echo get_template_directory_uri(); ?>/img/categories/doggo-care-600-754.jpg" alt="..." loading="lazy">
								<h2 class="category__text text-center bg-primary-opacity-8 text-white">Care</h2>
							</a>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="categories__col rounded overflow-hidden">
							<a href="#" class="category__link"> 
								<img class="category__img" src="<?php echo get_template_directory_uri(); ?>/img/categories/doggo-apparel-900-600.jpg" alt="..." loading="lazy">
								<h2 class="category__text text-center bg-primary-opacity-8 text-white">Apparel</h2>
							</a>
						</div>
						<div class="categories__col__long rounded overflow-hidden">
							<a href="#" class="category__link">
								<div class="category__sale bg-sale" style="z-index: 1;"></div>
								<img class="category__img__long" src="<?php echo get_template_directory_uri(); ?>/img/categories/doggo-special-offer-1050-700.jpg" alt="..." loading="lazy">
								<h2 class="category__text text-center text-white" style="z-index: 2;">Special Offers</h2>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container pt-4">
			<h1 class="text-center pt-5">Special Offers</h1>
			<p class="text-center">We offer a number of high quality toys to help keep<br> your pets healthy and spoiled!</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[sale_products columns=4 limit=4]')?>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
?>