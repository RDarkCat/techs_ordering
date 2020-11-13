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
        @include('parts/header')
        <style>
            .slider{background: url(https://via.placeholder.com/2200.png); background-size: cover;background-position: center;background-attachment: fixed;}
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
                            <img src="../img/excavator.png" alt="">
                            <div class="item_info">
                                <p>
                                    Трактор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/excavator.png" alt="">
                            <div class="item_info">
                                <p>
                                    Экскаватор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/excavator.png" alt="">
                            <div class="item_info">
                                <p>
                                    Трактор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Экскаватор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Трактор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Экскаватор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Трактор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        {{-- <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Экскаватор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            
                <div class="equipment_rent">

                    <h3>
                        Аренда оборудования
                    </h3>
                    <div class="services_orders__types">
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Бетономешалка
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Перфоратор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Электрогенератор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                        <div class="types__item">
                            <img src="../img/tracktor.png" alt="">
                            <div class="item_info">
                                <p>
                                    Компрессор
                                </p>
                                <button>Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-width bg-lgrey">
                <div class="container">
                    @include('parts/about')
                </div>
            </div>
            @include('parts/footer')
        </main>
    </body>
</html>
