@extends('layouts.main')

@section('title', 'Machine')

@section('content')
    @forelse($machines as $item)
{{ $item->title }}
        <div>
            {{ $item->description }}
        </div>

        <hr>
    @empty
        Empty
    @endforelse

{{--    {{ $machines->links() }}--}}
@endsection
