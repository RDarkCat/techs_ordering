@extends('layouts.main')

@section('title', 'Owners')

@section('content')
    @forelse($owners as $item)
        <p>{{ $item->name }} {{ $item->surname }}</p>
        {{ $item->phone }}
        <hr>
    @empty
        Empty
    @endforelse

    {{ $owners->links() }}
@endsection
