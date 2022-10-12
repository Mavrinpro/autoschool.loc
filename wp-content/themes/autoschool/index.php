<?php get_header() ?>

    <section class="bg-head pt-5 pb-0 pb-md-5">
        <div class="container h-100">
            <div class="row align-content-center h-100">
                <div class="col-md-6 text-white mb-5 mb-md-0">
                    <h1>ОБУЧАЕМ НА ВСЕ КАТЕГОРИИ</h1>
                    <ul class="list_header">
                        <li>Экзамены ГИБДД на все категории на нашем автодроме</li>
                        <li>Собственный автодром 15000 м2</li>
                        <li>Довозим на автодром и обратно</li>
                        <li>Бесплатный выбор автомобиля и инструктора</li>
                        <li>Рассрочка 0% до 12 месяцев</li>
                    </ul>
                    <div class="more">
                        <a href="/services"><span class="align-elem">Подробнее</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-2 card_form_head p-5 rounded bg-white shadow-lg">
                    <h5>ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ</h5>
                    <form action="" method="post" class="needs-validation" novalidate>
                        <!-- Default input -->
                        <div class=" md-outline mb-3">
                            <input type="text" id="inputIconEx1" class="form-control" name="name" required
                                   placeholder="Ваше имя">

                        </div>
                        <!-- Default input -->
                        <div class=" md-outline mb-3">
                            <input type="text" id="inputIconEx2" class="form-control" name="phone" required
                                   placeholder="Номер телефона">

                        </div>
                        <div class=" md-outline mb-3">
                            <select class="browser-default custom-select">
                                <option selected>Выберите категорию</option>
                                <option value="Категория A">Категория A</option>
                                <option value="Категория B">Категория B</option>
                                <option value="Категория C">Категория C</option>
                                <option value="Категория D">Категория D</option>
                                <option value="Категория BE">Категория BE</option>
                                <option value="Категория CE">Категория CE</option>
                            </select>
                        </div>
                        <div class="more text-center">
                            <a data-toggle="modal" data-target="#orangeModalSubscription" href="##"><span
                                        class="align-elem">Записаться на курс</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 category_blocks">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="header">
                        <div class="header_text">
                            <div class="align-elem">Вы можете обучиться на следующие категории прав</div>
                        </div>
                    </div>
                    <div class="description">
                        <div class="align-elem">
                            <div class="align-elem" wm-editable="true">В НАШЕЙ АВТОШКОЛЕ</div>
                        </div>
                    </div>
                </div>
				<?php $args = array(
					'posts_per_page' => 5,
					'category_name'  => 'services'
				);
				$query      = new WP_Query( 'cat=5&posts_per_page=6&order=ASC' );
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						$services = get_field( 'services' );
						?>


                        <div class="col-lg-4 col-md-6 rounded mb-3">
                            <div class="item-outer rounded p-5">
                                <a href="<?php the_permalink(); ?>"><span class="title"><span
                                                class="align-elem"><?php the_title() ?></span></span></a>
                                <div class="text">
                                    <div class="align-elem"><p><?php echo $services['short_desc'] ?></p></div>
                                </div>
                                <div class="image">
                                    <a href="<?php the_permalink(); ?>">
                            <span class="img-convert img-contain"><img
                                        src="<?php echo $services['icon']['url']
			                            ?>" alt="Категория (А1)"
                                        style="max-width: 100%; max-height: 100%;"></span></a>
                                    <div class="image-inner"></div>
                                </div>
                                <span class="sub-title"><span class="align-elem">
                            <?php echo $services['trebovanie'] ?>
                        </span></span>
                                <div class="price"><span class="price-inner"><span class="price-value"><span
                                                    class="align-elem"><?php echo number_format( $services['price'], 0, ' ', ' ' ) ?></span></span><span
                                                class="price-currency"><span
                                                    class="align-elem">руб.</span></span></span></div>
                                <div class="more text-center">
                                    <a data-toggle="modal" data-target="#orangeModalSubscription" href="##"><span
                                                class="align-elem">Записаться на курс</span></a>
                                </div>
                            </div>
                        </div>
					<?php }
				} ?>
            </div>
        </div>
    </section>
    <section class="bg_section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header">
                        <div class="header_text">
                            <div class="align-elem">ПОЧЕМУ НАС ВЫБИРАЮТ БУДУЩИЕ ВОДИТЕЛИ</div>
                        </div>

                    </div>
                    <div class="description">
                        <div class="align-elem">
                            <div class="align-elem" wm-editable="true">НАШИ ПРЕИМУЩЕСТВА</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-outer">
                        <div class="item s3-animator-zoomIn s3-animator-d2 s3-animator" data-s3-animator="zoomIn d2">
                            <div class="image"><span class="img-convert img-contain"><img
                                            src="https://wm-3728501.oml.ru/d/svg_image_6.svg" alt="Профессионализм"
                                            style="max-width: 100%; max-height: 100%;"></span>
                                <div class="image-inner"></div>
                            </div>
                            <span class="title"><span class="align-elem">Профессионализм</span></span>
                            <div class="text">
                                <div class="align-elem"><p>Сертифицированные инструкторы с огромным опытом работы</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-outer">
                        <div class="item s3-animator-zoomIn s3-animator-d2 s3-animator" data-s3-animator="zoomIn d2">
                            <div class="image"><span class="img-convert img-contain"><img
                                            src="https://wm-3728501.oml.ru/d/svg_image_7.svg" alt="Собственный автодром"
                                            style="max-width: 100%; max-height: 100%;"></span>
                                <div class="image-inner"></div>
                            </div>
                            <span class="title"><span class="align-elem">Собственный автодром</span></span>
                            <div class="text">
                                <div class="align-elem"><p>Своя оборудованная площадка для практических занятий</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-outer">
                        <div class="item s3-animator-zoomIn s3-animator-d2 s3-animator" data-s3-animator="zoomIn d2">
                            <div class="image"><span class="img-convert img-contain"><img
                                            src="https://wm-3728501.oml.ru/d/svg_image_8.svg" alt="Удобный график"
                                            style="max-width: 100%; max-height: 100%;"></span>
                                <div class="image-inner"></div>
                            </div>
                            <span class="title"><span class="align-elem">Удобный график</span></span>
                            <div class="text">
                                <div class="align-elem"><p>Занятия по теории и практика проводятся в удобное для Вас
                                        время</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-outer">
                        <div class="item s3-animator-zoomIn s3-animator-d2 s3-animator" data-s3-animator="zoomIn d2">
                            <div class="image"><span class="img-convert img-contain"><img
                                            src="https://wm-3728501.oml.ru/d/svg_image_9.svg"
                                            alt="Безопасные автомобили"
                                            style="max-width: 100%; max-height: 100%;"></span>
                                <div class="image-inner"></div>
                            </div>
                            <span class="title"><span class="align-elem">Безопасные автомобили</span></span>
                            <div class="text">
                                <div class="align-elem"><p>Все учебные машины - иномарки, не старше 4 лет прошедшие
                                        ТО</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-outer">
                        <div class="item s3-animator-zoomIn s3-animator-d2 s3-animator" data-s3-animator="zoomIn d2">
                            <div class="image"><span class="img-convert img-contain"><img
                                            src="https://wm-3728501.oml.ru/d/svg_image_10.svg" alt="Стоимость обучения"
                                            style="max-width: 100%; max-height: 100%;"></span>
                                <div class="image-inner"></div>
                            </div>
                            <span class="title"><span class="align-elem">Стоимость обучения</span></span>
                            <div class="text">
                                <div class="align-elem"><p>Поэтапная оплата без дополнительных платежей</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-outer">
                        <div class="item s3-animator-zoomIn s3-animator-d2 s3-animator" data-s3-animator="zoomIn d2">
                            <div class="image"><span class="img-convert img-contain"><img
                                            src="https://wm-3728501.oml.ru/d/svg_image_11.svg" alt="Комфорт"
                                            style="max-width: 100%; max-height: 100%;"></span>
                                <div class="image-inner"></div>
                            </div>
                            <span class="title"><span class="align-elem">Комфорт</span></span>
                            <div class="text">
                                <div class="align-elem"><p>Кулер и кондиционер в каждом классе, оборудованные столы</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 category_blocks">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="header">
                        <div class="header_text">
                            <div class="align-elem">БЛИЖАЙШИЕ НАБОРЫНА ОБУЧЕНИЕ</div>
                        </div>
                    </div>
                    <div class="description">
                        <div class="align-elem">
                            <div class="align-elem" wm-editable="true">НАШИ ГРУППЫ</div>
                        </div>
                    </div>
                </div>
				<?php
				$block_groupp = get_field( 'groupp', 72 );
				foreach ( $block_groupp as $item ) { ?>
                    <div class="col-lg-4 col-md-6 rounded mb-3">
                        <div class="item-outer rounded p-4 pt-5 pb-5">
                            <a href="<?php the_permalink(); ?>"><span class="title"><span
                                            class="align-elem"><?php echo $item['nazvanie'] ?></span></span></a>
                            <div class="text">
                                <div class="align-elem"><p><?php echo $item['kategorii'] ?></p></div>
                            </div>
                            <div class="price">
                                <span class="price-inner">
                                    <span class="price-value"><span
                                                class="align-elem"><?php echo number_format( $item['stoimost'], 0, ' ', ' ' ) ?></span></span><span
                                            class="price-currency"><span
                                                class="align-elem">руб.</span></span></span></div>
                            <div class="more text-center">
                                <a data-toggle="modal" data-target="#orangeModalSubscription" href="##"><span
                                            class="align-elem">Записаться на курс</span></a>
                            </div>
                            <span class="sub-title"><span class="align-elem">с 18 лет (обучение 65 дней)</span></span>
                        </div>
                    </div>
				<?php } ?>
            </div>
        </div>
    </section>
    <section class="about_home pt-4 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header">
                        <div class="align-elem">ВРЕМЯ ПОЛУЧАТЬ ПРАВА!</div>
                    </div>
                    <div class="title">
                        <div class="align-elem">ОБ АВТОШКОЛЕ</div>
                    </div>
                    <div class="text">
                        <div class="align-elem"><p>Обучение у нас - Ваш шаг к безопасному вождению на дорогах
                                <br>Основная миссия нашего учебного заведения - содействие гражданам Москвы и других
                                регионов России в изучении Правил и безопасности дорожного движения, и обучении
                                безопасному управлению транспортными средствами за счёт современных и эффективных
                                образовательных технологий, высокого профессионального уровня преподавательского
                                состава.<br><br>Необходимые документы для оформления в автошколу: 1. Паспорт, ИНН (Копии
                                1, 2, 11 страниц паспорта (или вида на жительство), копия ИНН); 2.&nbsp;Фотографии (3
                                фотографии для документов, размером 3.5см х 4.5см); 3.&nbsp;Аванс (Аванс от 1000 рублей,
                                чтобы записаться на курсы, на остаток - рассрочка); 4.&nbsp;Медицинская справка
                                (Необходимо пройти медкомиссию и получить соответствующую справку)<br></p></div>
                    </div>
                </div>
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
<?php get_footer() ?>