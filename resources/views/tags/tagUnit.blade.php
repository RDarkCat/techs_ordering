@extends('admin.mainLayout')

@section('title', 'Тэг "' . $tag->name . '"')

@section('content')
<form action="{{ route('adminPanel.tags.update', ['tag' => $tag->id]) }}" method="POST" id="tag_update">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="tag_name">Наименование</label>
        <input type="text" class="form-control" id="tag_name" placeholder="Наименование" name="name" value="{{ $tag->name }}">
    </div>
    <div class="form-group">
        <label for="tag_description">Описание</label>
        <textarea class="form-control" id="tag_description" rows="5" name="description">{{ $tag->description }}</textarea>
    </div>
    <div class="form-group">
    <label for="parent">Родитель</label>
    <select class="form-control js-search" id="parent" name="parent_id">
    <option value="" @if($tag->parent_id === null) selected @endif><Пустое значение></option>
        @foreach($parents as $parent)
        <option value="{{ $parent->id }}" @if($tag->parent_id === $parent->id) selected @endif>{{ $parent->name }}</option>
        @endforeach
    </select>
    </div>
</form>
<form action="{{ route('adminPanel.tags.delete', ['tag' => $tag->id]) }}" method="POST" id="tag_delete">
    @csrf
</form>
<button type="submit" class="btn btn-outline-primary" form="tag_update">Сохранить</button>
<button type="submit" class="btn btn-outline-danger" form="tag_delete">Удалить</button>
@endsection