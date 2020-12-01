@extends('admin.mainLayout')

@section('title', $item->name)

@section('content')
<form action="{{ route('adminPanel.items.update', $item->id) }}" method="POST" enctype="multipart/form-data" id="item_update">
    @method('PUT')
    <div class="form-group">
        @csrf
        @if($errors->has('name'))
        <div class="alert alert-danger">
            @foreach($errors->get('name') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <div class="form-group row">
            <label for="item_name" class="col-sm-2 col-form-label"><strong>Наименование</strong></label>
            <div class="col-sm-10">
                <input type="text" name="name" id="item_name" class="form-control" placeholder="Наименование" value="{{ $item->name }}">
            </div>
        </div>

        @if($errors->has('settlement_id'))
        <div class="alert alert-danger">
            @foreach($errors->get('settlement_id') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <div class="form-group">
            <label for="settlement_id"><strong>Местоположение</strong></label>
            <select class="form-control js-search" id="settlement_id" name="settlement_id">
                @foreach($settlements as $settlement)
                <option value="{{ $settlement->id }}" @if($item->settlement->id == $settlement->id) selected @endif>{{ $settlement->name }}</option>
                @endforeach
            </select>
        </div>

        <label><strong>Характеристики техники</strong></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Длина</span>
            </div>
            <input type="number" name="length" class="form-control" placeholder="0" value="{{ $item->characteristic->length }}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Высота</span>
            </div>
            <input type="number" name="height" class="form-control" placeholder="0" value="{{ $item->characteristic->height }}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Ширина</span>
            </div>
            <input type="number" name="width" class="form-control" placeholder="0" value="{{ $item->characteristic->width }}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Масса</span>
            </div>
            <input type="number" name="mass" class="form-control" placeholder="0" value="{{ $item->characteristic->mass }}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Мощность</span>
            </div>
            <input type="number" name="power_watt" class="form-control" placeholder="0" value="{{ $item->characteristic->power_watt }}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Мощность (л.с.)</span>
            </div>
            <input type="number" name="horse_power" class="form-control" placeholder="0" value="{{ $item->characteristic->horse_power }}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Грузоподъемность</span>
            </div>
            <input type="number" name="lifting_capacity" class="form-control" placeholder="0" value="{{ $item->characteristic->lifting_capacity }}">
        </div>
        <br>

        <h5>Тэги</h5>
        @foreach($tags as $tag)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="tag_ids[]" id="inlineCheckbox . {{ $tag->id }}" value="{{ $tag->id }}" @if($item->tags->contains($tag->id)) checked @endif>
            <label class="form-check-label" for="inlineCheckbox . {{ $tag->id }}">{{ $tag->name }}</label>
        </div>
        @endforeach
        <br><br>

        <div class="form-group">
            <label for="media">Фотографии</label>
            <input type="file" multiple name="file[]" class="form-control-file" id="media">
        </div>

        @if($errors->has('description'))
        <div class="alert alert-danger">
            @foreach($errors->get('description') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <br>
        <div class="form-group">
            <label for="item_description"><strong>Описание</strong></label>
            <textarea class="form-control" id="item_description" rows="5" name="description">{{ $item->characteristic->description }}</textarea>
        </div>
    </div>
</form>
<form action="{{ route('adminPanel.items.delete', ['item' => $item->id]) }}" method="POST" id="item_delete">
    @csrf
</form>
<button type="submit" class="btn btn-outline-primary" form="item_update">Сохранить</button>
<button type="submit" class="btn btn-outline-danger" form="item_delete">Удалить</button>
@endsection