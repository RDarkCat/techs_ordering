@extends('layouts.main')

@section('title', 'Regions')

@section('content')
    @forelse($regions as $item)
        <p><a href="{{ route('showRegion', $item) }}">{{ $item->title }}</a></p>

        <hr>
    @empty
        Empty
    @endforelse

    {{ $regions->links() }}
@endsection
