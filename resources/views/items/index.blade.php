@extends('layouts.main')

@section('title', 'Item')

@section('content')
    @forelse($items as $item)
        {{ $item->name }}
        <div>
            Description: {{ $item->description }}
        </div>

        <hr>
    @empty
        Empty
    @endforelse

{{--    {{ $items->links() }}--}}
@endsection
