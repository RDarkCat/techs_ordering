@extends('admin.mainLayout')

@section('title', 'Создание тэга')

@section('content')

<form action="{{ route('adminPanel.tags.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="tag_name">Наименование</label>
        <input type="text" class="form-control" id="tag_name" placeholder="Наименование" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="tag_description">Описание</label>
        <textarea class="form-control" id="tag_description" rows="5" name="description">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
    <label for="parent">Родитель</label>
    <select class="form-control js-search" id="parent" name="parent_id">
    <option value="" @if($parent_id === null) selected @endif><Пустое значение></option>
        @foreach($parents as $parent)
        <option value="{{ $parent->id }}" @if($parent_id == $parent->id) selected @endif>{{ $parent->name }}</option>
        @endforeach
    </select>
    </div>
    <button type="submit" class="btn btn-outline-primary">Сохранить</button>
</form>
@endsection