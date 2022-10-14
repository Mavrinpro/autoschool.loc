<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoschool
 */

get_header();
?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						single_cat_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
				</div>
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>
					<div class="col-lg-12">
						<a href="<?php the_permalink(); ?>" class="white">
							<div class="a_cat">

								<div class="a_footer p-2 mb-2 bg_wawe">
									<span class="white-text text text--u-ie67xv03d"><?php the_title(); ?></span>
									<span class="bg_hover_vawe"></span>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile;
				the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div>
		</div>
	</section>
	<section class="send_order p-4 mb-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="form__header">
					<div class="align-elem">ОСТАВИТЬ ЗАЯВКУ</div>
				</div>
				<div class="form__text">
					<div class="align-elem">Заполните форму на сайте и наш менеджер перезвонит Вам в течение пяти
						минут
					</div>
				</div>
				<form action="" method="post" class="needs-validation col-md-12" novalidate>
					<!-- Default input -->
					<!-- Material input -->
					<div class="row justify-content-center shadow-lg p-4 p-md-5 rounded">
						<div class="col-lg-3 col-md-4 mb-2 mb-md-0">
							<input class="wm-input-default" placeholder="* Ваше имя: " type="text" size="1"
							       maxlength="100" value="" name="d[0]" id="d[0]" required="">

						</div>

						<!-- Default input -->

						<div class="col-lg-3 col-md-4 mb-2 mb-md-0">
							<input class="wm-input-default" placeholder="* Телефон: " type="text" size="1"
							       maxlength="100" value="" name="d[1]" id="d[1]" required="">

						</div>
						<div class=" col-lg-2 col-md-3">
							<div class="more text-center">
								<a data-toggle="modal" data-target="#orangeModalSubscription" href="##"
								   class="w-100"><span class="align-elem">Записаться</span></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php
get_sidebar();
get_footer();
