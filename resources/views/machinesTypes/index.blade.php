@extends('layouts.main')

@section('title', 'MachinesTypes')

@section('content')
    @forelse($machinesTypes as $item)
        <h2><a href="{{ route('showMachinesTypes', $item) }}">{{ $item->title }}</a></h2>

        <hr>
    @empty
        Empty
    @endforelse

    {{ $machinesTypes->links() }}
@endsection
