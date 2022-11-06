ymaps.ready(function(){
    // Создание карты.
    var myMap = new ymaps.Map("map", {
        // Координаты центра карты.
        // Порядок по умолчнию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [54.279678354299065,48.291938258266335],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 17,
        controls: ['routeButtonControl','typeSelector', 'zoomControl', 'trafficControl', 'fullscreenControl']

    });
    myMap.behaviors.disable('scrollZoom');

    var control = myMap.controls.get('routeButtonControl');

    // Откроем панель для построения маршрутов.
    control.state.set('expanded', false);

var phone = $('#phone').text();
var adress = $('#adress').text();

    var myPlacemark = new ymaps.Placemark([54.279678354299065,48.291938258266335], {
        // Хинт показывается при наведении мышкой на иконку метки.

        iconCaption: 'Автошкола Автопилот 73',
        balloonContentHeader: 'Автошкола Автопилот 73',
        // Балун откроется при клике по метке.
            balloonContentBody: '<img src="/wp-content/uploads/2022/09/cropped-avtopilot-73-logo-bez-telefona.png" height="150" width="200"> <br/>'+
                'Автошкола </br><i class="fa fa-map-marker-alt"></i> ' +adress+
                '</br><i class="fa fa-phone"></i> ' +phone+'',
                balloonContent: 'Автошкола </br><i class="fa fa-map-marker-alt"></i> ' +adress+
            '</br><i class="fa fa-phone"></i> ' +phone+'',
            balloonContentFooter: 'Информация предоставлена:<br/>OOO "АВТОПИЛОТ73',
            // Зададим содержимое всплывающей подсказки.,
            hintContent: 'Автошкола Автопилот 73'

    },
         {
             iconLayout: 'default#image',
             iconImageHref: '/wp-content/uploads/2022/10/cropped-favicon-32x32.png',
             iconImageSize: [30, 30],
             iconImageOffset: [5, 12]

        }
        );

// После того как метка была создана, ее
// можно добавить на карту.
    myMap.geoObjects.add(myPlacemark);

});