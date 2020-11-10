@extends('layouts.main')

@section('title', 'Country')

@section('content')
    @forelse($countries as $item)
        <p><a href="{{ route('showCountry', $item) }}">{{ $item->title }}</a></p>

        <hr>
    @empty
        Empty
    @endforelse

    {{ $countries->links() }}
@endsection
