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

						 the_title( '<h1 class="entry-title">', '</h1>' );
						the_post_thumbnail('', ['class' => 'img-fluid w-400']);
						?>
                        <table class="table table-hover mb-5">
                            <thead class="table-dark">
                            <tr>
                                <th scope="col">Наименование</th>
                                <th scope="col">Стоимость руб.</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $tablePrice = get_field('price');
                            foreach ( $tablePrice['body'] as $price ) { ?>
                            <tr>
                                    <td><?php echo $price[0]['c'] ?></td>
                                    <td><?php echo $price[1]['c'] ?></td>
                            </tr>
                           <?php } ?>

                            </tbody>
                        </table>
<?php
		the_content();



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
