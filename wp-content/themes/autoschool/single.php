<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
					?>
                <?php if (is_single(107)){ ?>
	                <?php $files = get_field( 'documents', 107 ); //dump($files); ?>
                    <div class="col-md-12">
		                <?php foreach ( $files as $key => $file ) {
			                if ( isset( $file['url'] ) ) {
				                if($key % 2 === 0)
					                $wowclass =  'fadeInLeft';
				                else
					                $wowclass =  'fadeInRight';

				                ?>
                                <div class="doc-list-inner__icon-wrapper mb-3 shadow p-3 d-flex align-items-center wow <?php echo $wowclass ?>">
                                    <div><i class="file-type__icon file-type__icon--pdf"></i></div>
                                    <div><a href="<?php echo $file['url'] ?>" target="_blank" class="stretched-link font-weight-bold">
                                         <span
                                                 class="ml-4 d-block"><?php echo $file['title'] ?></span>
                                        </a></div>

                                </div>
			                <?php }

		                } ?>

                    </div>
                   <? } ?>
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
                            <input class="wm-input-default" placeholder="* Ваше имя: " type="text" size="1" maxlength="100" value="" name="name" id="name" required="">

                        </div>

                        <!-- Default input -->

                        <div class="col-lg-3 col-md-4 mb-2 mb-md-0">
                            <input class="wm-input-default" placeholder="* Телефон: " type="text" size="1" maxlength="100" value="" name="phone" id="phone" required="">

                        </div>
                        <div class=" col-lg-2 col-md-3">
                            <div class="more text-center">
                                <button type="submit" class="w-100 btn_submit_form" data-url="<?php echo admin_url('admin-ajax.php'); ?>" data-text_btn="Записаться"><span class="align-elem">Записаться</span></button>
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
