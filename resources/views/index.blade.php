@extends('layouts.main')

@section('title', 'index')

@section('content')
    <h1>3 random item</h1>

    <hr>

    @forelse($items as $item)
        {{ $item->name }}
        <hr>
    @empty
        Empty
    @endforelse
@endsection
