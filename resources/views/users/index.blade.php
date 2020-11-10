@extends('layouts.main')

@section('title', 'Users')

@section('content')
    @forelse($users as $item)
        <p>{{ $item->name }}</p>

        <hr>
    @empty
        Empty
    @endforelse

    {{ $users->links() }}
@endsection
