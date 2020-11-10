@extends('layouts.main')

@section('title', 'city')

@section('content')
    @forelse($cities as $item)
        <p><a href="{{ route('showCity', $item) }}">{{ $item->title }}</a></p>

        <hr>
    @empty
        Empty
    @endforelse

    {{ $cities->links() }}
@endsection
