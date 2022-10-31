<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoschool
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo PATH_TO_THEME ?>css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?php echo PATH_TO_THEME ?>css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo PATH_TO_THEME ?>css/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'autoschool' ); ?></a>
<!--    <section>-->
<!--        <div id="top-line">-->
<!--            <div class="container">-->
<!--                <div id="top-links">-->
<!--                    <ul class="nav pull-left list-inline">-->
<!--                        <li><a href="#orangeModalSubscription" data-toggle="modal" data-title="Обратный звонок"-->
<!--                               data-sub_title="Наши менеджеры свяжутся с Вами в ближайшее время!"-->
<!--                               data-btn="Заказать звонок" rel="nofollow"><i class="fa fa-map-marker"></i> --><?php //echo get_field('settings', 72)['adress'] ?><!--</a></li>-->
<!--                    </ul>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <section class="mb-4 mb-md-0">
        <div id="logo-line">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div id="logo "><a href="/" title="Центр страхования"><?php the_custom_logo([['class' =>'egerge']]) ?></a></div>

                    </div>

                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="online-help-box b-l-0"><span class="pe-7s-headphones"></span>
                            <div class="layout column layout_8">
                                <div class="phones-8 widget-5 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
                                    <div class="inner">
                                        <label class="cell-icon" for="tg-phones-8">
                                            <div class="icon"></div>
                                        </label>
                                        <div class="block-body-drop">
                                            <div class="cell-text">

                                                <div class="text_body">
                                                    <div class="align-elem">
                                                        <div><a href="tel:<?php echo get_field('settings', 72)['phone'] ?>"><?php echo get_field('settings', 72)['phone'] ?></a></div>													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <p class="f13 max-width-250 mb-1"><?php echo get_field('settings', 72)['grafik'] ?></p></div>
                    </div>
                    <div class="col-md-3">

                            <div class="more text-center">
                                <a data-toggle="modal" data-target="#orangeModalSubscription" href="##"><span class="align-elem">Перезвоните мне</span></a>
                            </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-fiolet" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">

                        <!-- Navbar brand -->
                        <a class="navbar-brand" href="/"><i class="fa fa-car"></i>  Автопилот 73</a>

                        <!-- Collapse button -->
                        <div class="hamburger hamburger--spin-r navbar-toggler border-0 collapsed" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="hamburger-box navbar-toggler border-0 collapsed">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>

                        <!-- Collapsible content -->
                        <div class="collapse navbar-collapse" id="basicExampleNav">

                            <!-- Links -->

                            <?php wp_nav_menu( [
	                            'theme_location'  => '',
	                            'menu'            => 'Menu 1',
	                            'container'       => '',
	                            'container_class' => '',
	                            'container_id'    => '',
	                            'menu_class'      => 'navbar-nav mr-auto',
	                            'menu_id'         => '',
	                            'echo'            => true,
	                            'fallback_cb'     => 'wp_page_menu',
	                            'before'          => '',
	                            'after'           => '',
	                            'link_before'     => '',
	                            'link_after'      => '',
	                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                            'depth'           => 0,
	                            'walker'          => '',
	                            'add_li_class'  => 'nav-item',
	                            'link_class'   => 'nav-link waves-effect waves-light',
                            ] ); ?>
                            <!-- Links -->

                            <?php get_search_form() ?>
                        </div>
                        <!-- Collapsible content -->

                    </nav>
                </div>
            </div>
        </div>
    </section>
