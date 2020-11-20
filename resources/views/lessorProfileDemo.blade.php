@extends('layouts.main')

@section('title', 'Личный кабинет')

@section('content')
<h1>Демо-кабинет арендодателя</h1>

<hr>

<div><a href="{{ route('demo_lessor') }}">Главная</a></div>
<div><a href="{{ route('items.usersItems') }}">Список техники</a></div>
<div><a href="{{ route('items.create') }}">Добавить новую единицу техники</a></div>

@endsection