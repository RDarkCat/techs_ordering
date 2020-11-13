@extends('layouts.main')

@section('title', 'index')

@section('content')
    <h1>3 random machine</h1>

    <hr>

    @forelse($machines as $item)
        <h2><a href="{{ route('showMachine', $item) }}">{{ $item->title }}</a></h2>

        <div>
            {{ $item->description }}
        </div>

        <hr>
    @empty
        Empty
    @endforelse
@endsection
