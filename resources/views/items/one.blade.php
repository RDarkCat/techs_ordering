@extends('layouts.main')

@section('title', 'Item')

@section('content')
    <h1>{{ $item->title }}</h1>
    <div>{{ $item->description }}</div>
@endsection
