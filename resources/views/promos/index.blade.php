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
                    @foreach($promos as $promo)

                    <div class="adverts-list__item">
                        <div class="item__img">
                            <img src="@if ($loop->index % rand(1, 3) == 0) ../img/excavator.png @else ../img/tracktor.png @endif" alt="">
                        </div>
                        <div class="item__descript">
                            <h4>
                                Название: <a href="{{ route('promos.show', $promo) }}">{{ $promo->item->name }}</a>
                            </h4>
                            <p>
                                Описание: {{ $promo->item->characteristic->description }}
                            </p>
                            <p>
                                <b>
                                    Цена в час: <span>{{ $promo->price_per_hour }}</span>
                                </b>
                            </p>
                            <p>
                                <b>
                                    Цена в день: <span>{{ $promo->price_per_day }}</span>
                                </b>
                            </p>
                            <form>
                                <input type="hidden" name="item_id" value="{{ $promo['id'] }}">
                                <button formaction="{{ route('orders.create') }}">Заказать</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    <p>
                        {{ $promos->links() }}
                    </p>
                </div>

                <div class="sidebar">
                    <div class="sidebar-filter">
                        <h4>
                            Поиск техники
                        </h4>
                        <form action="{{ route('promos.search') }}" method="POST">
                        	@csrf
                            <select name="" id="">
                                <option value="">Аренда спецтехники</option>
                                <option value="">Аренда инструментов</option>
                            </select>
                            <select name="category" id="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
    							@endforeach
    						</select>
                            <select name="region" id="region">
                            	@foreach($regions as $region)
                                	<option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                            <div class="radio-owner">
                                <input type="radio" name="owner" id="all" value="all" checked><label for="all">Все</label>
                                <input type="radio" name="owner" id="owner" value="owner"><label for="owner">Частник</label>
                                <input type="radio" name="owner" id="company" value="company"><label for="company">Компания</label>
                            </div>
                            <button type="submit">Поиск</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('parts/footer')
</body>

</html>
