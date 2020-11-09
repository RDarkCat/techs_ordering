@extends('layouts.main')

@section('title', 'Machine')

@section('content')
    <h1>{{ $machine->title }}</h1>
    <div>{{ $machine->description }}</div>
@endsection
