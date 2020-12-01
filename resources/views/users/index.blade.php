@extends('admin.mainLayout')

@section('title', 'Пользователи')

@section('content')
@forelse($users as $user)
<div class="card bg-light mb-3">
    <div class="card-header">{{ $user->name }}</div>
    <div class="card-body">
        <h5 class="card-title">{{ $user->email }}</h5>
        @if($user->role->first())
        <p class="card-text">Роль: {{ $user->role->first()->role }}</p>
        @endif
        <p class="card-text"><small class="text-muted">Создан: {{ $user->created_at }}</small></p>
        <p class="card-text"><small class="text-muted">Обновлён: {{ $user->updated_at }}</small></p>
    </div>
    <a href="{{ route('adminPanel.users.edit', ['user' => $user->id]) }}" class="stretched-link"></a>
</div>
@empty
Нет данных для отображения
@endforelse

{{ $users->links() }}
@endsection