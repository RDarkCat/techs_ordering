@extends('layouts.main')

@section('title', 'Item')

@section('content')

<h1>{{ $item->name }}</h1>
@if(true)
<div><a href="{{ route('items.edit', ['item' => $item->id]) }}">Изменить</a> / <form action="{{ route('items.delete', ['item_id' => $item->id]) }}" method="post">
        @csrf
        <a href="#" onclick="parentNode.submit();">Удалить</a>
    </form>
</div>
@endif
<div>Описание: {{ $item->characteristic->description }}</div>
<div>Длина: {{ $item->characteristic->length }}</div>
<div>Высота: {{ $item->characteristic->height }}</div>
<div>Ширина: {{ $item->characteristic->width }}</div>
<div>Масса: {{ $item->characteristic->mass }}</div>
<div>Мощность (Вт): {{ $item->characteristic->power_watt }}</div>
<div>Мощность (л/с): {{ $item->characteristic->horse_power }}</div>
<div>Грузоподъемность: {{ $item->characteristic->lifting_capacity }}</div>
<div>Местоположение: {{ $item->settlement->name }}</div>
<div>
    @foreach($item->medias as $media)
    <img src="{{ asset('storage/' . $media->filename) }}" alt="none">
    @endforeach

    <h4>Тэги</h4>
    @foreach($item->tags as $tag)
    <p>{{ $tag->name }}</p>
    @endforeach
</div>

@endsection