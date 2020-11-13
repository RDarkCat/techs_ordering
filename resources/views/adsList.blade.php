<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GB PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    @include('parts/header')
    <div class="full-width">
        <div class="container">
            <div class="adverts-block">
                <div class="adverts-list">
                	@foreach($machines as $machine)
                    <div class="adverts-list__item">
                        <div class="item__img">
                            <img src="@if ($loop->index % rand(1, 3) == 0) ../img/excavator.png @else ../img/tracktor.png @endif" alt="">
                        </div>
                        <div class="item__descript">
                            <h4>
                                Название: {{ $machine['name'] }}
                            </h4>
                            <p>
                                Описание: {{ $machine['description'] }}
                            </p>
                            <p>
                                <b>
                                    Цена: <span>{{ $machine['price'] }}</span>
                                </b>
                            </p>
                            <button>Заказать</button>

                        </div>
                    </div>
                    @endforeach
                    <p>
                    {{ $machines->links("pagination::bootstrap-4") }}
                    </p>
                </div>
                
                <div class="sidebar">
                    <div class="sidebar-filter">
                        <h4>
                            Поиск техники
                        </h4>
                        <form action="">
                            <select name="" id="">
                                <option value="">Аренда спецтехники</option>
                                <option value="">Аренда инструментов</option>
                            </select>
                            <select name="" id="">
                                <option value="">Все</option>
                                <option value="">Тракторы</option>
                                <option value="">Погрузчики</option>
                            </select>
                            <select name="" id="">
                            	@foreach($regions as $region)
                                	<option value="">{{ $region['title'] }}</option>
                                @endforeach
                            </select>                            
                            <div class="radio-owner">
                                <input type="radio" name="owner" id="all" value="all" checked><label for="all">Все</label>
                                <input type="radio" name="owner" id="owner" value="owner"><label for="owner">Частник</label>
                                <input type="radio" name="owner" id="company" value="company"><label for="company">Компания</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('parts/footer')
</body>
</html>
