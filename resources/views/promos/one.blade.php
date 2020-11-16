@extends('layouts.main')

@section('title', 'Item')

@section('content')
    <h1>{{ $promo->item->name }}</h1>
    <div>Описание: {{ $promo->item->characteristic->description }}</div>
    <div>Длина: {{ $promo->item->characteristic->length }}</div>
    <div>Высота: {{ $promo->item->characteristic->height }}</div>
    <div>Ширина: {{ $promo->item->characteristic->width }}</div>
    <div>Масса: {{ $promo->item->characteristic->mass }}</div>
    <div>Мощность (Вт): {{ $promo->item->characteristic->power_watt }}</div>
    <div>Мощность (л/с): {{ $promo->item->characteristic->horse_power }}</div>
    <div>Грузоподъемность: {{ $promo->item->characteristic->lifting_capacity }}</div>
@endsection
