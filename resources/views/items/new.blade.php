@extends('layouts.main')

@section('title', 'Создание новой единицы техники')

@section('content')
<h1>Создание новой единицы техники</h1>

<hr>

<form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
        <input type="hidden" name="user_id" value="1">

        @if($errors->has('name'))
        <div class="alert alert-danger">
            @foreach($errors->get('name') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <input type="text" maxlength="255" class="form-control" name="name" placeholder="Наименование" value="{{old('name')}}" required><br>
        <br>

        @if($errors->has('settlement_id'))
        <div class="alert alert-danger">
            @foreach($errors->get('settlement_id') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <select name="settlement_id" required>
            @foreach($settlements as $settlement)
            <option value="{{ $settlement->id }}">{{ $settlement->name }}</option>
            @endforeach
        </select>

        <h4>Характеристики техники</h4>
        <input type="number" min='0' maxlength="11" class="form-control" name="length" placeholder="Длина" value="{{old('length')}}"><br><br>
        <input type="number" min='0' maxlength="11" class="form-control" name="height" placeholder="Высота" value="{{old('height')}}"><br><br>
        <input type="number" min='0' maxlength="11" class="form-control" name="width" placeholder="Ширина" value="{{old('width')}}"><br><br>
        <input type="number" min='0' maxlength="11" class="form-control" name="mass" placeholder="Масса" value="{{old('mass')}}"><br><br>
        <input type="number" min='0' maxlength="11" class="form-control" name="power_watt" placeholder="Мощность" value="{{old('power_watt')}}"><br><br>
        <input type="number" min='0' maxlength="11" class="form-control" name="horse_power" placeholder="Мощность (л.с.)" value="{{old('horse_power')}}"><br><br>
        <input type="number" min='0' maxlength="11" class="form-control" name="lifting_capacity" placeholder="Грузоподъемность" value="{{old('lifting_capacity')}}"><br><br>

        <h4>Тэги</h4>
        @foreach($tags as $tag)  
        <label><input type="checkbox" name="tag_ids[]" value="{{ $tag->id }}" /> {{ $tag->name }}</label>
        @endforeach
        <br><br>
        
        <input type="file" multiple name="file[]" multiple><br>

        @if($errors->has('description'))
        <div class="alert alert-danger">
            @foreach($errors->get('description') as $error)
            <p style="margin-bottom: 0;">{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <h4>Описание</h4>
        <textarea maxlength="65535" name="description" cols="30" rows="10" required>{{old('description')}}</textarea>
        <br><br>
        
        <div><button type="submit" class="btn btn-primary">Сохранить</button></div>
    </div>
</form>
@endsection