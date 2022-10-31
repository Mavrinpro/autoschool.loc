<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoschool
 */

?>
<!-- Footer -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="editable_block-32 widget-13 editorElement layer-type-widget mb-4">
                    <div class="header">
                        <div class="align-elem">МЫ НАХОДИМСЯ:</div>
                    </div>
                    <div class="body">
                        <div class="title">
                            <div class="align-elem">КОНТАКТЫ</div>
                        </div>

                    </div>
                </div>
                <div class="address-34 widget-14 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget mb-4">
                    <div class="inner">
                        <label class="cell-icon" for="tg34">
                            <div class="icon"></div>
                        </label>
                        <div class="block-body-drop">
                            <div class="cell-text">
                                <div class="title">
                                    <div class="align-elem">Адрес:</div>
                                </div>
                                <div class="text_body">

                                    <div class="align-elem"><?php echo get_field('settings', 72)['adress'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="phones-35 widget-15 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
                    <div class="inner">
                        <label class="cell-icon" for="tg-phones-35">
                            <div class="icon active"></div>
                        </label>
                        <div class="block-body-drop">
                            <div class="cell-text">
                                <div class="title">
                                    <div class="align-elem">Звоните по номеру</div>
                                </div>
                                <div class="text_body">
                                    <div class="align-elem">
                                        <div><a href="tel:<?php echo get_field('settings', 72)['phone'] ?>"><?php echo get_field('settings', 72)['phone'] ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-17 popup menu-38 wm-widget-menu vertical widget-type-menu_vertical editorElement layer-type-widget"
                     data-child-icons="0">
                    <div class="menu-title">
                        Главное меню
                    </div>

                    <div class="menu-button">
                        Меню
                    </div>

<!--                    <div class="menu-scroll">-->
<!--                        <ul>-->
<!--                            <li class="menu-item first-level"><a href="/produkciya"><span class="menu-item-text">Главная</span></a>-->
<!--                            </li>-->
<!--                            <li class="menu-item first-level"><a href="/prays"><span-->
<!--                                            class="menu-item-text">Услуги</span></a></li>-->
<!--                            <li class="menu-item first-level"><a href="/fotogalereya"><span class="menu-item-text">Прайс-лист</span></a>-->
<!--                            </li>-->
<!--                            <li class="menu-item first-level"><a href="/akcii"><span class="menu-item-text">Услуги</span></a>-->
<!--                            </li>-->
<!--                            <li class="menu-item first-level"><a href="/stati"><span-->
<!--                                            class="menu-item-text">О компании</span></a></li>-->
<!--                            <li class="menu-item first-level"><a href="/stati"><span-->
<!--                                            class="menu-item-text">Контакты</span></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->

	                <?php wp_nav_menu( [
		                'theme_location'  => '',
		                'menu'            => 'Footer basic menu',
		                'container'       => 'div',
		                'container_class' => 'menu-scroll',
		                'container_id'    => '',
		                'menu_class'      => 'menu-scroll',
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

                </div>
            </div>
            <div class="col-md-3">
                <div class="widget-17 popup menu-38 wm-widget-menu vertical widget-type-menu_vertical editorElement layer-type-widget"
                     data-child-icons="0">
                    <div class="menu-title">
                        Услуги
                    </div>

                    <div class="menu-button">
                        Меню
                    </div>

	                <?php wp_nav_menu( [
		                'theme_location'  => '',
		                'menu'            => 'Footer services',
		                'container'       => 'div',
		                'container_class' => 'menu-scroll',
		                'container_id'    => '',
		                'menu_class'      => 'menu-scroll',
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

                </div>
            </div>
        </div>
    </div>
	<?php $date = date( 'Y' ); ?>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?php echo $date == '2022' ? $date : '2022 - ' . $date; ?>
        Copyright:
        <a href="/"> Разработка сайтов</a>
    </div>
    <!-- Copyright -->

</section>
<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
                <h4 class="modal-title white-text w-100 font-weight-bold py-2">Оставьте свои данные</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form3" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form3">Ваше имя</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-phone prefix grey-text"></i>
                    <input type="email" id="form2" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form2">Телефон</label>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-info waves-effect">Отправить <i
                            class="fas fa-paper-plane-o ml-1"></i></a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

</div><!-- #page -->
<!-- Footer -->
<!-- jQuery -->
<script type="text/javascript" src="<?php echo PATH_TO_THEME ?>js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo PATH_TO_THEME ?>js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo PATH_TO_THEME ?>js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo PATH_TO_THEME ?>js/mdb.min.js"></script>
<script type="text/javascript" src="<?php echo PATH_TO_THEME ?>js/customizer.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>



