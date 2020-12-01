@extends('admin.mainLayout')

@section('title', 'Техника')

@section('content')
<h4>Поиск</h4>
<form action="{{ route('adminPanel.itemsIndex') }}">
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

@foreach($items as $item)
@if($loop->odd || $loop->first)
<div class="row">
    @endif
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->item_name }}</h5>
                <p class="card-text"><strong>Арендодатель: </strong>{{ $item->lessor_name }}</p>
                <p class="card-text">Местоположение: {{ $item->settlement_name }}</p>
                <p class="card-text"><small class="text-muted">Создана: {{ $item->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Обновлена: {{ $item->updated_at }}</small></p>

                <form action="{{ route('adminPanel.items.delete', ['item' => $item->item_id]) }}" method="POST" id="item_delete . {{$item->item_id}}">
                    @csrf
                </form>
                <a href="{{ route('adminPanel.items.edit', ['item' => $item->item_id]) }}" class="btn btn-outline-primary">Редактировать</a>
                <button type="submit" class="btn btn-outline-danger" form="item_delete . {{$item->item_id}}">Удалить</button>
            </div>
        </div>
    </div>
    @if($loop->even || $loop->last)
</div>
<br>
@endif
@endforeach
<p>
    {{ $items->links() }}
</p>
@endsection