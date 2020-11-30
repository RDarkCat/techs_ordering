@extends('admin.mainLayout')

@section('title', $promo->item->name)

@section('content')
<form action="{{ route('adminPanel.promos.update', ['promo' => $promo->id]) }}" method="POST" id="promo_update">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Арендодатель</strong></label>
        <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" placeholder="ФИО" value="{{ $lessor->name }}" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="item"><strong>Техника</strong></label>
        <select class="form-control js-search" id="item" name="item_id">
            @foreach($lessor->items as $item)
            <option value="{{ $item->id }}" @if($item->id === $promo->item_id) selected @endif>{{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <label><strong>Стоимость</strong></label>
    <div class="input-group">
        <label for="price_per_hour" class="col-sm-2 col-form-label">За час</label>
        <input type="number" id="price_per_hour" name="price_per_hour" class="form-control" placeholder="Цена за час" value="{{ $promo->price_per_hour }}">
        <div class="input-group-append">
            <span class="input-group-text">&#8381</span>
        </div>
    </div>
    <br>
    <div class="input-group">
        <label for="price_per_day" class="col-sm-2 col-form-label">За день</label>
        <input type="number" id="price_per_day" name="price_per_day" class="form-control" placeholder="Цена за день" value="{{ $promo->price_per_day }}">
        <div class="input-group-append">
            <span class="input-group-text">&#8381</span>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="promo_description"><strong>Текст объявления</strong></label>
        <textarea class="form-control" id="promo_description" rows="5" name="description">{{ $promo->description }}</textarea>
    </div>
</form>
<form action="{{ route('adminPanel.promos.delete', ['promo' => $promo->id]) }}" method="POST" id="promo_delete">
    @csrf
</form>
<button type="submit" class="btn btn-outline-primary" form="promo_update">Сохранить</button>
<button type="submit" class="btn btn-outline-danger" form="promo_delete">Удалить</button>
@endsection