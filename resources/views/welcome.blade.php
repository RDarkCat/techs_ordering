<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <header>
            <div class="header_inside">
                <div class="header__city">
                    <u>Moscow</u>
                </div>
                <div class="header__logo">
                    <div class="header__logo__img">
                        LOGO
                    </div>
                </div>
                <div class="header__nav">
                    <a href="#">Главная</a>
                    <a href="#">Заказать</a>
                    <a href="#">Аренда</a>
                    <a href="#">Контакты</a>
                </div>
                <div class="header__logIn">
                    <div class="logIn__auth">
                        gg
                    </div>
                </div>
            </div>
        </header>
        <style>
            .slider{background: url(img/headPhoto.jpg); background-size: cover;background-position: center;background-attachment: fixed;}
        </style>
        <div class="slider">
            <div class="black-back">
                <div class="slider-content">
                    <h2>
                        Заказ и аренда строительной техники
                    </h2>
                </div>
            </div>
        </div>
        <main>
            <div class="container">
                <div class="services_orders">
                    <h3>
                        Заказ техники
                    </h3>
                    <div class="services_orders__types">
                        <div class="types__item">
                            <img src="img/tracktor.png" alt="">
                            <p>
                                Трактор
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <button>Заказать</button>
                        </div>
                        <div class="types__item">
                            <img src="img/excavator.png" alt="">
                            <p>
                                Экскаватор
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <button>Заказать</button>
                        </div>
                        <div class="types__item">
                            <img src="img/tracktor.png" alt="">
                            <p>
                                Трактор
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <button>Заказать</button>
                        </div>
                        <div class="types__item">
                            <img src="img/tracktor.png" alt="">
                            <p>
                                Трактор
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <button>Заказать</button>
                        </div>
                        <div class="types__item">
                            <img src="img/tracktor.png" alt="">
                            <p>
                                Трактор
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <button>Заказать</button>
                        </div>
                        <div class="types__item">
                            <img src="img/tracktor.png" alt="">
                            <p>
                                Трактор
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <button>Заказать</button>
                        </div>
                    </div>
                </div>
                <div class="equipment_rent">
                    <h3>

                    </h3>
                    
                </div>
            </div>
        </main>
    </body>
</html>
