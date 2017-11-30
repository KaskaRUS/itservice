<!DOCTYPE html>
<html lang="ru_RU">

<head>
    <meta charset="UTF-8" http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>it</title>
    <link href="/web/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/web/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <div class="mobile-block">
            <div class="mobile-menu">
                <ul class="nav">
                    <li class="active"><a href="#">Главная</a></li>
                    <li><a href="#">Ссылка 1</a></li>
                    <li><a href="#">Ссылка 2</a></li>
                    <li><a href="#">Ссылка 3</a></li>
                </ul>
            </div>
        </div>
        <div class="header">
            <div class="container-fluid header-cont">
                <div class="row">
                    <div class="col-xs-6 col-md-4 header-block header-block-1">
                        <div class="content">
                            <div class="logo">
                                <a href="/"><img src="/web/img/logo.png" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-8 header-block header-block-2">
                        <div class="content">
                            <div class="main-menu">
                                <ul class="nav">
                                    <li class="active"><a href="#">Главная</a></li>
                                    <li><a href="#">Ссылка 1</a></li>
                                    <li><a href="#">Ссылка 2</a></li>
                                    <li><a href="#">Ссылка 3</a></li>
                                </ul>
                            </div>
                            <div class="menu-btn">
                                <div class="tcon tcon-menu--xcross">
                                    <span class="tcon-menu__lines"></span>
                                </div>
                            </div>
                            <div class="block-phone">
                                <div class="content">
                                    <p>+7 (999) 999-99-99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trinagle-top-left"></div>
                <div class="trinagle-top-right"></div>
            </div>
        </div>
        <div class="view-main-photo">
            <div class="view-content">
                <div class="main-photo-group">
                    <div class="main-photo-title">
                        <div class="container-fluid">
                            <h1>IT-АУТСОРСИНГ В КИРОВЕ И ОБЛАСТИ</h1>
                        </div>
                    </div>
                    <div class="main-photo-subtitle">
                        <div class="container-fluid">
                            <span>ОБСЛУЖИВАНИЕ И НАСТРОЙКА КОМПЬЮТЕРОВ (ПРИХОДЯЩИЙ СИСТЕМНЫЙ АДМИНИСТРАТОР)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="triangle-section container-fluid">
                <div class="trinagle-bottom-left"></div>
                <div class="square-left"></div>
                <div class="trinagle-bottom-right"></div>
                <div class="square-right"></div>
            </div>
            <div class="section">
                <div class="container-fluid">
                    <div class="view-feature">
                        <div class="view-content">
                            <div class="row">
                                <div class="col-xs-6 col-sm-4 views-row">
                                    <div class="row-content">
                                        <div class="feature-img">
                                            <img src="/web/img/feature_1.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="feature-title">
                                            <span>IT-АУТСОРСИНГ</span>
                                        </div>
                                        <div class="feature-text">
                                            <p>Комплексное обслуживание компьютеров и сетевого оборудования в Вашей компании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 views-row">
                                    <div class="row-content">
                                        <div class="feature-img">
                                            <img src="/web/img/feature_2.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="feature-title">
                                            <span>IT-АУТСОРСИНГ</span>
                                        </div>
                                        <div class="feature-text">
                                            <p>Комплексное обслуживание компьютеров и сетевого оборудования в Вашей компании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 views-row">
                                    <div class="row-content">
                                        <div class="feature-img">
                                            <img src="/web/img/feature_3.png" alt="" class="img-responsive">
                                        </div>
                                        <div class="feature-title">
                                            <span>IT-АУТСОРСИНГ</span>
                                        </div>
                                        <div class="feature-text">
                                            <p>Комплексное обслуживание компьютеров и сетевого оборудования в Вашей компании</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section dark-section">
                <div class="container-fluid">
                    <div class="block-real">
                        <p>Больше <strong>40 благодарных клиентов </strong>. Качество работы – всегда на высоте!</p>
                    </div>
                </div>
            </div>
            <div class="triangle-section container-fluid">
                <div class="trinagle-bottom-left"></div>
                <div class="square-left"></div>
                <div class="trinagle-bottom-right"></div>
                <div class="square-right"></div>
            </div>
            <div class="section">
                <div class="container-fluid">
                    <div class="view-clients">
                        <div class="view-title">
                            <h2>Наши клиенты<span>партнеры и клиенты</span></h2>
                        </div>
                        <div class="view-content">
                            <?php for ($i=0; $i < 6; $i++) { ?>
                                <div class="views-row">
                                    <div class="clients-img">
                                        <img src="/web/img/client_1.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-contact">
                <div class="map">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A57544afb9b75462cc6d16e0672446901b02dbb75daf17fd695603f34238cfccd&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
            </div>
            <div class="dark-section">
                <div class="triangle-section container-fluid">
                    <div class="trinagle-bottom-left"></div>
                    <div class="square-left"></div>
                    <div class="trinagle-bottom-right"></div>
                    <div class="square-right"></div>
                </div>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-6 first-footer">
                                <div class="logo">
                                    <a href="/"><img src="/web/img/logo.png" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-xs-6 second-footer">
                                <div class="block-contact">
                                    <div class="block-title">
                                        <span>Контакты</span>
                                    </div>
                                    <div class="phone">
                                        <p><i class="glyphicon glyphicon-earphone"></i>+7 (999) 999-99-9</p>
                                    </div>
                                    <div class="address">
                                        <p><i class="glyphicon glyphicon-pushpin"></i>г. Киров, ул. Халтурина 9-24</p>
                                    </div>
                                    <div class="mail">
                                        <p><i class="glyphicon glyphicon-send"></i>test@mail.ru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/web/js/jquery-3.2.1.min.js"></script>
    <script src="/web/js/site.js"></script>
</body>
</html>
