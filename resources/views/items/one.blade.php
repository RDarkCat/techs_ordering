@extends('layouts.main')

@section('title', 'Item')

@section('content')
	
    <h1>{{ $item->title }}</h1>
    <div>Описание: {{ $item->characteristic->description }}</div>
    <div>Длина: {{ $item->characteristic->length }}</div>
    <div>Высота: {{ $item->characteristic->height }}</div>
    <div>Ширина: {{ $item->characteristic->width }}</div>   
    <div>Масса: {{ $item->characteristic->mass }}</div>  
    <div>Мощность (Вт): {{ $item->characteristic->power_watt }}</div> 
    <div>Мощность (л/с): {{ $item->characteristic->horse_power }}</div>
    <div>Грузоподъемность: {{ $item->characteristic->lifting_capacity }}</div>
@endsection
