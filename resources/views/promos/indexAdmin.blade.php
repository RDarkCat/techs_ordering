@extends('admin.mainLayout')

@section('title', 'Объявления')

@section('content')
<h4>Поиск</h4>
<form action="{{ route('adminPanel.promosIndex') }}">
    <div class="form-group row">
        <div class="col-sm-10">
            <select class="form-control js-search" id="lessor" name="lessor_id" onchange="this.form.submit()">
                <option value="">Выберите арендодателя</option>
                @foreach($lessors as $lessor)
                <option value="{{ $lessor->lessor_id }}" @if(@array_key_exists('lessor_id', $parameters) && $lessor->lessor_id == $parameters['lessor_id']) selected @endif>{{ $lessor->lessor_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</form>

@foreach($promos as $promo)
@if($loop->odd || $loop->first)
<div class="row">
    @endif
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $promo->item_name }}</h5>
                <p class="card-text"><strong>Арендодатель: </strong>{{ $promo->lessor_name }}</p>
                <p class="card-text"><small class="text-muted">Создано: {{ $promo->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Обновлено: {{ $promo->updated_at }}</small></p>

                <form action="{{ route('adminPanel.promos.delete', ['promo' => $promo->promo_id]) }}" method="POST" id="promo_delete . {{$promo->promo_id}}">
                    @csrf
                </form>
                <a href="{{ route('adminPanel.promos.edit', ['promo' => $promo->promo_id]) }}" class="btn btn-outline-primary">Редактировать</a>
                <button type="submit" class="btn btn-outline-danger" form="promo_delete . {{$promo->promo_id}}">Удалить</button>
            </div>
        </div>
    </div>
    @if($loop->even || $loop->last)
</div>
<br>
@endif
@endforeach
<p>
    {{ $promos->links() }}
</p>
@endsection