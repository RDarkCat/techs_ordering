@extends('layouts.main')

@section('title', 'Оформление заказа')

@section('content')
<h1>Оформление заказа</h1>

<hr>

<form action="{{ route('orders.store', ['promo_id' => $promo_id]) }}" method="POST">
    <div class="form-group">
        @csrf
        @if($errors->has('contact_phone'))
        <div class="alert alert-danger">
            @foreach($errors->get('contact_phone') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <input type="tel" maxlength="50" class="form-control" name="contact_phone" placeholder="Укажите Ваш номер телефона" value="{{old('contact_phone')}}" required><br>
        <br>

        @if($errors->has('delivery_address'))
        <div class="alert alert-danger">
            @foreach($errors->get('delivery_address') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <input type="text" maxlength="65535" class="form-control" name="delivery_address" placeholder="Адрес доставки" value="{{old('delivery_address')}}" required><br>

        @if($errors->has('count'))
        <div class="alert alert-danger">
            @foreach($errors->get('count') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <p> Количество <input type="number" min="1" max="11" name="count" class="form-control" value="{{old('count')}}" required><br></p>

        @if($errors->has('comment'))
        <div class="alert alert-danger">
            @foreach($errors->get('comment') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <h4>Комментарий к заказу</h4>
        <textarea maxlength="65535" name="comment" cols="30" rows="10">{{old('comment')}}</textarea>
        <br><br>
        <div><button type="submit" class="btn btn-primary">Отправить</button></div>
    </div>
</form>
@endsection