@extends('layouts.main')

@section('title', 'Machine')

@section('content')
    @forelse($machines as $item)
        <h2><a href="{{ route('showMachine', $item) }}">{{ $item->title }}</a></h2>

        <div>
            {{ $item->description }}
        </div>

        <hr>
    @empty
        Empty
    @endforelse

    {{ $machines->links() }}
@endsection
