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
 * @package autoschool
 */

get_header();
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

                </div>
            </div>
        </div>
    </section>
    <section class="send_order p-4 mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="form__header"><div class="align-elem">ОСТАВИТЬ ЗАЯВКУ</div></div>
                <div class="form__text"><div class="align-elem">Заполните форму на сайте и наш менеджер перезвонит Вам в течение пяти минут</div></div>
                <form action="" method="post" class="needs-validation col-md-12" novalidate>
                    <!-- Default input -->
                    <!-- Material input -->
                    <div class="row justify-content-center shadow-lg p-4 p-md-5 rounded">
                        <div class="col-lg-3 col-md-4 mb-2 mb-md-0">
                            <input class="wm-input-default" placeholder="* Ваше имя: " type="text" size="1" maxlength="100" value="" name="d[0]" id="d[0]" required="">

                        </div>

                        <!-- Default input -->

                        <div class="col-lg-3 col-md-4 mb-2 mb-md-0">
                            <input class="wm-input-default" placeholder="* Телефон: " type="text" size="1" maxlength="100" value="" name="d[1]" id="d[1]" required="">

                        </div>
                        <div class=" col-lg-2 col-md-3">
                            <div class="more text-center">
                                <button type="submit" class="w-100"><span class="align-elem">Записаться</span></button>
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
